<?php
/**
 * test model: useless and meaningless
 * User: cuihao
 * Date: 2016/11/7
 * Time: 21:23
 */
class Test_model extends CI_Model {
    /**
     * test function
     * to be deleted
     */
    public function test_getData() {
        return $this->db->get('t_user_info')->result();
    }
}