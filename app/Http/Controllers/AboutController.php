<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'opening_time' => 'required',
            'description' => 'required',
        ]);
        $crud = new About();
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $newfilename = time() . "." . $image->getClientOriginalExtension();
            $resizedImage = Image::make($image)->resize(205, 63)->encode('jpg', 80);
            $resizedImage->save(public_path("documents/logo/{$newfilename}"));
            $crud->logo = $newfilename;
        }
        $crud->address = $request->address;
        $crud->contact_no = $request->phone;
        $crud->opening_time = $request->opening_time;
        $crud->description = $request->description;
        $crud->video_link = $request->video_link;
        $crud->save();
        return redirect()->route('dashboard')->with('success', 'Updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about, $id)
    {
        $about = About::find($id);
        return view('backend/about/index', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about, $id)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'opening_time' => 'required',
            'description' => 'required',
        ]);
        $crud = About::find($id);
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $newfilename = time() . "." . $image->getClientOriginalExtension();
            $resizedImage = Image::make($image)->resize(250, 100)->encode('jpg', 80);
            $resizedImage->save(public_path("documents/logo/{$newfilename}"));
            $crud->logo = $newfilename;
        }
        $crud->address = $request->address;
        $crud->contact_no = $request->phone;
        $crud->opening_time = $request->opening_time;
        $crud->description = $request->description;
        $crud->video_link = $request->video_link;
        $crud->save();
        return redirect()->back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
