<?php
$conn = new mysqli('localhost','root','','test');

$result = $conn->query("select * from book");

