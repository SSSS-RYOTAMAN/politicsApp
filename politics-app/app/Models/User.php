<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  use HasFactory;
  protected $fillable = [
    'name',
    'sex',
    'year',
    'month',
    'day',
    'support',
    'emial',
    'password',
    'password_confirmation',
  ];

  protected $hidden = [
    'password_confirmation',
    'created_at',
    'updated_at',
  ];

  public function countValue($values)
  {
    $all = User::all()->count();
dd($values);
    // for ($i=0; $i <= 10; $i++) {
    //   $support_num = User::where('support', $i)->count();
    //   $totalPercent[] = round($support_num / $all * 100);
    // }

    foreach ($values as $value) {
      
    }
    // return $support_percent;
  }
}
