<?php

namespace App\Http\Controllers;
use App\Consult;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $error = $request->validate(
            [
                'firstName' => 'required|min:3|max:18',
                'lastName' => 'required|min:3|max:18',
                'phoneNumber' => 'required|numeric|digits:11|unique:users',
                'email' => 'nullable|email|unique:users',
                'Password' => 'required|between:5,15',
                'PasswordAgain' =>'required|between:5,15|same:Password'

            ],
            [
               'firstName.required' => 'لطفا نام خود را وارد کنید',
               'firstName.min' => 'کارکترهای نام شما کمترازحدمجاز است.',
               'firstName.max' => 'کارکترهای نام شما بیشتر ازحدمجاز است.',
                'lastName.required' => 'لطفا نام خانوادگی خود را وارد کنید',
                'lastName.min' => 'کارکترهای نام خانوادگی شما کمترازحدمجاز است.',
                'lastName.max' => 'کارکترهای نام خانوادگی شما بیشتر ازحدمجاز است.',
                'phoneNumber.required' => 'لطفا شماره همراه خود را وارد کنید',
                'phoneNumber.numeric' => 'برای شماره همراه فقط از عدد استفاده کنید',
                'phoneNumber.digits' => 'شماره تلفن باید 11 رقم باشد',
                'phoneNumber.unique' => 'این شماره تلفن قبلا ثبت شده است.',
                'email.email' => 'لطفا ایمیل خود را به شکل صحیح وارد کنید(example@gmail.com)',
                'email.unique' => 'این ایمیل قبلا ثبت شده است',
                'Password.required' => 'رمزعبور خود را انتخاب کنید',
                'Password.between' => 'تعداد رمز عبور انتخابی شما یا کمتراز 5 کارکتر یا بیشتر از 15کارکتر می باشد ',
                'PasswordAgain.required' => 'تکرار رمز عبور را وارد کنید',
                'PasswordAgain.same' => 'تکرار رمز عبور با رمز عبور همخوانی ندارد'
            ]
        );
          $user = new User();
          $user->firstName = $request->firstName ;
          $user->lastName = $request->lastName ;
          $user->phoneNumber = $request->phoneNumber ;
          if ($request->email !== null){
              $user->email = $request->email ;
          }else{
              $user->email = null ;
          }

          $user->password = bcrypt($request->Password) ;
          $user->save();

          Auth::login($user);
          return response()->json($user,200);

    }
    public function login(Request $request)
    {
        if (Auth::attempt(['phoneNumber'=>$request->phoneNumber,'password'=>$request->Password]))
        {
           /*  redirect json */
            return ['redirect' => route('UserPanel')];
        }
        else{
            return response()->json(['error'=>'شماره موبایل یا رمزعبور صحیح نمی باشد'],401);
        }
    }
    public function consult(Request $request)
    {
        $error=$request->validate([
            'phoneNumber' => 'required|numeric|digits:11|',
            'fullName' => 'required|max:25|min:3'
        ],
            [
                'fullName.required' => 'نام و نام خانوادگی خود را وارد کنید',
                'fullName.min' => ' تعداد کارکترهای نام و نام خانوادگی شما کمتر ازحد مجاز است',
                'fullName.max' => ' تعداد کارکترهای نام و نام خانوادگی شما بیشتر ازحد مجاز است',
                'phoneNumber.required' => 'شماره همراه خود را وارد کنید',
                'phoneNumber.numeric' => 'برای واردکردن شماره همراه فقط ازعدد استفاده کنید',
                'phoneNumber.digits' => 'شماره همراه باید 11 رقم باشد',

            ]
        );
        $user = new Consult() ;
        $user->fullName = $request->fullName ;
        $user->phoneNumber = $request->phoneNumber ;
        $user->save();
        return response()->json([$user,$error],200);
    }
    public function UserPanel()
    {
        $user=Auth::user();
        if ($user->id === 3){
            return view('userpanel',compact('user'));
        }else{
            return 'saaaaaaaaalam' ;
        }


    }
}
