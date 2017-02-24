<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logging extends Model
{

    protected $fillable = ['updated_at', 'trigger'];
}
