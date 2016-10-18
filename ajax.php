<?php

$name = $_POST['username'];
$password = $_POST['password'];

if($name="root" AND $password="root"){
	echo "success";
}else{
	echo "failed";
}


