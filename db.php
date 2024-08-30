<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'task'
) or die(mysqli_erro($mysqli));

?>
