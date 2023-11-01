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

  public function countSupport()
  {
    $all = User::all()->count();
    for ($i=0; $i <= 10; $i++) {
      $support_num = 0;
      $support_num = User::where('support', $i)->count();
      $support_percent[] = round($support_num / $all * 100);
    }
    return $support_percent;
  }
}
