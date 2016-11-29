<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * just to add test data
 * User: st0001
 * Date: 2016/11/29
 * Time: 10:02
 */
class AddData extends CI_Controller {


    public function addTrackData() {
        $this->load->model('sport_model');
        for ($i = 0; $i < 2500; $i++) {
            $this->sport_model->addTrackData(3,1477526400000+$i*1200000,8000+mt_rand(-3000,3000));
            echo $i."\n";
        }
    }

    public function addBodyData() {
        $this->load->model('sport_model');
        date_default_timezone_set("Asia/Shanghai");
        for ($i = 0; $i < 5; $i++) {
            $this->sport_model->addBodyData(3,date("Y-m-d", strtotime("+$i days")),170+mt_rand(-3,3), 65+mt_rand(-5,5));
        }
        echo 'complete';
    }

    public function addExerciseData() {
        $this->load->model('sport_model');
        for ($i = 1; $i < 10; $i++) {
            $this->sport_model->addExerciseData(3,date("Y-m-d", strtotime("+$i days")),500+mt_rand(-200,200),8000+mt_rand(-3000,3000), 5000+mt_rand(-1500,1500), 60+mt_rand(-40,40));
        }
        echo 'complete';
    }

    public function addSleepData() {
        $this->load->model('sport_model');
        for ($i = 1; $i < 10; $i++) {
            $tempDetal = array();
            for ($j = 0; $j < 12; $j++) {
                $tempDetal[$j] = mt_rand(1,3);
            }
            for ($j = 12; $j < 24; $j++) {
                $tempDetal[$j] = mt_rand(3,16);
            }
            for ($j = 24; $j < 72; $j++) {
                $tempDetal[$j] = mt_rand(0,2);
            }
            $this->sport_model->addSleepData(3,date("Y-m-d", strtotime("+$i days")),180+mt_rand(-100,100),60+mt_rand(-40,40),480+mt_rand(-60,60),300+mt_rand(-40,40),implode(",",$tempDetal));
        }
        echo 'complete!';
    }

}