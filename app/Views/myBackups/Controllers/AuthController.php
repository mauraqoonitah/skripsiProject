<?php

namespace Myth\Auth\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Session\Session;
use Myth\Auth\Config\Auth as AuthConfig;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserCheckModel;
use Myth\Auth\Models\UserModel;

class AuthController extends Controller
{
	protected $auth;

	/**
	 * @var AuthConfig
	 */
	protected $config;

	/**
	 * @var Session
	 */
	protected $session;


	protected $userCheckModel;


	public function __construct()
	{
		// Most services in this controller require
		// the session to be started - so fire it up!
		$this->session = service('session');

		$this->config = config('Auth');

		$this->auth = service('authentication');

		$this->mRequest = service("request");

		$this->userCheckModel = new UserCheckModel();
	}

	//--------------------------------------------------------------------
	// Login/out
	//--------------------------------------------------------------------

	/**
	 * Displays the login form, or redirects
	 * the user to their destination/home if
	 * they are already logged in.
	 */
	public function login()
	{
		// No need to show a login form if the user
		// is already logged in.
		if ($this->auth->check()) {
			// $redirectURL = session('redirect_url') ?? base_url('admin');
			if (['filter' => 'role:Admin,Kontributor']) {
				$redirectURL = site_url('admin');
			}
			$redirectURL = site_url('responden');

			unset($_SESSION['redirect_url']);

			return redirect()->to($redirectURL);
		}

		// Set a return URL if none is specified
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? base_url('');

		return $this->_render($this->config->views['login'], ['config' => $this->config]);
	}
	/**
	 * Attempts to verify the user's credentials
	 * through a POST request.
	 */
	public function attemptLogin()
	{
		$rules = [
			'login'	=> 'required',
			'password' => 'required',
		];
		if ($this->config->validFields == ['email']) {
			$rules['login'] .= '|valid_email';
		}

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$login = $this->mRequest->getPost('login');
		$password = $this->mRequest->getPost('password');
		$remember = (bool)$this->mRequest->getPost('remember');

		// Determine credential type
		$type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		// Try to log them in...
		if (!$this->auth->attempt([$type => $login, 'password' => $password], $remember)) {
			return redirect()->back()->withInput()->with('error', $this->auth->error() ?? lang('Auth.badAttempt'));
		}

		// Is the user being forced to reset their password?
		if ($this->auth->user()->force_pass_reset === true) {
			return redirect()->to(route_to('reset-password') . '?token=' . $this->auth->user()->reset_hash)->withCookies();
		}

		// $redirectURL = session('redirect_url') ?? base_url('admin');
		// $redirectURL = site_url('admin');
		if (['filter' => 'role:Admin,Kontributor']) {
			$redirectURL = site_url('admin');
		}
		$redirectURL = site_url('responden');

		unset($_SESSION['redirect_url']);

		return redirect()->to($redirectURL)->withCookies()->with('message', lang('Auth.loginSuccess'));
	}
	/**
	 * Displays the checkAkun form, or redirects
	 * the user to their destination/home if
	 * they are already logged in.
	 */
	public function checkAkun()
	{

		if ($this->auth->check()) {
			$redirectURL = base_url('checkAkun');
			unset($_SESSION['redirect_url']);
			return redirect()->to($redirectURL);
		}

		$data = [
			'userCheck' => $this->userCheckModel->getUserCheck(),
			'validation' => \Config\Services::validation()

		];

		return $this->_render($this->config->views['checkAkun'], $data);

		// return $this->_render($this->config->views['checkAkun'], ['config' => $this->config]);

	}
	/**
	 * Attempts to check nomor identitas user sebelum register
	 * through a POST request.
	 */

	public function attemptCheckAkun()
	{
		// check if already logged in.
		if ($this->auth->check()) {
			return redirect()->back();
		}

		$nim = $this->mRequest->getVar('nim');
		$nidn = $this->mRequest->getVar('nidn');

		$data = [
			'userCheck' => $this->userCheckModel->getUserCheck(),
			'userCheckByInput' => $this->userCheckModel->getUserCheckByInput($nim),
		];

		// validasi input Check to see if data exists
		if ($this->validate([
			'nim' => [
				'rules'  => 'is_unique[user_check.nim]',
				'errors' => [
					'is_unique' => 'Data Tidak Ditemukan.'
				]
			],
			'nidn' => [
				'rules'  => 'is_unique[user_check.nidn]',
				'errors' => [
					'is_unique' => 'Data Tidak Ditemukan.'
				]
			],
		])) {
			// if data in table doesn't exist
			session()->setFlashdata('messageError', 'Data tidak ditemukan');
			return $this->_render($this->config->views['checkAkun'], $data);
		}
		// if data in table exist
		$newdataUser = [
			'nim'  => $nim,
			'nidn' => $nidn,
		];
		$session = \Config\Services::session();
		$session->set($newdataUser);

		// unset(
		// 	$_SESSION['getSessNim'],
		// 	$_SESSION['getSessNidn']
		// );

		session()->setFlashdata('message', 'Data Akun SIAKAD ditemukan. Silakan lengkapi data diri anda.');
		// return $this->_render($this->config->views['register']);
		return redirect()->to('register')->withInput();
	}

