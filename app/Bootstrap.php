<?php

declare(strict_types=1);

class Bootstrap
{
   public function __construct()
   {
      $url = isset($_GET['url']) ? $_GET['url'] : null;
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      print_r($url);
   }

   public static function index()
   {
      echo "you are in app/Bootstrap.php";
   }
}
