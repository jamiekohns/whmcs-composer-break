<?php

use GuzzleHttp\Client;

function composer_break_config() {
    $configarray = array(
        "name" => "Composer-Break",
        "description" => "POC module showing autoloader order can break modules",
        "version" => "1.0",
        "author" => "JamieKohns",
    );
    return $configarray;
}

function demo_activate() {
    if (Client::VERSION !== '5.0.0') {
        return array('status'=>'error','description'=>'Using wrong Guzzle version');
    }

    return array('status'=>'success','description'=>'Foudn correct version of Guzzle');
}