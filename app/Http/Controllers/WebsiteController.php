<?php
namespace App\Http\Controllers;


use App\Mail\Contact;
use App\Mail\HatStoryContact;
use App\Models\HatStory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
            Mail::to($_ENV['MAIL_TO_ADDRESS'])->send(new HatStoryContact($request, $hatStory));

            return 200;
        } catch (\Exception $ex) {
            return 500;
        }
    }

    function contact()
    {
        return view('website.contact');
    }

    function contactSend(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        try {
            Mail::to($_ENV['MAIL_TO_ADDRESS'])->send(new Contact($request));

            Session::flash('success','');
        } catch (\Exception $ex) {
            Session::flash('fail','');
        }

        return Redirect::back();
    }

    function about()
    {
        return view('website.about');
    }
}
