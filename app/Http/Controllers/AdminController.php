<?php

namespace App\Http\Controllers;
use App\Models\job;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view("admin.index");
    }
}
