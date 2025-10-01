<?php
$con=mysqli_connect('localhost','root','','nuochoa');

if(mysqli_connect_error())
{
    echo'Failed to connect to database'.mysqli_connect_error();
}