<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * sport statistic module controller
 * User: cuihao
 * Date: 2016/11/26
 * Time: 15:03
 */
class Sport extends CI_Controller {

    /**
     * index page of sport
     */
    public function index() {
        $this->authdetect();
        $this->load->model('sport_model');
        $result = $this->sport_model->getSumSportData($_SESSION['uid']);
        $data['sum'] = $result;
        $this->load->view('sport/sport_view', $data);
    }

    public function sportinfo() {
        $this->load->model('sport_model');
        $uid = $_SESSION['uid'];

        $steps = $this->sport_model->getTodayStep($uid);
        $data['steps'] = $steps;
        echo $data;
    }

    public function exercise() {
        $this->authdetect();
        $this->load->view('sport/sport_exercise');
    }

    public function sleepstat() {
        $this->authdetect();
        $this->load->view('sport/sport_sleep');
    }

    public function bodyinfo() {
        $this->authdetect();
        $this->load->view('sport/sport_body');
    }

    private function authdetect() {
        if (!isset($_SESSION['username'])||!isset($_SESSION['uid'])) {
            redirect("/auth/loginview");
        }
    }

}