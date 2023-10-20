<?php

session_start();
include "dbconnect";
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$adm_no=$_REQUEST['adm_no'];
$date=$_REQUEST['date'];
$book_no=$_REQUEST['book_no'];
$return_date=$_REQUEST['return_date'];

//confirming our variables are not empty
if(empty($first_name))
{
    header("location:index.php?error=First name required!");
    exit();

}
else if(empty($last_name))
{
    header("Location:index.php?error=Last name required.");
    exit();
}
 else if(empty($adm_no))
{
    header("location:index.php?error=Admission number required!");
    exit();

}
else if(empty($date))
{
    header("location:index.php?error=Date required!");
    exit();

}
else if(empty($book_no))
{
    header("location:index.php?error=Book number required!");
    exit();

}
else if(empty($return_date))
{
    header("location:index.php?error=Return Date required!");
    exit();

}
$sql="insert into users variables('$first_name','$last_name','$adm_no','$date','$book_no','$return_date')";
if($conn->query($sql)===true)
{
    echo"new records inserted";
}
else
{
    echo"Error";
}
$conn->close();
?>