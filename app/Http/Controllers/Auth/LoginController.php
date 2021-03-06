<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/Homepage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:management')->except('logout');
        $this->middleware('guest:company')->except('logout');
        $this->middleware('guest:general')->except('logout');

    }

    public function showManagementLoginForm()
    {
        return view('auth.login', ['authgroup' => 'management']);
    }

    public function managementLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:5'
        ]);

        if (Auth::guard('management')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) 
        {
            $managermail = $request->email;
            $request->session()->put('managermail', $managermail);
            return redirect()->intended('/fresh/management/mypage');
        }
        $managermail = $request->email;
        $request->session()->put('managermail', $managermail);
        return redirect()->intended('/fresh/management/mypage');
        // return back()->withInput($request->only('email', 'remember'));
    }

    public function showCompanyLoginForm()
    {
        return view('auth.login', ['authgroup' => 'company']);
    }

    public function companyLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:5'
        ]);

        if (Auth::guard('company')->attempt(['company_mail' => $request->email, 'password' => $request->password], $request->get('remember'))) 
        {
            $company_mail = $request->email;
            $request->session()->put('company_mail', $company_mail);
            return redirect()->intended('/fresh/company/mypage');
        }
        $company_mail = $request->email;
        $request->session()->put('company_mail', $company_mail);
        return redirect()->intended('/fresh/company/mypage');
        //return back()->withInput($request->only('company_mail', 'remember'));
    }

    public function showGeneralLoginForm()
    {
        return view('auth.login', ['authgroup' => 'general']);
    }

    public function generalLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:5'
        ]);

        if (Auth::guard('general')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) 
        {
            $email = $request->email;
            $request->session()->put('usermail', $email);
            return redirect()->intended('/fresh/general/mypage');
        }
        $email = $request->email;
        $request->session()->put('usermail', $email);
        return  redirect()->intended('/fresh/general/mypage');
    }

}
