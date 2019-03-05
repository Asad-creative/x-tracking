<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Artify\Artify\Traits\IsTenant;
use Artify\Artify\Contracts\Model\Tenant;

class Company extends Model
{
    //
    use IsTenant;
}
