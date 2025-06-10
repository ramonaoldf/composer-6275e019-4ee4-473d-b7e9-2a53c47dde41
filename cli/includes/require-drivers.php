<?php

require_once './cli/Valet/Drivers/ValetDriver.php';
require_once './cli/includes/legacy/ValetDriver.php';

foreach (scandir('./cli/Valet/Drivers') as $file) {
    if (substr($file, 0, 1) !== '.') {
        require_once './cli/Valet/Drivers/'.$file;
    }
}

// Require legacy drivers; can be deprecated in v4
foreach (scandir('./cli/includes/legacy') as $file) {
    if (substr($file, 0, 1) !== '.') {
        require_once './cli/includes/legacy/'.$file;
    }
}
