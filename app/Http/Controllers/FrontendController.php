<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Gallery;
use App\Models\Notice;
use Illuminate\Support\Facades\Response;
use App\Models\Program;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $about = About::find(1);
        $services = Service::latest()->get();
        $programs = Program::latest()->limit(4)->get();
        $carousel = Carousel::where('id',1)->first();
        return view('frontend.home',compact('carousel','services','programs','about'));
    }

    public function about()
    {
        $about = About::find(1);
        $services = Service::latest()->get();
        $programs = Program::paginate(6);
        return view('frontend.about',compact('about','services','programs'));
    }
    public function service()
    {
        $about = About::find(1);
        $services = Service::paginate(5);
        $programs = Program::paginate(6);
        $carousel = Carousel::where('id',1)->first();
        return view('frontend.service',compact('services','carousel','about','programs'));
    }
    public function program()
    {
        $programs = Program::paginate(5);
        $about = About::find(1);
        $services = Service::latest()->get();
        return view("frontend.program", compact('programs','about','services'));
    }

    public function notice()
    {
        $about = About::find(1);
        $services = Service::latest()->get();
        $programs = Program::paginate(6);
        $notices = Notice::orderBy('created_at','desc')->get();
        return view('frontend.notice',compact('notices','about','services','programs'));
    }
    public function notice_show($id) {
        $filename = Notice::find($id)->document;
        $path = public_path("documents/{$filename}");   
        if (!isset($filename)) {
            abort(404);
        } else {
            $file = file_get_contents($path);
            $type = mime_content_type($path);
            return Response::make($file, 200, [
                'Content-Type' => $type,
                'Content-Disposition' => 'inline; filename="' . $filename . '"',
            ]);
        }
    }
    public function contact()
    {
        $services = Service::latest()->get();
        $about = About::find(1);
        $programs = Program::paginate(6);
        return view('frontend.contact',compact('about','services','programs'));
    }
    
    public function gallery()
    {
        $programs = Program::paginate(6);
        $about = About::find(1);
        $services = Service::latest()->get();
        $data = Gallery::latest()->get();
        return view("frontend.gallery", compact('programs','about','services','data'));
    }
    
}
