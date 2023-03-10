<?php

$conn = mysqli_connect("localhost", "root", "", "deped");

if (!$conn) {
    echo "Connection Failed";
}