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

    /**
     * !!ajax method
     * get meter per 20 minutes
     */
    public function getTrackInfo() {
        $this->load->model('sport_model');
        $result = $this->sport_model->getTrackData($_SESSION['uid'],microtime());
        $i = 0;
        foreach ($result as $item) {
            $data[$i++] = array((double) $item->time,$item->meter);
        }
        echo json_encode($data);
    }

    /**
     * !!ajax method
     * get exercise info per day
     */
    public function getExerciseInfo() {
        $this->load->model('sport_model');
        $result = $this->sport_model->getExerciseData($_SESSION['uid'],30);
        $i = 0;
        foreach ($result as $item) {
            $date[$i] = $item->date;
            $steps[$i] = $item->steps;
            $minutes[$i] = $item->minutes;
            $calories[$i] = $item->calories;
            $i++;
        }
        $data['date'] = $date;
        $data['steps'] = $steps;
        $data['minutes'] = $minutes;
        $data['calories'] = $calories;
        echo json_encode($data);
    }

    public function getSleepInfo() {
        $this->load->model('sport_model');
        $result = $this->sport_model->getSleepInfo($_SESSION['uid']);
        $data['complete'] = $result->sleep_complete;
        $data['total'] = $result->total_minutes;
        $data['light'] = $result->light_minutes;
        $detail = explode(",",$result->detail);
        for ($i = 0; $i < count($detail); $i++) {
            $detailInt[$i] = intval($detail[$i]);
        }
        $data['detail'] = $detailInt;
        echo json_encode($data);
    }

    public function getBodyInfo() {
        $this->load->model('sport_model');
        $result = $this->sport_model->getBodyInfo($_SESSION['uid']);
        $i = 0;
        foreach ($result as $row) {
            $date[$i] = $row->date;
            $height[$i] = intval($row->height);
            $weight[$i] = intval($row->weight);
            $i++;
        }
        $data['date'] = $date;
        $data['height'] = $height;
        $data['weight'] = $weight;
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