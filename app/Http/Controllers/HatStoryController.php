<?php

namespace App\Http\Controllers;

use App\Models\HatStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HatStoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $hatstory = HatStory::all()->where('hat_hidden', '=', '0');
        return view('dashboard.hatstories.index', ['hatstory'=>$hatstory]);
    }

    public function hidden()
    {
        $hatstory = HatStory::all()->where('hat_hidden', '=', '1');
        return view('dashboard.hatstories.hidden', ['hatstory'=>$hatstory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hatstories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the video file and the thumbnail file
        $request->validate([
            'hat_image' => 'bail|required|file|mimes:jpeg,jpg,png|max:10000',
            'hat_pageone_image' => 'bail|required|file|mimes:jpeg,jpg,png|max:10000',
            'hat_pagetwo_imageone' => 'bail|required|file|mimes:jpeg,jpg,png|max:10000',
            'hat_pagetwo_imagetwo' => 'bail|required|file|mimes:jpeg,jpg,png|max:10000',
        ]);

        $hatStory = new HatStory;

        if($request->file('hat_image') && $request->file('hat_pageone_image') && $request->file('hat_pagetwo_imageone') && $request->file('hat_pagetwo_imagetwo')) {
            // Main
            $hatStory->hat_name = $request->hat_name;
            $hatStory->hat_text = $request->hat_text;
            $hat_image = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_image')->extension();
            $request->file('hat_image')->storeAs('hatimage', $hat_image, 'public');
            $hatStory->hat_image = $hat_image;

            // Specifications
            $hatStory->hat_size = $request->hat_size;
            $hatStory->hat_color = $request->hat_color;
            $hatStory->hat_material = $request->hat_material;

            // Page One
            $hatStory->hat_pageone_text = $request->hat_pageone_text;
            $hat_pageone_image = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_pageone_image')->extension();
            $request->file('hat_pageone_image')->storeAs('hatimage', $hat_pageone_image, 'public');
            $hatStory->hat_pageone_image = $hat_pageone_image;

            // Page Two
            $hatStory->hat_pagetwo_text = $request->hat_pagetwo_text;
            $hat_pagetwo_imageone = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_pagetwo_imageone')->extension();
            $request->file('hat_pagetwo_imageone')->storeAs('hatimage', $hat_pagetwo_imageone, 'public');
            $hatStory->hat_pagetwo_imageone = $hat_pagetwo_imageone;
            $hat_pagetwo_imagetwo = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_pagetwo_imagetwo')->extension();
            $request->file('hat_pagetwo_imagetwo')->storeAs('hatimage', $hat_pagetwo_imagetwo, 'public');
            $hatStory->hat_pagetwo_imagetwo = $hat_pagetwo_imagetwo;

            $hatStory->hat_hidden = false;

            $hatStory->save();
        }

        return redirect()->route('hatstories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HatStory $hatStory
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HatStory $hatstory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(HatStory $hatstory)
    {
        return view('dashboard.hatstories.edit', compact('hatstory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HatStory  $hatstory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, HatStory $hatstory)
    {
        $request->validate([
            'hat_image' => 'bail|file|mimes:jpeg,jpg,png|max:10000',
            'hat_pageone_image' => 'bail|file|mimes:jpeg,jpg,png|max:10000',
            'hat_pagetwo_imageone' => 'bail|file|mimes:jpeg,jpg,png|max:10000',
            'hat_pagetwo_imagetwo' => 'bail|file|mimes:jpeg,jpg,png|max:10000',
        ]);

        $update = [
            'hat_name' => $request->hat_name,
            'hat_text' => $request->hat_text,
            'hat_size' => $request->hat_size,
            'hat_color' => $request->hat_color,
            'hat_material' => $request->hat_material,
            'hat_pageone_text' => $request->hat_pageone_text,
            'hat_pagetwo_text' => $request->hat_pagetwo_text,
            ];

        if($request->file('hat_image')) {
            Storage::delete('public/hatimage/' . $hatstory->hat_image);
            $hat_image = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_image')->extension();
            $request->file('hat_image')->storeAs('hatimage', $hat_image, 'public');
            $hatstory->hat_image = $hat_image;
            $update['hat_image'] = $hat_image;
        }

        if($request->file('hat_pageone_image')) {
            Storage::delete('public/hatimage/' . $hatstory->hat_pageone_image);
            $hat_pageone_image = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_pageone_image')->extension();
            $request->file('hat_pageone_image')->storeAs('hatimage', $hat_pageone_image, 'public');
            $hatstory->hat_pageone_image = $hat_pageone_image;
            $update['hat_pageone_image'] = $hat_pageone_image;
        }

        if($request->file('hat_pagetwo_imageone')){
            Storage::delete('public/hatimage/' . $hatstory->hat_pagetwo_imageone);
            $hat_pagetwo_imageone = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_pagetwo_imageone')->extension();
            $request->file('hat_pagetwo_imageone')->storeAs('hatimage', $hat_pagetwo_imageone, 'public');
            $hatstory->hat_pagetwo_imageone = $hat_pagetwo_imageone;
            $update['hat_pagetwo_imageone'] = $hat_pagetwo_imageone;
        }

        if($request->file('hat_pagetwo_imagetwo')){
            Storage::delete('public/hatimage/' . $hatstory->hat_pagetwo_imagetwo);
            $hat_pagetwo_imagetwo = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_pagetwo_imagetwo')->extension();
            $request->file('hat_pagetwo_imagetwo')->storeAs('hatimage', $hat_pagetwo_imagetwo, 'public');
            $hatstory->hat_pagetwo_imagetwo = $hat_pagetwo_imagetwo;
            $update['hat_pagetwo_imagetwo'] = $hat_pagetwo_imagetwo;
        }

        $hatstory->update($update);
        return redirect()->route('hatstories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HatStory  $hatstory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HatStory $hatstory)
    {
        $hatstory->delete();
        return redirect()->route('hatstories.index');
    }
}
