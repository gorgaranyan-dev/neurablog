<?php

namespace App\Http\Controllers;

use App\Core\Http\Request;
use App\Http\Requests\Installer\PostRequest;
use App\Services\Installer;
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
            $this->redirect()->to('install')->send();
        } catch (Exception $e) {
            $this->redirect()->back()->with('_error', $e->getMessage())->send();
        }
    }

    public function showForm(Request $request)
    {
        try {
            return $this->view('auth.install');
        } catch (Exception $e) {
            $this->redirect()->back()->with('_error', $e->getMessage())->send();
        }
    }

    public function install(Request $request)
    {
        try {
            $form = new PostRequest($request);
            $this->installer->install($form->validate());
            $this->redirect()->to('/dashboard')->send();
        } catch (Exception $e) {
            $this->redirect()->back()->with('_error', $e->getMessage())->withInput()->send();
        }
    }
}