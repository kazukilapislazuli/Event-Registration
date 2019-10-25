<?php
$data1 = $_POST['name'];
$data2 = $_POST['lname']; 
$data3 = $_POST['college'];
$data4 = $_POST['email'];
$data5 = $_POST['phone'];
$data6 = $_POST['branch'];
$data7 = $_POST['techeve'];
$data8 = $_POST['nontecheve'];
$data9 = $_POST['funeve'];
$output=shell_exec("python record.py $data1 $data2 $data3 $data4 $data5 $data6 $data7 $data8 $data9");

echo $output;

?>
