<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';

session_destroy();

header("Location: ".BASE_URL);