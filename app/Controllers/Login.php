<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\Session\SessionInterface;

class Login extends Controller
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function index()
    {
        return view('login');
    }

    public function checkLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Invalid username or password');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->to('/login')->with('error', 'Invalid username or password');
        }

        // Login successful, set session and redirect to dashboard
        $this->session->set('logged_in', true);
        $this->session->set('username', $username);
        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}