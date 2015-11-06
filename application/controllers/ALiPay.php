<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @note 阿里支付
 * @author wei.liu
 * @date 2015-11-4 16:52:46
 * Class ALiPay
 */
class ALiPay extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('bll/alipaybll','alipay');
    }

    function index()
    {
        $this->alipay->aLiPay();
    }
}
?>