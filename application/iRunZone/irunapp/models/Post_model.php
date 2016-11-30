<?php

/**
 * Created by PhpStorm.
 * User: cuihao
 * Date: 2016/11/30
 * Time: 14:41
 */
class Post_model extends CI_Model {

    public function insert($title,$content,$uid) {
        $data = array(
            'title' => $title,
            'content' => $content,
            'uid' => $uid
        );
        $this->db->insert('t_post',$data);
    }

    public function getSummaryList($offset, $limit) {
        $sql = "SELECT pid, title, uid FROM t_post LIMIT ? OFFSET ? ";
        $query = $this->db->query($sql,array($limit,$offset));
        return $query->result();
    }

    public function getDetail($pid) {
        $query = $this->db->get('t_post',array('pid'=>$pid));
        return $query->row();
    }

    public function getMyList($uid, $offset, $limit){
        $sql = "SELECT pid, title, uid FROM t_post WHERE uid=? LIMIT ? OFFSET ? ";
        $query = $this->db->query($sql,array($uid, $limit,$offset));
        return $query->result();
    }
}