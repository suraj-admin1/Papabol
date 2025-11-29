<?php
include "db.php";
$data = json_decode(file_get_contents("php://input"));

$action = $data->action;

if($action=="ban"){
    mysqli_query($conn,"UPDATE users SET banned=1");
    echo json_encode(["status"=>"ok","message"=>"User Banned"]);
}
if($action=="unban"){
    mysqli_query($conn,"UPDATE users SET banned=0");
    echo json_encode(["status"=>"ok","message"=>"User Unbanned"]);
}
?>
