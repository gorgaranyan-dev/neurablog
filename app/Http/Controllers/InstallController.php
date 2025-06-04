<?php

namespace App\Http\Controllers;

use App\Http\Requests\Installer\PostRequest;
use App\Services\Installer;
use App\Core\Http\Request\Request;
use Exception;

class InstallController extends Controller
{
    protected Installer $installer;

    public function __construct()
    {
        $this->installer = new Installer();
    }

    public function redirectInstall(Request $request)
    {
        try {
            return redirect()->to('install');
        } catch (Exception $e) {
            return redirect()->back()->with('_error', $e->getMessage());
        }
    }

    public function showForm(Request $request)
    {
        try {
            return view('auth.install');
        } catch (Exception $e) {
            return redirect()->back()->with('_error', $e->getMessage());
        }
    }

    public function install(Request $request)
    {
        try {
            $form = new PostRequest($request);
            $this->installer->install($form->validate());

            return redirect()->to('/dashboard');
        } catch (Exception $e) {
            return redirect()->back()->with('_error', $e->getMessage())->withInput();
        }
    }
}