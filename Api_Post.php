<?php

//Content-Type:application/json
//Content-Type:application/x-www-form-urlencoded;
//X-Auth-User:{'wheels-america'};
//X-Auth-Token:{'655F96BF058AE8B4FB733CF96006F767182C3B9F36BC545D9333B16FC5F7E96999033F66D04985DA1AWFOQZD0KIWRTTVHKLFMKY1V4A41J1'};
//X-Auth-Integration:{'partnername'}
include 'Apicall.php';
$get_data = callAPI('GET', 'https://api.suredone.com/v1/bulk/results/20190621-144040-4080-wheelsamericaedit-9-bulk-results.csv', false);
$response = json_decode($get_data, true);
$errors = $response['response']['errors'];
$data = $response['response']['data'][0];
var_dump($response);
?>