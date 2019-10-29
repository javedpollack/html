<?php

namespace App\Http\Controllers;
use App\Traits\UploadTrait;
use App\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.profile');
    }

    public function updateProfile(Request $request)
    {
        // Form validation
        
    }

}
