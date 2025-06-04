<?php

namespace App\Http\Controllers;

use App\Core\Http\Request\Request;
use Exception;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        try {
            return view('admin.dashboard');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function addNewPostView(Request $request)
    {
        try {
            return view('admin.add-new');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}