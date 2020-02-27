<?php 
$host = 'db'; //nom de service pour docker-compose.yml 
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysqli($host,$user,$password,$db);
if ($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
echo 'sucessfully connected to MYSQL';

?>


