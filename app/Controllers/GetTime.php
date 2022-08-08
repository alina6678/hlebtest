<?php

namespace App\Controllers;

class GetTime extends \MainController
{
    public function index()
    {
      $result = [];
      $result['date_sql'] = date('Y-m-d H:i:s');
      $result['date_unix'] =  time();
      header('Content-Type: application/json; charset=utf-8');
      echo (json_encode($result));
    }
}
