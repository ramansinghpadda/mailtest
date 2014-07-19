<?php 

  if(mail('mailtorspadd@gmail.com','test message','this is test message'))
  {
  	echo 'Mail sent';
  }
  else
  {
  	echo 'Mail not sent';
  }
?>