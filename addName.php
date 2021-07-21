<?php
header("Content-Type:application/json");
require_once "Classes/helper/config.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($conn,'utf8');



if ((isset($_GET['day']) && $_GET['day']!="") && (isset($_GET['month']) && $_GET['month']!="") && (isset($_GET['value']) && $_GET['value']!="")) {
    $day = $_GET['day'];
    $month = $_GET['month'];
    $value = $_GET['value'];
    $result_day = mysqli_query($conn,
        "SELECT * FROM days WHERE day ={$day} AND month ={$month}");
    if(mysqli_num_rows($result_day)>0){
        $day_id = mysqli_fetch_row($result_day)[0];
        $country_id = 4;
        $sql = "INSERT INTO records(day_id,country_id,type,value) VALUES ('".$day_id."','".$country_id."','".'name'."','".$value."')";
        $result = mysqli_query($conn, $sql);

        if (!empty($result)) {
            echo json_encode(["status" => "success"]);

        } else {
            $response['response_code'] = 200;
            $response['response_desc'] = "Invalid Parameters";
            $json_response = json_encode($response);
            echo $json_response;
        }



        mysqli_close($conn);
    }else{
        response(200,"No Datum Found");
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
