<?php
require_once 'config/connect.php';
$sql = 'SELECT * FROM `form` WHERE `age` > 18';

$data = $connect->query($sql); //запрос
$arr = array();

$res = mysqli_fetch_all($data, MYSQLI_ASSOC);
