<?php
if($_REQUEST['first_name'] == '' ||  $_REQUEST['message'] == ''):
  return "error";
endif;

  $name = $_REQUEST['first_name'];
  $message =$_REQUEST['message'];

?>