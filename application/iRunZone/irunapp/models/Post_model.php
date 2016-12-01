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

    public function deletePost($pid) {
        $this->db->delete("t_post",array("pid"=>$pid));
    }

    public function getSummaryList($offset, $limit) {
        $sql = "SELECT pid, title, uid FROM t_post LIMIT ? OFFSET ? ";
        $query = $this->db->query($sql,array($limit,$offset));
        return $query->result();
    }

    public function getDetail($pid) {
        $sql = "SELECT * FROM t_post WHERE pid = ? ";
        $query = $this->db->query($sql,array($pid));
        foreach ($query->result() as $item) {
            return $item;
        }
    }

    public function getMyList($uid, $offset, $limit){
        $sql = "SELECT pid, title, uid FROM t_post WHERE uid=? LIMIT ? OFFSET ? ";
        $query = $this->db->query($sql,array($uid, $limit,$offset));
        return $query->result();
    }
}