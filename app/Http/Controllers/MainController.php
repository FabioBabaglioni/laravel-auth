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

    public function portfolio(){

        $projects = project::orderBy('created_at', 'DESC') -> get();

        return view('pages.project-portfolio', compact('projects'));

    }

    public function homeLogin(){

        $projects = project::orderBy('created_at', 'DESC') -> get();

        return view('pages.home-login', compact('projects'));
    }

    public function projectShow(project $project){

        $data = $project;

        return view('pages.project-show', compact('project'));
    }

    public function projectCreate(){

        return view('pages.project-create');
    }

    public function projectStore(request $request){
        $data = $request -> validate([
            'name' => 'required|string|max:32',
            'description' => 'required|string|max:255',
            'release_at' => 'required|date|date:today',
            'repo_link' => 'required|string|max:255',
        ]);
    
        $project = new project();
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> release_at = $data['release_at'];
        $project -> repo_link = $data['repo_link'];

        $project -> save();
    
        return redirect() -> route('project.homeLogin');
    }

    public function projectDelete(project $project){

        $project->delete();

        return redirect()->route('project.homeLogin');
    }

    public function projectEdit(project $project){

        return view('pages.project-edit', compact('project'));
    }

    public function projectUpdate(request $request, project $project){

        $data = $request -> validate([
            'name' => 'required|string|max:32',
            'description' => 'required|string|max:255',
            'release_at' => 'required|date|date:today',
            'repo_link' => 'required|string|max:255',
        ]);
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> release_at = $data['release_at'];
        $project -> repo_link = $data['repo_link'];

        $project -> save();

        return redirect()->route('project.homeLogin');
    }


}
