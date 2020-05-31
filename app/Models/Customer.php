<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function getGenderTextAttribute($value)
    {
      //if($this->attributes['gender'] === 1){
      if($value === '1'){
        return '男性';
      } else {
        return '女性';
      }
    }

    /**
     * 整形した期限日
     * @return string
     */
    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['created_at'])->format('Y/m/d');
    }
}
