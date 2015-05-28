<?php

class AdminController extends \BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	 
	 public function __construct()
    {
       // $this->beforeFilter('auth', [ 'except' => ['create', 'store', 'sendRecoverPassword', 'setNewPassword', 'recoverPassword', 'saveNewPassword'] ]);
    }
	
	public function index(){
		
 		return View::make('admin.dashboard.index');
	}

}
?>

