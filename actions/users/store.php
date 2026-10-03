<?php
if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) { print_r($_POST); } else { echo "Data belum lengkap."; }
