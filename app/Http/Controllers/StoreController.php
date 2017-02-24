<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store({level})
    {
        // http://controlpanel.local/measurement/{level}
    }

    public function update({trigger})
    {
        // http://controlpanel.local/logging/{trigger}
    }
}
