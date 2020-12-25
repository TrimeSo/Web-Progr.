<?php
$done = false;

require 'dbconf.php';

if (isset($_GET['doneButton'])) {
$done = true;
}

