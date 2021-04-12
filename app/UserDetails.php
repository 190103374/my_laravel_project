<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = ['user_id', 'filename', 'developer_id'];
    public function user() {
    return $this->belongsTo('App\User');
    }
}
