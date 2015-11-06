<?php
class ALiPayBLL extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dao/alipaydao', 'alipaydao');
    }

    function aLiPay($mem_uid, $order_id)
    {
        if(empty($mem_uid) || empty($order_id)){
            return array('1000', '用户未登陆');
        }

        $this->alipaydao->aLiPay();
    }
}
?>