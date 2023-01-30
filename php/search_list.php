<?php
$ch = curl_init();
$url = 'http://openapi.kepco.co.kr/service/EvInfoServiceV2/getEvSearchList'; /*URL*/
$queryParams = '?' . urlencode('serviceKey') . '=gyTy%2BvYdts%2B5BQzMMQKu8GM3Uz0fCewfj4LgBcpowoEQt2%2B0Pa%2B3oEgpNdxTxho%2BjOP0KJGwxzshwzmRHnsXvg%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /**/
$queryParams .= '&' . urlencode('addr') . '=' . urlencode('전라남도 나주시 빛가람동 120'); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>