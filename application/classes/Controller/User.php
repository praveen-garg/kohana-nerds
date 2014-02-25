
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

	protected $is_admin = FALSE;

	public function before()
	{
    	parent::before();
    	// If the request is ajax, Don't render the template view (we will echo the JSON).
    	if ($this->request->is_ajax())
    	{
    		$this->auto_render = FALSE;
    		header('content-type: application/json');

    	}
    	// This automatically checks for an auto login cookie (thanks kemo).
    	if (Auth::instance()->logged_in())
    	{
        	$user = Auth::instance()->get_user();

        	$role_login = new Model_Role(array('name' => 'login'));
			$role_admin = new Model_Role(array('name' => 'admin'));

			$has_role_login = $user->has('roles', $role_login);
			$has_role_admin = $user->has('roles', $role_admin);

            $this->is_admin = $has_role_admin == 1 ? TRUE : FALSE;

 			// echo "User role: ".$has_role_login." Or Admin: ".$has_role_admin;
        	// As per role, Redirect to page

    	}
	}

	public function action_index()
	{
		// Load the user information
		$user = Auth::instance()->get_user();

		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			HTTP::redirect('user/login');
		}
		$this->template->content = View::factory('user/info')
			->bind('user', $user)->bind('is_admin', $this->is_admin);

	}

	public function action_create()
	{
		$this->template->content = View::factory('user/create')
			->bind('errors', $errors)
			->bind('message', $message);

		if (HTTP_Request::POST == $this->request->method())
		{
			try {

				// Create the user using form values
				$user = ORM::factory('User')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'
				));

				// Grant user login role
				$user->add('roles', ORM::factory('Role', array('name' => 'login')));

				// Add the login role if you know the roles.id is 1
				// $user->add('roles', 1);
				// Add multiple roles (for example, from checkboxes on a form)
				// $user->add('roles', array(1, 2));

				// Reset values so form is not sticky
				$_POST = array();

				// Set success message
				$message = "You have added user '{$user->username}' to the database";

			} catch (ORM_Validation_Exception $e) {

				// Set failure message
				$message = 'There were errors, please see form below.';

				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}

	public function action_login()
	{

		if($this->auto_render)
			$this->template->content = View::factory('user/login')
				->bind('message', $message);

		if (HTTP_Request::POST == $this->request->method())
		{
			// Attempt to login user
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			$user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);

			// If successful, redirect user
			if ($user)
			{
				if(! $this->auto_render)
					echo json_encode(array('status' => 1, 'msg' => 'Login successful'));
				else
					HTTP::redirect('user/index');
			}
			else
			{
				$message = 'Login failed';

				if(! $this->auto_render)
					echo json_encode(array('status' => 0, 'msg' => $message));
			}
		}
	}

	public function action_logout()
	{
		// Log user out
		Auth::instance()->logout();

		// Redirect to login page
		HTTP::redirect('user/login');
	}

}

/** Agenda
  * Add custom roles
  * 1. forgot password?
  * 2. identify ajax call and return JSON
  * 3. REST based authentication (i.e. web services)
  * 4. Login using facebook
  */

/** about user_tokens
  * a user checks the 'Remember me', A token is generated for the user and stored in the user_tokens table.
  * If you look at the Kohana_Auth_ORM class in the _login function, you can see how it is created. L#92
  * Also used by the auto_login() function.
  */

/**
  * SELECT DATE_FORMAT( FROM_UNIXTIME( `created` ) , '%d-%m-%Y' ) AS "cDate", DATE_FORMAT( FROM_UNIXTIME( `expires` ) , '%d-%m-%Y' ) AS "eDate"
  * FROM user_tokens;
  */