<?php
namespace App\Http\Controllers;


use App\Models\HatStory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class WebsiteController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function hatStory(int $id)
    {

        $hatStory = HatStory::findOrFail($id);

        return view('website.hatstory', ['hatStory' => $hatStory]);
    }
}
