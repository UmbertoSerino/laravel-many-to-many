<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfile extends Controller
{
    public function show(Project $project)
    {
        $users = User::all();
        return view('admin.projects.show', compact('project', 'users'));
    }
}
