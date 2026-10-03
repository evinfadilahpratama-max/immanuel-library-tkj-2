<?php

if (isset($_POST["name"]) && isset($_POST["bio"])) {

  $data = [
    "name" => $_POST["name"],
    "bio" => $_POST["bio"],
  ];

  echo "Data penulis berhasil diterima:";

  echo "<pre>";

  print_r($data);

  echo "</pre>";
}