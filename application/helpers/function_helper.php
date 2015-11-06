<?php
/**
 * @note 获取签名
 * @author wei.liu
 * @date 2015-11-5 19:26:05
 * @param $params 参与的参数
 * @param array $remove_params 去除的参数
 * @return string
 */
function getSige($params, $remove_params = array('sign', 'sign_type'))
{
    // 除去数组中的空值和签名参数
    $param_list = array();
    while (list ($key, $val) = each ($params)) {
        if(in_array($key, $remove_params) || $val == "") continue;
        else $param_list[$key] = $params[$key];
    }

    // 按照键排序
    ksort($param_list);

    return http_build_query($param_list);
}
?>