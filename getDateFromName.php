<?php
header("Content-Type:application/json");
require_once "Classes/helper/config.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($conn,'utf8');

if ((isset($_GET['day']) && $_GET['day']!="") && (isset($_GET['month']) && $_GET['month']!="")) {
    $day = $_GET['day'];
    $month = $_GET['month'];
    $result_day = mysqli_query($conn,
        "SELECT * FROM days WHERE day ={$day} AND month ={$month}");
    if(mysqli_num_rows($result_day)>0){
        $day_id = mysqli_fetch_row($result_day)[0];
        $result = mysqli_query($conn,
            "SELECT * FROM records LEFT JOIN countries ON country_id = countries.id WHERE day_id = {$day_id} AND type = 'name'");
        echo '[';
        for ($i=0;$i<mysqli_num_rows($result);$i++) {

            echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
        }
        echo ']';


        mysqli_close($conn);
    }else{
        response(200,"No Record Found");
    }
}else{
    response(400,"Invalid Request");
}

function response($response_code,$response_desc){
//    $response['value'] = $value;
//    $response['day'] = $day;
//    $response['month'] = $month;
    $response['response_code'] = $response_code;
    $response['response_desc'] = $response_desc;

    $json_response = json_encode($response);
    echo $json_response;
}
?>