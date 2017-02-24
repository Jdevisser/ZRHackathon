<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logging;

class StoreController extends Controller
{
    public function index()
    {
        // return view ( 'book/index', [
        //     'books' => Book::orderBy ( 'title', 'asc' )->get (),
        // ]);

    }

    public function store(Request $request)
    {
        // http://controlpanel.local/measurement/{level}
    }

    public function update(Request $request, $id)
    {
        $logging = Logging::findorfail($id);
        $logging->trigger = $request['trigger'];
        $logging->updated_at = $request['updated_at'];

        // Save the changes in the database
        $logging->save();
    }

}
