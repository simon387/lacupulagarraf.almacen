<?php
require_once '../../rest/config/config.php';
session_start();
session_destroy();
header("Location: " . SCRIPT_ROOT . "/index.php");
die;
