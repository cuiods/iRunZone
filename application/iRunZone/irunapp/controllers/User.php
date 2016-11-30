<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: cuihao
 * Date: 2016/11/30
 * Time: 9:39
 */
class User extends CI_Controller {

    public function index() {
        $this->userInfo($_SESSION['uid']);
    }

    public function password() {
        $this->load->view('user/user_password');
    }

    public function friends() {
        $this->load->model('user_model');
        $follower = $this->user_model->getFollower($_SESSION['uid']);
        $following = $this->user_model->getFollowing($_SESSION['uid']);
        $data['follower'] = $follower;
        $data['following'] = $following;
        $this->load->view('user/user_friends',$data);
    }

    public function changePsw() {
        $this->load->helper(array('form'));
        $this->load->model('user_model');
        $this->form_validation->set_rules('oldpsw', 'OldPassword', 'required');
        $this->form_validation->set_rules('newpsw1', 'Password', 'required');
        $this->form_validation->set_rules('newpsw2', 'Password Confirmation', 'required|matches[newpsw1]');
        if ($this->form_validation->run() == TRUE) {
            $this->user_model->updatePsw(md5($_POST['newpsw1']),$_SESSION['uid']);
            session_destroy();
            $this->load->view('auth/login_view');
        } else {
            redirect('/user/password');
        }
    }

    public function password_check($str) {
        if ($this->user_model->verifyPsw($_SESSION['uid'],md5($str))) {
            return TRUE;
        } else {
            $this->form_validation->set_message('password_check', '原密码错误，请重新输入原密码');
            return FALSE;
        }
    }

    public function userInfo($uid) {
        $this->load->model('user_model');
        $user = $this->user_model->getUserInfo($uid);
        $posts = $this->user_model->getUserPost($uid);
        $activities = $this->user_model->getUserActivity($uid);
        $follower = $this->user_model->getFollowing($_SESSION['uid']);
        $data['user'] = $user;
        $data['posts'] = $posts;
        $data['activities'] = $activities;
        $isFollow = -1;
        if ($uid==$_SESSION['uid']) {
            $isFollow = 0;
        } else {
            foreach ($follower as $item) {
                if ($item->uid==$uid) {
                    $isFollow = 1;
                    break;
                }
            }
        }
        $data['isFollow'] = $isFollow;
        $this->load->view("user/user_view",$data);
    }

    public function follow($targetuid) {
        $this->load->model('user_model');
        $this->user_model->follow($_SESSION['uid'],$targetuid);
        redirect("/user/userInfo/$targetuid");
    }

    public function unfollow($targetuid) {
        $this->load->model('user_model');
        $this->user_model->unfollow($_SESSION['uid'],$targetuid);
        redirect("/user/userInfo/$targetuid");
    }

}