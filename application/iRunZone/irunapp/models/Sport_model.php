<?php

/**
 * sport module model
 * User: cuihao
 * Date: 2016/11/28
 * Time: 20:50
 */
class Sport_model extends CI_Model {

    /**
     * get sum sport data, includes sum of calories, meters and minutes.
     * @param $uid
     * @return mixed
     */
    public function getSumSportData($uid) {
        $sql = "SELECT SUM(calories) AS calories, SUM(meters) AS meters, SUM(minutes) AS minutes FROM t_exercise WHERE uid = ? ";
        $query = $this->db->query($sql, array($uid));
        foreach ($query->result() as $row) {
            return $row;
        }
    }

    /**
     * get today steps
     * @param $uid
     * @return mixed
     */
    public function getTodayStep($uid) {
        $sql = "select steps,ideal_steps FROM t_exercise JOIN t_user_info ON t_exercise.uid = t_user_info.uid WHERE t_exercise.uid = ? AND abs(julianday('now')-julianday(date))<1";
        $query = $this->db->query($sql, array($uid));
        foreach ($query->result() as $row) {
            return $row;
        }
    }

    /**
     * get track time
     * @param $uid
     * @param $time
     */
    public function getTrackData($uid, $time) {
        $sql = "select time,meter from t_track where uid = ? AND time < ?";
        $query = $this->db->query($sql, array($uid,$time));
        return $query->result();
    }

    /**
     * get exercise data in {$days} days
     * @param $uid
     * @param $days
     * @return mixed
     */
    public function getExerciseData($uid,$days) {
        $sql = "select * from t_exercise WHERE uid = ? AND julianday('now')-julianday(date)<=? AND julianday('now')-julianday(date)>=0 ";
        $query = $this->db->query($sql, array($uid,$days));
        return $query->result();
    }

    /**
     * get sleep info
     */
    public function getSleepInfo($uid) {
        $sql = "select * from t_sleep WHERE uid=? AND abs(julianday('now')-julianday(date))<1 LIMIT 1";
        $query = $this->db->query($sql, array($uid));
        foreach ($query->result() as $row) {
            return $row;
        }
    }

    public function getBodyInfo($uid) {
        $sql = "select * from t_body WHERE uid=? AND julianday('now')-julianday(date)>=0 AND julianday('now')-julianday(date)<=30";
        $query = $this->db->query($sql, array($uid));
        return $query->result();
    }

    public function addTrackData($uid, $time, $meter) {
        $data = array(
            'uid' => $uid,
            'time' => $time,
            'meter' => $meter
        );
        $this->db->insert('t_track', $data);
    }

    public function addSportData($uid, $date, $calories, $steps, $meters, $minutes) {
        $data = array(
            'uid' => $uid,
            'date' => $date,
            'calories' => $calories,
            'steps' => $steps,
            'meters' => $meters,
            'minutes' => $minutes
        );
        $this->db->insert('t_exercise', $data);
    }

    public function addSleepData($uid, $date, $deep_minutes, $sleep_complete, $total_minutes, $light_minutes, $detail) {
        $data = array(
            'uid'=>$uid,
            'date'=>$date,
            'deep_minutes'=>$deep_minutes,
            'sleep_complete'=>$sleep_complete,
            'total_minutes'=>$total_minutes,
            'light_minutes'=>$light_minutes,
            'detail'=>$detail
        );
        $this->db->insert('t_sleep',$data);
    }

    public function addBodyData($uid, $date, $height, $weight) {
        $data = array(
            'uid' => $uid,
            'date' => $date,
            'height' => $height,
            'weight' => $weight
        );
        $this->db->insert('t_body',$data);
    }
}