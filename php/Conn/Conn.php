<?php

require_once "../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../../");
$dotenv->load();

$_MainDB = [
  "server" => $_ENV["M_server"],
  "database" => $_ENV["M_database"],
  "table" => $_ENV["M_table"],
  "username" => $_ENV["M_username"],
  "password" => $_ENV["M_password"]
];