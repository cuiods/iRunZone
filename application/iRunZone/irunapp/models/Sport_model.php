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

    public function getTodayStep($uid) {
        $sql = "SELECT steps,ideal_steps FROM t_exercise JOIN t_user_info ON t_exercise.uid = t_user_info.uid WHERE t_exercise.uid = ? ";
        $query = $this->db->query($sql, array($uid));
        foreach ($query->result() as $row) {
            return $row;
        }
    }

}