<?php

namespace App\Http\Controllers;

use App\Models\HatStory;
use Illuminate\Http\Request;

class HatStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $hatstory = HatStory::all();
        return view('dashboard.hatstories.index', ['hatstory'=>$hatstory]);
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
            'hat_cover_image' => 'bail|required|file|mimes:jpeg,jpg,png|max:10000',
            'hat_pageone_image' => 'bail|required|file|mimes:jpeg,jpg,png|max:10000',
            'hat_pagetwo_image' => 'bail|required|file|mimes:jpeg,jpg,png|max:10000',
        ]);

        $hatStory = new HatStory;

        if($request->file('hat_cover_image') && $request->file('hat_pageone_image') && $request->file('hat_pagetwo_image')) {
            $hatStory->hat_cover_title = $request->hat_cover_title;
            $hatStory->hat_cover_text = $request->hat_cover_text;
            $hat_cover_image = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_cover_image')->extension();
            $request->file('hat_cover_image')->storeAs('hatimage', $hat_cover_image, 'public');
            $hatStory->hat_cover_image = $hat_cover_image;
            $hatStory->hat_cover_hover = $request->hat_cover_hover;
            $hatStory->hat_cover_opacity = $request->hat_cover_opacity;

            $hatStory->hat_pageone_title = $request->hat_pageone_title;
            $hatStory->hat_pageone_heading = $request->hat_pageone_heading;
            $hatStory->hat_pageone_text= $request->hat_pageone_text;
            $hat_pageone_image = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_pageone_image')->extension();
            $request->file('hat_pageone_image')->storeAs('hatimage', $hat_pageone_image, 'public');
            $hatStory->hat_pageone_image = $hat_pageone_image;
            $hatStory->hat_pageone_hover = $request->hat_pageone_hover;
            $hatStory->hat_pageone_opacity = $request->hat_pageone_opacity;

            $hatStory->hat_pagetwo_title = $request->hat_pagetwo_title;
            $hatStory->hat_pagetwo_heading = $request->hat_pagetwo_heading;
            $hatStory->hat_pagetwo_text = $request->hat_pagetwo_text;
            $hat_pagetwo_image = md5(uniqid(mt_rand(), true)) . '-' . time() . '.' . $request->file('hat_pageone_image')->extension();
            $request->file('hat_cover_image')->storeAs('hatimage', $hat_pagetwo_image, 'public');
            $hatStory->hat_pagetwo_image = $hat_pagetwo_image;
            $hatStory->hat_pagetwo_hover = $request->hat_pagetwo_hover;
            $hatStory->hat_pagetwo_opacity = $request->hat_pagetwo_opacity;

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
        $hatstory->update($request->all());
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
