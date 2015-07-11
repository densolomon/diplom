<?php
    include "app/Application.php";

    $fc = Application::init();
    $fc->run();

    echo $fc->getBody();

