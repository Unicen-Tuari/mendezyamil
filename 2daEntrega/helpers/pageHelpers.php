<?php

class PageHelpers{

  public static function homePageAutos(){
    header("Location: ".BASEURL."verautos");
    die();
  }

  public static function homePageMarcas(){
    header("Location: ".BASEURL."vermarcas");
    die();
  }

  public static function homePageLogin(){
    header("Location: ".BASEURL."login");
    die();
  }
}

?>
