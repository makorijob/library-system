<?php
$servername="localhost";
$user="root";
$password="";
$DATABASE_NAME="campus";
server.
$conn=new mysql($servername,$user,$password,$DATABASE_NAME);
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
else
{
    echo"Connection successful";
}
?>