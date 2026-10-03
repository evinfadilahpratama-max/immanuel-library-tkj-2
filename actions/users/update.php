<?php
if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['role'])) { print_r($_POST); } else { echo "Data belum lengkap."; }
