<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    /**
     * show register page
     */
    public function index() {
        $this->load->view('auth/register_view');
    }

    public function loginview() {
        $this->load->view('auth/login_view');
    }

    public function logout() {
        session_destroy();
        redirect('/welcome');
    }

    /**
     * register controller
     */
    public function register() {
        $this->load->helper(array('form'));

        $this->form_validation->set_rules(
            'username', '用户名',
            'required|min_length[5]|max_length[12]|is_unique[t_user_base.uname]',
            array(
                'required'  => '请输入 %s.',
                'is_unique' => '用户名已存在.',
                'min_length' => '%s 最少输入5位字母或数字',
                'max_length' => '%s 最多输入12位字母或数字'
            )
        );
        $this->form_validation->set_rules('password', '密码', 'required', array('required'=>'请输入密码'));
        $this->form_validation->set_rules('passconfirm', '密码', 'required|matches[password]',
            array(
                'required'  => '请再次输入 %s.',
                'matches' => '两次密码输入不一致'
            )
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/register_view');
        } else {
            $this->load->model('auth_model');
            $tag = $this->auth_model->user_register($_POST ['username'], md5($_POST ['password']));
            redirect('/welcome');
        }
    }

    /**
     * login controller
     */
    public function login() {
        $this->load->helper(array('form'));
        $this->form_validation->set_rules(
            'username_login', '用户名', 'required',
            array(
                'required'  => '请输入 %s.'
            )
        );
        $this->form_validation->set_rules(
            'password_login', '密码', 'required',
            array(
                'required'  => '请输入 %s.'
            )
        );
        if ($this->form_validation->run() == false) {
            redirect('/auth');
        } else {
            $userName = $_POST['username_login'];
            $this->load->model('auth_model');
            $result_code = $this->verifyUser($userName,md5($_POST['password_login']));
            $this->session->set_userdata('login_code',$result_code);
            if ($result_code == 2) {
                $this->session->set_userdata('username',$userName);
                $this->session->set_userdata('uid',$this->auth_model->getUserIdByName($userName));
                redirect("/welcome");
            }
            redirect("/welcome");
        }
    }

    /**
     * verify user info
     * @param $userName
     * @param $password
     * @return mixed
     */
    private function verifyUser($userName, $password) {
        return $this->auth_model->verifyUser($userName, $password);
    }
}
