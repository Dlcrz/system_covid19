<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$urlsite = "$protocol://$host/system_covid19/";
define("urlsite", $urlsite);