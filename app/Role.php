<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    public function user()
{
    return $this->belongsToMany('App\User');
}
public function permission()
    {
        return $this->hasMany('App\Permission');
    }
}
