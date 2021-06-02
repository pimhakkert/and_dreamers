<?php
namespace App\Http\Controllers;


use App\Mail\HatStoryContact;
use App\Models\HatStory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function hatStory(int $id)
    {

        $hatStory = HatStory::findOrFail($id);

        return view('website.hatstory', ['hatStory' => $hatStory]);
    }

    function hatOverview()
    {
        $hatStory = HatStory::orderBy('created_at', 'asc')->where('hat_hidden', '0')->get();

        return view('website.hatstories', ['hatStory' => $hatStory]);
    }

    function hatStoryContact(Request $request, int $id)
    {
        $hatStory = HatStory::findOrFail($id);


        try {
            Mail::to('p.t.hakkert@outlook.com')->send(new HatStoryContact($request, $hatStory));

            return 200;
        } catch (\Exception $ex) {
            return 500;
        }
    }

    function contact()
    {
        return view('website.contact');
    }
}
