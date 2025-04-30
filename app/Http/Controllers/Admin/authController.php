<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\loginRequest;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    /***************** loginPage *****************/
    public function loginPage(): \Illuminate\Contracts\View\View
    {
        return view('dashboard.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Check if there's an intended URL to redirect to

            $intended = session()->pull('url.intended');
            if ($intended) {
                return redirect($intended)
                    ->with('success', __('siteTrans.login_successfully'));
            }

            return redirect()->route('admin.dashboard.homePage')
                ->with('success', __('siteTrans.login_successfully'));
        }

        return redirect()
            ->back()
            ->withInput($request->only('email'))
            ->with('error', 'خطأ فى بيانات الدخول');
    }

    public function logout()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect(route('admin.login'))->with('success', __('siteTrans.logout_successfully'));
    }
}
