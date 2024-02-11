<?php
    session_start();
    session_destroy();
    header("Location: /Stock-Management");
?>