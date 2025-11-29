<?php
include "db.php";

$q = mysqli_query($conn, "SELECT * FROM keys WHERE status='active'");

if(mysqli_num_rows($q)>0){
    echo json_encode(["status"=>"ok","message"=>"Key Active"]);
} else {
    echo json_encode(["status"=>"fail","message"=>"No active key"]);
}
?>
