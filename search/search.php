<?php

require("connec.php");

$brand = $_POST['brand'];
$width = $_POST['width'];
$series = $_POST['series'];
$edge = $_POST['edge'];
$sql = "SELECT * FROM product WHERE brand = '" . $brand . "'and tyre_1= '" . $width . "'and tyre_2='" . $series . "'and tyre_3='" . $edge . "'";

$result = mysqli_query($conn, $sql);

 // กำหนดตัวแปรไว้เก็บข้อมูลที่ค้นหาได้
 $search_data = array();
 // วนลูปค้นหาข้อมูล
 while($result = mysqli_fetch_assoc($qeury)){
     // เก็บข้อมูลที่ค้นหาได้ลงตัวแปร
     $search_data[] = $result;
 }

 // ทดสอบแสดงผลลัพธ์ที่ค้นเจอ
 /*
 echo "<pre>";
 print_r($search_data);
 echo "</pre>";
 */
 
 // แสดงข้อมูลออกเป็น JSON Data
 echo json_encode($search_data);
?>