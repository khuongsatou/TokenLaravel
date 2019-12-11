<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class QuanTriVien extends Authenticatable
{
    protected $table = "quan_tri_vien";

    protected $hidden = ['mat_khau'];

    public function getPasswordAttribute(){
        return $this->mat_khau;
    }
}
