<?php
# Start the session
session_start();

if(!isset($_SESSION['results'])){
    header('Location: fooboks.php');
}

# Get the data from the session
$results= $_SESSION['results']?? null;

# Clear tehe session
session_unset();