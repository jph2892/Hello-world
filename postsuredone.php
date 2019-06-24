<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.suredone.com/v1/bulk");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "bulk_file=@/xampp/htdocs/dashboard/NeuralTechAI/sd_api_upload.csv&bulk_name=sd_api_upload");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: multipart/form-data",
  "X-Auth-User: wheels-america",
  "X-Auth-Token: 655F96BF058AE8B4FB733CF96006F767182C3B9F36BC545D9333B16FC5F7E96999033F66D04985DA1AWFOQZD0KIWRTTVHKLFMKY1V4A41J1",
));



$response = curl_exec($ch);
curl_close($ch);

var_dump($response);