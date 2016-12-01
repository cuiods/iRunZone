<?php
/**
 * auth model: register and login
 * User: cuihao
 */
class Auth_model extends CI_Model {
    /**
     * user register
     * @param $name
     * @param $psw
     */
    public function user_register($name, $psw) {
        $data = array('uname' => $name, 'psw' => $psw);
        $str =  $this->db->insert_string('t_user_base', $data);
        $this->db->query($str);
        $user = $this->getUserIdByName($name);
        if (isset($user)) {
            $data2 = array('uid'=>$user->uid,'birthday'=>'1996-01-01','sex'=>0,'location'=>'南京');
            $this->db->insert('t_user_info',$data2);
        }
    }

    /**
     * verify login info
     * @param $userName
     * @param $password
     * @return int
     * 0: user not exist
     * 1: error password
     * 2: correct
     */
    public function verifyUser($userName, $password) {
        $result_code = 0;
        $sql = "SELECT * FROM t_user_base WHERE uname = ?";
        $query = $this->db->query($sql, array($userName));
        foreach ($query->result() as $row) {
            if ($row->psw == $password) {
                $result_code = 2;
                $this->session->set_userdata("type",$row->login_type);
            } else {
                $result_code = 1;
            }
        }
        return $result_code;
    }

    public function getUserIdByName($username) {
        $sql = "SELECT * FROM t_user_base WHERE uname = ?";
        $query = $this->db->query($sql, array($username));
        foreach ($query->result() as $row) {
            return $row->uid;
        }
    }
}