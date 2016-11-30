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
        $this->load->view("user/user_view");
    }

}