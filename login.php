<?php
include "db.php";
$data = json_decode(file_get_contents("php://input"));

$u = $data->user;
$p = $data->pass;

$q = mysqli_query($conn, "SELECT * FROM users WHERE username='$u' AND password='$p'");
if(mysqli_num_rows($q)==1){
    echo json_encode(["status"=>"ok","message"=>"Login success"]);
} else {
    echo json_encode(["status"=>"fail","message"=>"Wrong details"]);
}
?>
