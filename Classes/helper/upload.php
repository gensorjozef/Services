<?php
require_once "Database.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$xml = simplexml_load_file("meniny.xml");

$coutries = [
                "SK" => "Slovensko",
                "CZ" => "Česko",
                "AT" => "Rakúsko",
                "HU" => "Maďarsko",
                "PL" => "Poľsko",
];

$conn = (new Database())->getConnection();

$day = "";
$month = "";
$stmDays = $conn->prepare("INSERT IGNORE INTO days(day, month) VALUES (:day, :month)");
$stmDays->bindParam(':day',$day);
$stmDays->bindParam(':month',$month);

$code = "";
$title = "";
$stmCountries = $conn->prepare("INSERT IGNORE INTO countries(code, title) VALUES (:code, :title)");
$stmCountries->bindParam(':code',$code);
$stmCountries->bindParam(':title',$title);

$day_id = "";
$country_id = "";
$value = "";
$type = "";
$stmRecords = $conn->prepare("INSERT IGNORE INTO records(day_id, country_id, type, value) VALUES (:day_id, :country_id, :type, :value)");
$stmRecords->bindParam(':day_id',$day_id);
$stmRecords->bindParam(':country_id',$country_id);
$stmRecords->bindParam(':type',$type);
$stmRecords->bindParam(':value',$value);

foreach ($xml->children() as $row){
    $day = substr($row->den,2,2);
    $month = substr($row->den,0,2);
    $stmDays->execute();

    $d = $conn->prepare("Select id from days where day=$day and month=$month");
    $d->execute();
    $day_id = $d->fetchColumn();

    foreach (array_keys( ((array) $row)) as $item){
        if (array_key_exists($item,$coutries)){

            $code = $item;

            $title = $coutries[$item];
            $stmCountries->execute();

            $c = $conn->prepare("Select id from countries where code='$code'");
            $c->execute();
            $country_id = $c->fetchColumn();
            $type = "name";

            foreach (explode(",", $row->$item) as $name){
                $value = trim($name);
                    if (!empty($value)){
                        $stmRecords->execute();
                    }
            }
        }
    }
    $type = "name";

    foreach (explode(",", $row->SKd) as $name){
        $value = trim($name);
        $c = $conn->prepare("Select id from countries where code='SK'");
        $c->execute();
        $country_id = $c->fetchColumn();
        if (!empty($value) && $value != "-"){
            $stmRecords->execute();
        }

    }
    $type = "sk_holiday";
    foreach (explode(",", $row->SKsviatky) as $name){
        $value = trim($name);
        $c = $conn->prepare("Select id from countries where code='SK'");
        $c->execute();
        $country_id = $c->fetchColumn();
        if (!empty($value)){
            $stmRecords->execute();
        }
    }
    $type = "cz_holiday";
    foreach (explode(",", $row->CZsviatky) as $name){
        $value = trim($name);
        $c = $conn->prepare("Select id from countries where code='CZ'");
        $c->execute();
        $country_id = $c->fetchColumn();
        if (!empty($value)){
            $stmRecords->execute();
        }
    }
    $type = "sk_pamat";
    foreach (explode(",", $row->SKdni) as $name){
        $value = trim($name);
        $c = $conn->prepare("Select id from countries where code='SK'");
        $c->execute();
        $country_id = $c->fetchColumn();
        if (!empty($value)){
            $stmRecords->execute();
        }
    }
}










