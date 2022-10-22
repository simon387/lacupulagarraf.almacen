<?php
require_once 'rest/config/config.php';
session_start();
session_destroy();
header("Location: index.php");
die;
