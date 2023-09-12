<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function setTheme(Request $request, $theme)
    {
        // Validasi $theme dan lakukan perubahan sesuai kebutuhan

        return redirect()->back()->withCookie(cookie('theme', $theme));
    }
}
