<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: cuihao
 * Date: 2016/11/30
 * Time: 13:04
 */
class Post extends CI_Controller {

    public function index() {
        $this->authdetect();
        $this->load->view('post/post_view');
    }

    public function create() {
        $this->load->model('post_model');
        $this->post_model->insert($_POST['postName'],$_POST['content'],$_SESSION['uid']);
        redirect("/post/my");
    }

    public function detail($pid) {
        $this->load->model('post_model');
        $result = $this->post_model->getDetail($pid);
        $data['detail'] = $result;
        $this->load->view("post/post_detail",$data);
    }

    public function show() {
        $this->authdetect();
        $this->load->model("post_model");
        $result = $this->post_model->getSummaryList(0,10);
        $data['summary'] = $result;
        $this->load->view('post/post_show',$data);
    }

    public function my() {
        $this->authdetect();
        $this->load->model("post_model");
        $result = $this->post_model->getMyList($_SESSION['uid'], 0,10);
        $data['summary'] = $result;
        $this->load->view('post/post_my',$data);
    }

    public function delete($pid) {
        $this->load->model('post_model');
        $this->post_model->deletePost($pid);
        redirect("/post/my");
    }

    private function authdetect() {
        if (!isset($_SESSION['username'])||!isset($_SESSION['uid'])) {
            redirect("/auth/loginview");
        }
    }

}