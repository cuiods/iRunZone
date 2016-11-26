<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * sport statistic module controller
 * User: cuihao
 * Date: 2016/11/26
 * Time: 15:03
 */
class Sport extends CI_Controller {

    public function index() {
        if (!isset($_SESSION['username'])) {
            redirect("/auth/loginview");
        }
        $this->load->view('sport/sport_view');
    }

}