<?php
session_start(); 

if (!isset($_SESSION['userid']))
{
  echo "<script type = \"text/javascript\">
  window.location = (\"./index.html\");
  </script>";

}
