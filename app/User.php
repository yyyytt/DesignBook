<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'pre_email', 'password', 'sex', 'phone_number', 'birthday', 'belonging_to', 'profile_image', 'admin_user', 'brand_id', 'email_verified', 'email_verify_token',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];
  protected $dates = [
    'created_at',
    'updated_at',
    'birthday'
  ];
}
