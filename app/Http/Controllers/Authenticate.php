<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authenticate extends Controller
{
      public function admin_login()
      {
        return view('auth/login');
      }

      public function admin_forget_password()
      {
        return view('auth/forget_password');
      }
}
