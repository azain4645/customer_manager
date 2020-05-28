<?php

namespace App\Services;

class CheckFormData
{
  public static function checkGender($data){
    if($data->gender === 1){
      $gender = '男性';
    } elseif ($data->gender === 0){
      $gender = '女性';
    }

    return $gender;
  }
}