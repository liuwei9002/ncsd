<?php
class ALiPayDao extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function aLiPay($subject, $total_fee, $show_url, $body)
    {
        $alipay_config = $this->config->item('alipay_config');
        $params = array(
            "service" => $alipay_config['service'],
            "partner" => trim($alipay_config['partner']),
            "seller_id" => trim($alipay_config['seller_id']),
            "payment_type"	=> $alipay_config['payment_type'],
            "notify_url"	=> $alipay_config['notify_url'],
            "return_url"	=> $alipay_config['return_url'],
            "out_trade_no"	=> $alipay_config['out_trade_no'],
            "subject"	=> $subject,
            "total_fee"	=> $total_fee,
            "show_url"	=> $show_url,
            "body"	=> $body,
            "it_b_pay"	=> $alipay_config['it_b_pay'],
            "_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
        );
        echo getSige($params);
    }
}
?>