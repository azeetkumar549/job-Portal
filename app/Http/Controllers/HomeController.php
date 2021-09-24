<?php

namespace App\Http\Controllers;
use App\Models\job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(){
        return view('core.home');
    }
    public function recruitment(){
        $data['jobs'] = Job::all();
        return view('core.recruitments',$data);
    }
    public function view_job(Request $req, $id){
        $data['job'] = Job::find($id);
        return view('core.view-jobs',$data);
    }
}
