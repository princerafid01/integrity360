<?php

namespace App\Http\Controllers;

use App\Client;
use App\Fact;
use App\PCategory;
use App\Project;
use App\Service;
use App\Slider;
use App\TeamMember;
use App\Testimonial;
use App\WelcomeArea;
use App\WhoWeAre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::all();
        $data['projects'] = Project::skip(0)->take(5)->get();
        $data['all_projects'] = Project::all();
        $data['p_categories'] = PCategory::all();
        $data['testimonials'] = Testimonial::all();
        $data['clients'] = Client::all();
        $data['last_projects'] = Project::orderBy('CREATED_AT', 'desc')->get();
        
        $data['welcome_area'] = WelcomeArea::all()->first();
        $data['who_we_are'] = WhoWeAre::all()->first();
        $data['fact'] = Fact::all()->first();
        $data['team_members'] = TeamMember::skip(0)->take(4)->get();
        return view('home')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $data['projects'] = Project::skip(0)->take(5)->get();
        $data['who_we_are'] = WhoWeAre::all()->first();
        $data['team_members'] = TeamMember::all();
        return view('about')->with($data);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        $data['services'] = Service::all();
        return view('services',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function single_service($id)
    {
        $data['service'] = Service::find($id);
        return view('single_service',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function con(Request $request)
    {
        $message = \App\Message::create([
            'name' => $request->username, 
            'email' => $request->email, 
            'message' => $request->message, 
        ]);
        if ($message) {
            Session::flash('msg', 'Message was successfully sent!');
            return redirect()->route('contact');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
