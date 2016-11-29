<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Activity module controller
 * User: cuihao
 * Date: 2016/11/29
 * Time: 16:54
 */
class Activity extends CI_Controller {
    public function index() {
        $this->authdetect();
        $this->load->view("activity/activity_view");
    }

    public function create() {
        $this->load->model('activity_model');
        $this->activity_model->create($_POST['activityName'],$_POST['activityType'],$_POST['startTime'],$_POST['endTime'],$_POST['description'],$_SESSION['uid']);
        echo 'sucess!';
    }

    public function show() {
        $this->authdetect();
        $this->load->view("activity/activity_show");
    }

    public function my() {
        $this->authdetect();
        $this->load->view("activity/activity_my");
    }

    private function authdetect() {
        if (!isset($_SESSION['username'])||!isset($_SESSION['uid'])) {
            redirect("/auth/loginview");
        }
    }
}