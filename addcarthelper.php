<?php
session_start();
  $x=$_POST['plan'];
  $_SESSION['plan'] = $x;
  $y=$_POST['id1'];
  $_SESSION['id'] = $y;


  
  echo($y);
  echo(';');
  echo($x);





?>