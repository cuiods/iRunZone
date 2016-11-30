<?php

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016/11/29
 * Time: 19:35
 */
class Activity_model extends CI_Model {

    public function create($title,$type,$start,$end,$description,$uid) {
        $data = array(
            'title'=>$title,
            'type'=>$type,
            'start'=>$start,
            'end'=>$end,
            'description'=>$description,
            'uid'=>$uid
        );
        $this->db->insert('t_activity',$data);
    }

    public function getTotalNum() {
        $sql = "SELECT COUNT(*) AS num FROM t_activity ";
        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            return $row;
        }
    }

    public function getActivity($offset, $limit) {
        $sql = "SELECT * FROM t_activity ORDER BY aid DESC LIMIT ? OFFSET ? ";
        $query = $this->db->query($sql,array($limit,$offset));
        return $query->result();
    }

    public function getMyActvity($uid, $offset, $limit) {
        $sql = "SELECT * FROM t_activity WHERE uid=? ORDER BY aid DESC LIMIT ? OFFSET ? ";
        $query = $this->db->query($sql,array($uid, $limit,$offset));
        return $query->result();
    }

    public function getActivityDetail($aid) {
        $query = $this->db->get("t_activity",array("aid"=>$aid));
        foreach ($query->result() as $row) {
            return $row;
        }
    }

    public function getActivityJoiner($aid) {
        $query = $this->db->get("t_activity",array("aid"=>$aid));
        foreach ($query->result() as $row) {
            $activity = $row;
            break;
        }
        $result = array();
        if ($activity->type == 0) {
            $sql = "SELECT * FROM t_activity_join joiner JOIN t_user_base base ON joiner.uid=base.uid WHERE joiner.aid=? ";
            $query = $this->db->query($sql,array($aid));
            $result = $query->result();
        }
        return $result;
    }

    public function insertJoiner($aid, $uid) {
        $data = array(
            'aid'=>$aid,
            'uid'=>$uid
        );
        $this->db->insert('t_activity_join',$data);
    }

    public function deleteActivity($aid) {
        $this->db->delete("t_activity",array("aid"=>$aid));
    }
}