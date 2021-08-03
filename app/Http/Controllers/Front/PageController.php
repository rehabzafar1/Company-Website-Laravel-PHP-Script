<?php

namespace App\Http\Controllers\Front;

use App\Models\CareerCategory;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //
    public function index() {
        $data['services']       =       Service::all();
        return view('welcome');
    }
    public function career() {
        $data['categories']     =       CareerCategory::all();
        return view('front.career',$data);
    }
    public function faqs(){
        return view('front.faqs');
    }
    public function pricing(){
        $data['packages']   =   Package::all();
        return view('front.pricing',$data);
    }
    public function ourTeam(){
        return view('front.our-team');
    }
    public function teamDetail(){
        return view('front.team-detail');
    }
    public function ourServices(){
        $data['services']   =   Service::all();
        return view('front.our-services',$data);
    }
    public function serviceDetail($id){
        $data['service']   =   Service::find($id);
        return view('front.service-detai',$data);
    }
    public function aboutUs(){
        return view('front.about-us');
    }
    public function contact(){
        return view('front.contact');
    }
}
