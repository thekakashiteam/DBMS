<?php
$conn_error = "could not connect";
if(!@mysql_connect('127.0.0.1','root','') || !@mysql_select_db('vms2103')){
	die($conn_error);
}