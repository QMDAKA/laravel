<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocSinh extends Model
{
    //

    protected $table ='hocsinh';
    protected $filltable =['hoten','toan','ly','hoa'];
}
