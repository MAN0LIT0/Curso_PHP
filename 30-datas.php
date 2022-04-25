<?php
//datas
date_default_timezone_set('America/Sao_Paulo');
echo date('d')."<br>";
echo date('D')."<br>";
echo date('m')."<br>";
echo date('M')."<br>";
echo date('y')."<br>";
echo date('Y')."<br>";
echo date('l')."<br>";
echo date('d/m/Y')."<br>";
echo date('d/m/Y H:i:s')."<br>";
echo date('d/m/Y H:i:s A')."<br>";
echo "<hr>";
// salvar no BD

$date = date('Y-m-d'); // date
$datetime = date('Y-m-d H:i:s'); // datetime
echo $date."<br>";
echo $datetime."<br>";
echo "<hr>";
// time
$time = time();
echo date('d/m/Y', $time)."<br>";
echo "<hr>";
// MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 22, 2022);
echo date('d/m - h:i', $data_pagamento)."<br>";
// STRTOTIME
$data = '2029-04-10';
$novadata = strtotime($data);

echo date('d/m/Y', $novadata);