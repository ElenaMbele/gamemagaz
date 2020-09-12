<?php

namespace App\Http\Controllers\Auth;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function showLoginForm()
    {
        $isGuest = Auth::guest();
        $isAdmin = false;
        if (Auth::check()) {
            if(Auth::user()->is_admin) {
                $isAdmin = true;
            }
        }

        $products = Product::query()->orderBy('id', 'DESC')->get();
        $categories = Category::all();
        $randomProduct = $products[random_int(0, count($products) - 1)];
        return view('auth.login', ['categories' => $categories, 'randomProduct' => $randomProduct, 'isGuest' => $isGuest,  'isAdmin' => $isAdmin]);
    }
}
