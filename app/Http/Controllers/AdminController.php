<?php

namespace App\Http\Controllers;

use App\Core\Http\Request;
use App\Models\User;
use Exception;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        try {
            return $this->view('admin.dashboard');
        } catch (Exception $e) {
            $this->redirect()->back()->with('error', $e->getMessage())->send();
        }
    }

    public function addNewPostView(Request $request){
        try {
            return $this->view('admin.add-new');
        } catch (Exception $e) {
            $this->redirect()->back()->with('error', $e->getMessage())->send();
        }
    }
}