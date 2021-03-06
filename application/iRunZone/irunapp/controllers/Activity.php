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
        redirect("/activity/show");
    }

    public function show() {
        $this->authdetect();
        $this->load->model('activity_model');
        $result = $this->activity_model->getActivity(0,10);
        date_default_timezone_set("Asia/Shanghai");
        $i=0;
        $data=array();
        foreach ($result as $item) {
            $temp = array();
            $start = date_create();
            $end = date_create($item->end);
            $left = date_diff($start,$end);
            $temp['left']=$left;
            $temp['aid']=$item->aid;
            $temp['title']=$item->title;
            $temp['type']=$item->type;
            $temp['description']=$item->description;
            $temp['uid']=$item->uid;
            $data[$i++] = $temp;
        }
        $final['data'] = $data;
        $this->load->view("activity/activity_show",$final);
    }

    public function showPage($offset, $limit) {

    }

    public function my() {
        $this->authdetect();
        $this->load->model('activity_model');
        $result = $this->activity_model->getMyActvity($_SESSION['uid'],0,10);
        date_default_timezone_set("Asia/Shanghai");
        $i=0;
        $data=array();
        foreach ($result as $item) {
            $temp = array();
            $start = date_create();
            $end = date_create($item->end);
            $left = date_diff($start,$end);
            $temp['left']=$left;
            $temp['aid']=$item->aid;
            $temp['title']=$item->title;
            $temp['type']=$item->type;
            $temp['description']=$item->description;
            $temp['uid']=$item->uid;
            $data[$i++] = $temp;
        }
        $final['data'] = $data;
        $this->load->view("activity/activity_my",$final);
    }

    public function joinActivity($aid) {
        $this->load->model('activity_model');
        $this->activity_model->insertJoiner($aid, $_SESSION['uid']);
        redirect("/activity/detail/".$aid);
    }

    public function leaveActivity($aid) {
        $this->load->model('activity_model');
        $this->activity_model->deleteJoiner($aid, $_SESSION['uid']);
        redirect("/activity/detail/".$aid);
    }

    public function editActivity($aid) {
        $this->load->model('activity_model');
        $row = $this->activity_model->getActivityDetail($aid);
        $this->load->view('activity/activity_edit',$row);
    }

    public function edit($aid) {
        $this->authdetect();
        $this->load->model('activity_model');
        $this->activity_model->editActivity($aid,$_POST['activityName'],$_POST['activityType'],$_POST['startTime'],$_POST['endTime'],$_POST['description'],$_SESSION['uid']);
        redirect("/activity/my");
    }

    public function detail($aid) {
        $this->load->model('activity_model');
        $row = $this->activity_model->getActivityDetail($aid);
        $joiners = $this->activity_model->getActivityJoiner($aid);
        $row->joiners = $joiners;
        $this->load->view('activity/activity_detail',$row);
    }

    public function delete($aid) {
        $this->load->model('activity_model');
        $this->activity_model->deleteActivity($aid);
        redirect("/activity/my");
    }

    private function authdetect() {
        if (!isset($_SESSION['username'])||!isset($_SESSION['uid'])) {
            redirect("/auth/loginview");
        }
    }
}