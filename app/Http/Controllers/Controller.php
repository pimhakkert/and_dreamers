<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function show(Request $request)
    {
        return view('dashboard.profile.show', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
