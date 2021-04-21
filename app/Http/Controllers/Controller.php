<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

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

    public function resendRequest(Request $request)
    {
        return redirect()->route('password.email')->withInput(['email'=>$request->get('email')]);
    }

    public function resetUserPassword(Request $request)
    {
        $email = $request->get('email');

        $users = User::where('email',$email)->get();

        if(count($users) === 0)
        {
            $errorBag = new MessageBag();

            $errorBag->add('error','We have not recognized your e-mail address');
            return view('dashboard.auth.forgot-password')->withErrors($errorBag);
        }

        $user = $users[0];
        /* @var $user User */

        $user->sendPasswordResetNotification(Str::uuid());

        return redirect()->route('password.reset-request-sent',['email'=>$email]);

    }

    public function resetRequestSent()
    {
        return view('dashboard.auth.password-reset-request-sent');
    }

    public function createNewPassword(Request $request, string $token)
    {
        $email = $request->get('email');

        $entry = DB::table('password_resets')->where(['email'=>$email,'token'=>$token])->get();

        if(count($entry) > 0)
        {
            return view('dashboard.auth.reset-password',['token'=>$token,'email'=>$email]);
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function setNewPassword(Request $request)
    {
        $email = $request->input('email');
        $token = $request->input('token');

        $entry = DB::table('password_resets')->where(['email'=>$email,'token'=>$token])->get();
        $isValid = false;

        if(count($entry) > 0)
        {
            $isValid = true;
        }
        else
        {
            return redirect()->route('login');
        }

        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required'
        ]);

        if($request->input('password') !== $request->input('password_confirmation'))
        {
            $errors = new MessageBag();

            $errors->add('not_same','The passwords do not match!');
            return view('dashboard.auth.reset-password',['token'=>$token,'email'=>$email])->withErrors($errors);
        }

        if($isValid)
        {
            $user = User::where('email',$email)->first();
            /* @var $user User */

            $user->password = Hash::make($request->input('password'));
            $user->save();

            return redirect()->route('login');
        }
    }
}
