<?php

  class PostOffice
{
  public $con;

  public function mailFiler()
  {
    $thefile='string.txt';
    $fp=fopen($thefile,"r");
    $mydata=fgets($fp);
    fclose($fp);

    $handle = fopen('string.txt', "r");
    $contents = '';
    if ($handle) {
             while (!feof($handle)) {
             $contents .= fread($handle,30);  
             echo $contents;
             exit;
                   }
              fclose($handle);
             }
  }

  public function mailRegex()
  {

    $thefile2='string.txt';
    $fp=fopen($thefile2,"r");
    $mydata2=fgets($fp);
    fclose($fp);

    $standard = "/^([0-9A-Za-z]+)$/"; 

    $handle2 = fopen('string.txt', "r");
    $contents2 = '';
    if ($handle2) {
             while (!feof($handle2)) {
             $contents2 .= fread($handle2,30);  
             echo $contents2;
             exit;
                   }
              fclose($handle2);
             }

  }

  public function spiltroad()
  {
    $thefile3='road.txt';
    $fp=fopen($thefile3,"r");
    $mydata3=fgets($fp);
    fclose($fp);

    $handle3 = fopen('road.txt', "r"); //不知道如何只切出路名
    $contents3 = '';
    if ($handle3) {
             while (!feof($handle3)) {
             $contents3 .= fread($handle3,30);  
             echo $contents3;
             exit;
                   }
              fclose($handle3);
             }
  }


}


?>