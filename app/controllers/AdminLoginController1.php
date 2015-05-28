<?php

class AdminLoginController extends \BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	 
	 public function __construct()
    {
       // $this->beforeFilter('auth', [ 'except' => ['create', 'store', 'sendRecoverPassword', 'setNewPassword', 'recoverPassword', 'saveNewPassword'] ]);
    }
	//Show login form
	public function index(){
		return View::make('admin.login.index');
		//return View::make('admin.dashboard.index');
	}
	//Show forgot password form
	public function forgotpass(){
		return View::make('admin.forgotpass.forgotpass');
	}
	//Function for login Sentry
	/*public function postlogin(){
		$logincred = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			);
		try{
				$user = Sentry::authenticate($logincred, false);
				if($users)
					{
						return Redirect::to('admin.dashboard.index');
					}
			}
	    catch(\Exception $e)
		{
			return Redirect::to('admin.login.index');//->withErrors(array('login' => $e->getMessages()));
		}
	}
	public function logout(){
		Sentry::logout();
		return Redirect::to('/');
	}*/
}
?>

