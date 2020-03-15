<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = ['name', 'phone', 'email', 'address'];

  public function user() {
    return $this->belongsTo('App\User');
  }
}
