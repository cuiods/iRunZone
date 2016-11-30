<?php

/**
 * Created by PhpStorm.
 * User: st0001
 * Date: 2016/11/30
 * Time: 18:25
 */
class User_model extends CI_Model {

    public function getUserInfo($uid) {
        $sql = "SELECT * FROM v_user_full WHERE uid=? ";
        $query = $this->db->query($sql,array('uid'=>$uid));
        return $query->row();
    }

    public function updatePsw($psw,$uid) {
        $sql = "UPDATE t_user_base SET psw=? WHERE uid=? ";
        $this->db->query($sql,array($psw,$uid));
    }

    public function getUserPost($uid) {
        $sql = "SELECT pid, title, uid FROM t_post WHERE uid=? ";
        $query = $this->db->query($sql,array($uid));
        return $query->result();
    }

    public function getUserActivity($uid){
        $sql = "SELECT * FROM t_activity WHERE uid=? ORDER BY aid DESC ";
        $query = $this->db->query($sql,array($uid));
        return $query->result();
    }

    public function verifyPsw($uid, $psw) {
        $sql = "SELECT * FROM t_user_base WHERE uid=? AND psw=? ";
        $query = $this->db->query($sql,array($uid,$psw));
        $result =  $query->result();
        $tag = FALSE;
        foreach ($result as $item) {
            $tag=TRUE;
        }
        return $tag;
    }

    public function getFollower($uid) {
        $sql = "SELECT u.uid,u.uname FROM t_follow f JOIN t_user_base u ON f.uid = u.uid WHERE f.follower=?  ";
        $query = $this->db->query($sql,array($uid));
        return $query->result();
    }

    public function getFollowing($uid) {
        $sql = "SELECT u.uid,u.uname FROM t_follow f JOIN t_user_base u ON f.follower = u.uid WHERE f.uid=?  ";
        $query = $this->db->query($sql,array($uid));
        return $query->result();
    }

    public function follow($uid, $targetuid) {
        $data = array(
            'uid' => $uid,
            'follower' => $targetuid
        );
        $this->db->insert('t_follow',$data);
    }

    public function unfollow($uid, $targetuid) {
        $this->db->delete("t_follow",array("uid"=>$uid, "follower"=>$targetuid));
    }

}