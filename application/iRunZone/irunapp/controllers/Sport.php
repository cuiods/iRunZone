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

    /**
     * !!ajax method
     * get sport info, includes meter,minutes,calories and complete rate
     */
    public function sportinfo() {
        $this->load->model('sport_model');
        $uid = $_SESSION['uid'];
        $sum = $this->sport_model->getSumSportData($_SESSION['uid']);
        $steps = $this->sport_model->getTodayStep($uid);
        $data['distance'] = $sum->meters;
        $data['time'] = $sum->minutes;
        $data['calorie'] = $sum->calories;
        if (!isset($steps)) {
            $data['rate'] = 0;
        } else {
            $rate = $steps->steps * 1.0 / $steps->ideal_steps * 100;
            if ($rate>100) $rate = 100;
            $data['rate'] = $rate;
        }
        echo json_encode($data);
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