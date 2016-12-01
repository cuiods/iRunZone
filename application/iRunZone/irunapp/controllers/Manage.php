<?php


class Manage extends CI_Controller {
    public function index() {
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
        $this->load->view("activity/activity_my",$final);
    }

    public function post() {
        $this->load->model("post_model");
        $result = $this->post_model->getSummaryList(0,20);
        $data['summary'] = $result;
        $this->load->view('post/post_my',$data);
    }
}