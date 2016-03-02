<?php

class HomeController extends BaseController {

    public function showWelcome(){
        $slider = Slider::all();
        return View::make('front.index', compact('slider'));
    }

    public function login_show()
    {
        return View::make('login');
    }

    public function authenticate(){
        $rules = array(
            'username' => 'required|email',
            'password' => 'required|alpha_num|between:4,20',
        );
        $validator = Validator::make(Input::all(), $rules);
        $users = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            if (Auth::attempt($users)) {
                return Redirect::intended('admin/galleries/index');
            } else {
                return Redirect::route('login')->with('message', 'نام کاربری و یا رمز عبور شما اشتباه است')->withInput();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return View::make('front.index');
    }
}
