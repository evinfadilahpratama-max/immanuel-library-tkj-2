<?php
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) { print_r($_POST); } else { echo "Data belum lengkap."; }