	/**
	 * Log the user out.
	 */
	public function logout()
	{
		if ($this->auth->check()) {
			$this->auth->logout();
		}

		return redirect()->to(base_url());
	}

	//--------------------------------------------------------------------
	// Register
	//--------------------------------------------------------------------

	/**
	 * Displays the user registration page.
	 */
	public function register()
	{
		// check if already logged in.
		if ($this->auth->check()) {
			return redirect()->back();
		}

		// Check if registration is allowed
		if (!$this->config->allowRegistration) {
			return redirect()->back()->withInput()->with('error', lang('Auth.registerDisabled'));
		}

		$session = \Config\Services::session();
		$getSessNim = $session->get('nim');
		$getSessNidn = $session->get('nidn');

		$data = [
			'userCheckByInput' => $this->userCheckModel->getUserCheckByInput($getSessNidn),

		];
		// $userCheckByInput = $this->userCheckModel->getUserCheckByInput($getSessNim);
		// dd($data['userCheckByInput']);
		// return $this->_render($this->config->views['register'], ['config' => $this->config], $data);
		return $this->_render($this->config->views['register'], $data);
	}


	/**
	 * Attempt to register a new user.
	 */
	public function attemptRegister()
	{
		// Check if registration is allowed
		if (!$this->config->allowRegistration) {
			return redirect()->back()->withInput()->with('error', lang('Auth.registerDisabled'));
		}

		$users = model(UserModel::class);

		// Validate basics first since some password rules rely on these fields
		$rules = [
			'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
			'fullname' => 'required',
			'email'    => 'required|valid_email|is_unique[users.email]',
			'role'    => 'required',
		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		// Validate passwords since they can only be validated properly here
		$rules = [
			'password'     => 'required|strong_password',
			'pass_confirm' => 'required|matches[password]',
		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		// Save the user
		$allowedPostFields = array_merge(['password'], $this->config->validFields, $this->config->personalFields);
		$user = new User($this->mRequest->getPost($allowedPostFields));

		$this->config->requireActivation === null ? $user->activate() : $user->generateActivateHash();

		// Ensure default group gets assigned if set
		if (!empty($this->config->defaultUserGroup)) {
			$users = $users->withGroup($this->config->defaultUserGroup);
		}

		if (!$users->save($user)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
		}

		if ($this->config->requireActivation !== null) {
			$activator = service('activator');
			$sent = $activator->send($user);

			if (!$sent) {
				return redirect()->back()->withInput()->with('error', $activator->error() ?? lang('Auth.unknownError'));
			}

			// Success!
			return redirect()->route('login')->with('message', lang('Auth.activationSuccess'));
		}

		// Success!
		return redirect()->route('login')->with('message', lang('Auth.registerSuccess'));
	}

	//--------------------------------------------------------------------
	// Forgot Password
	//--------------------------------------------------------------------

	/**
	 * Displays the forgot password form.
	 */
	public function forgotPassword()
	{
		if ($this->config->activeResetter === null) {
			return redirect()->route('login')->with('error', lang('Auth.forgotDisabled'));
		}

		return $this->_render($this->config->views['forgot'], ['config' => $this->config]);
	}

	/**
	 * Attempts to find a user account with that password
	 * and send password reset instructions to them.
	 */
	public function attemptForgot()
	{
		if ($this->config->activeResetter === null) {
			return redirect()->route('login')->with('error', lang('Auth.forgotDisabled'));
		}

		$users = model(UserModel::class);

		$user = $users->where('email', $this->mRequest->getPost('email'))->first();

		if (is_null($user)) {
			return redirect()->back()->with('error', lang('Auth.forgotNoUser'));
		}

		// Save the reset hash /
		$user->generateResetHash();
		$users->save($user);

		$resetter = service('resetter');
		$sent = $resetter->send($user);

		if (!$sent) {
			return redirect()->back()->withInput()->with('error', $resetter->error() ?? lang('Auth.unknownError'));
		}

		return redirect()->route('reset-password')->with('message', lang('Auth.forgotEmailSent'));
	}

	/**
	 * Displays the Reset Password form.
	 */
	public function resetPassword()
	{
		if ($this->config->activeResetter === null) {
			return redirect()->route('login')->with('error', lang('Auth.forgotDisabled'));
		}

		$token = $this->mRequest->getGet('token');

		return $this->_render($this->config->views['reset'], [
			'config' => $this->config,
			'token'  => $token,
		]);
	}

	/**
	 * Verifies the code with the email and saves the new password,
	 * if they all pass validation.
	 *
	 * @return mixed
	 */
	public function attemptReset()
	{
		if ($this->config->activeResetter === null) {
			return redirect()->route('login')->with('error', lang('Auth.forgotDisabled'));
		}

		$users = model(UserModel::class);

		// First things first - log the reset attempt.
		$users->logResetAttempt(
			$this->mRequest->getPost('email'),
			$this->mRequest->getPost('token'),
			$this->mRequest->getIPAddress(),
			(string)$this->mRequest->getUserAgent()
		);

		$rules = [
			'token'		=> 'required',
			'email'		=> 'required|valid_email',
			'password'	 => 'required|strong_password',
			'pass_confirm' => 'required|matches[password]',
		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$user = $users->where('email', $this->mRequest->getPost('email'))
			->where('reset_hash', $this->mRequest->getPost('token'))
			->first();

		if (is_null($user)) {
			return redirect()->back()->with('error', lang('Auth.forgotNoUser'));
		}

		// Reset token still valid?
		if (!empty($user->reset_expires) && time() > $user->reset_expires->getTimestamp()) {
			return redirect()->back()->withInput()->with('error', lang('Auth.resetTokenExpired'));
		}

		// Success! Save the new password, and cleanup the reset hash.
		$user->password 		= $this->mRequest->getPost('password');
		$user->reset_hash 		= null;
		$user->reset_at 		= date('Y-m-d H:i:s');
		$user->reset_expires    = null;
		$user->force_pass_reset = false;
		$users->save($user);

		return redirect()->route('login')->with('message', lang('Auth.resetSuccess'));
	}

	/**
	 * Activate account.
	 *
	 * @return mixed
	 */
	public function activateAccount()
	{
		$users = model(UserModel::class);

		// First things first - log the activation attempt.
		$users->logActivationAttempt(
			$this->mRequest->getGet('token'),
			$this->mRequest->getIPAddress(),
			(string) $this->mRequest->getUserAgent()
		);

		$throttler = service('throttler');

		if ($throttler->check(md5($this->mRequest->getIPAddress()), 2, MINUTE) === false) {
			return service('response')->setStatusCode(429)->setBody(lang('Auth.tooManyRequests', [$throttler->getTokentime()]));
		}

		$user = $users->where('activate_hash', $this->mRequest->getGet('token'))
			->where('active', 0)
			->first();

		if (is_null($user)) {
			return redirect()->route('login')->with('error', lang('Auth.activationNoUser'));
		}

		$user->activate();

		$users->save($user);

		return redirect()->route('login')->with('message', lang('Auth.registerSuccess'));
	}

	/**
	 * Resend activation account.
	 *
	 * @return mixed
	 */
	public function resendActivateAccount()
	{
		if ($this->config->requireActivation === null) {
			return redirect()->route('login');
		}

		$throttler = service('throttler');

		if ($throttler->check(md5($this->request->getIPAddress()), 2, MINUTE) === false) {
			return service('response')->setStatusCode(429)->setBody(lang('Auth.tooManyRequests', [$throttler->getTokentime()]));
		}

		$login = urldecode($this->mRequest->getGet('login'));
		$type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		$users = model(UserModel::class);

		$user = $users->where($type, $login)
			->where('active', 0)
			->first();

		if (is_null($user)) {
			return redirect()->route('login')->with('error', lang('Auth.activationNoUser'));
		}

		$activator = service('activator');
		$sent = $activator->send($user);

		if (!$sent) {
			return redirect()->back()->withInput()->with('error', $activator->error() ?? lang('Auth.unknownError'));
		}

		// Success!
		return redirect()->route('login')->with('message', lang('Auth.activationSuccess'));
	}

	protected function _render(string $view, array $data = [])
	{
		return view($view, $data);
	}
}
