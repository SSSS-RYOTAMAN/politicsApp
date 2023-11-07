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

  public function calcPercent($all, $count)
  {
    return round($count / $all * 100);
  }
}
