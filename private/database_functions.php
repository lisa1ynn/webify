<?php

    function connect() {
        $database = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        return $database;
    }

?>