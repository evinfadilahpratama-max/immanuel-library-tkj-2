<?php

if (isset($_POST["id"])) {

  $data = [
    "id" => $_POST["id"],
    "name" => $_POST["name"],
    "bio" => $_POST["bio"],
  ];

  echo "Data penulis berhasil diterima:";

  echo "<pre>";

  print_r($data);

  echo "</pre>";
}