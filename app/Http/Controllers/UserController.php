<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $personales=User::all();
        return view('personales.index', compact('personales'));
    }

    public function create(){
        return view('personales.create');
    }

    public function store(){
        
    }
}
