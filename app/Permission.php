<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
   public function role()
    {
        return $this->belongsToMany('App\Role');
    }
}
