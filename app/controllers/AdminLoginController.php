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
	
	public function index(){
		//echo "Test"; die();
		return View::make('admin.login.index');
		//return View::make('admin.dashboard.index');
	}
	public function forgotpass(){
		return View::make('admin.forgotpass.forgotpass');
	}
	//Function for login
	public function postlogin(){
		
		$logincredentials = [
		   'email' => Input::get('email'),
		   'password' => Input::get('password')
		   ];
			
		$user = Sentry::authenticate($logincredentials, false);
		   
		   try
            {
               // $user = Sentry::authenticate($credentials, false);
			   Sentry::login($user, false);
            }
            catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
            {
                 $errorMsg = 'Login field is required.';
            }
            catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
            {
                 $errorMsg = 'Password field is required.';
            }
            catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
            {
                $errorMsg = 'Wrong password, try again.';
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
            {
                $errorMsg = 'User was not found.';
            }
            catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
            {
                $errorMsg = 'User is not activated.';
            }

            catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
            {
                $errorMsg = 'User is suspended.';
            }
            catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
            {
                $errorMsg = 'User is banned.';
            }
				
				if($user)
				{
					
					/*echo "1";die();
					return Redirect::to('admin/dashboard');*/
				}
				//echo '222'.$errorMsg;die();
		//    }
	//	catch(\Exception $e)
	//			{
	//				echo "2";die();
	//				return Redirect::to('admin/login');
	//			}
	}

}
?>

