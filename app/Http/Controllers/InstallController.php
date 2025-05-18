<?php

namespace App\Http\Controllers;

use App\Core\Http\Request;
use Exception;
use App\Http\Requests\Installer\PostRequest;

class InstallController extends Controller {

	public function redirectInstall( Request $request ) {
		try {
			$this->redirect()->to( 'install' );
		} catch ( Exception $e ) {
//            return $this->redirectBack();
		}
	}

	public function showForm( Request $request ) {
		try {
			return $this->view( 'auth.install' );
		} catch ( Exception $e ) {
//            return $this->redirectBack();
		}
	}

	public function install( Request $request ) {
		try {
			$form = new PostRequest( $request );
			$this->redirect()->back()->withInput($form->all())->send();
			
		} catch ( Exception $e ) {
		}
	}
}