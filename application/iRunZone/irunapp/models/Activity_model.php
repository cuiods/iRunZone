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
}