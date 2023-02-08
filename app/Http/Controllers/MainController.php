<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\project;

class MainController extends Controller
{
    public function home(){

        $projects = project::orderBy('created_at', 'DESC') -> get();

        return view('pages.home', compact('projects'));

    }

    public function homeLogin(){

        $projects = project::orderBy('created_at', 'DESC') -> get();

        return view('pages.home-login', compact('projects'));
    }

    public function show(project $project){

        $data = $project;

        return view('pages.project-show', compact('project'));
    }

}
