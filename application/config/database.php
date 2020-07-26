<?php defined("BASEPATH") OR exit("No direct script access allowed");
$active_group = "default";
$query_builder = TRUE;


$db["default"] = array("dsn"  => "",
"hostname" => "localhost", 
"username" => "lataxilatest" ,
"password" => "Golden_custom_db",
"database" => "techlabz_lataxi_custom",
"dbdriver" => "mysqli",
"pconnect" => FALSE,
"db_debug" => (ENVIRONMENT !== "production"),
"cache_on" => FALSE,
"cachedir" => "",
"char_set" => "utf8",
"dbcollat" => "utf8_general_ci",
"swap_pre" => "",
"encrypt" => FALSE,
"compress" => FALSE,
"stricton" => FALSE,
"failover" => array(),
"save_queries" => TRUE);

$db["default_old"] = array("dsn"  => "",
"hostname" => "localhost", 
"username" => "techlabz_lataxi" ,
"password" => "DUBU(EpTwGTH",
"database" => "techlabz_lataxi",
"dbdriver" => "mysqli",
"pconnect" => FALSE,
"db_debug" => (ENVIRONMENT !== "production"),
"cache_on" => FALSE,
"cachedir" => "",
"char_set" => "utf8",
"dbcollat" => "utf8_general_ci",
"swap_pre" => "",
"encrypt" => FALSE,
"compress" => FALSE,
"stricton" => FALSE,
"failover" => array(),
"save_queries" => TRUE);



$db["default_local"] = array("dsn"  => "",
"hostname" => "localhost", 
"username" => "newuser",
"password" => "password",
"database" => "lataxi",
"dbdriver" => "mysqli",
"pconnect" => FALSE,
"db_debug" => (ENVIRONMENT !== "production"),
"cache_on" => FALSE,
"cachedir" => "",
"char_set" => "utf8",
"dbcollat" => "utf8_general_ci",
"swap_pre" => "",
"encrypt" => FALSE,
"compress" => FALSE,
"stricton" => FALSE,
"failover" => array(),
"save_queries" => TRUE);

