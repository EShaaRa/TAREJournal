<?php
require_once '../../controller/config/config.php';

session_destroy();

header("Location: ".BASE_URL);