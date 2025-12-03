<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;

use Illuminate\Support\Facades\Hash;

use app\Http\Controllers\Auth\PasswordResetLinkController;
use app\Http\Controllers\Auth\NewPasswordController;


class AccountController extends Controller
{
    public function create_account(Request $request){
        $validator = Validator::make($request->all(), [
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:accounts,email',
        'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
                             
        }
        Account::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'confirm_password'=>bcrypt($request->password_confirmation),
        ]);
        
 return redirect()->route('contant');

    }
    public function login(Request $request){
        $account=Account::where('email',$request->email)->first();
        if(!$account){
            return redirect()->back()->with('error', 'الايميل غير موجود');
        }
       if (!Hash::check($request->password, $account->password)) {
            return redirect()->back()->with('error', 'كلمة المرور غير صحيحة');
        }
        return redirect()->route('contant');
    }
    // public function password_reset(Request $request){
    //      $user=Account::where('email',$request->email)->first();
    //     if(!$user){
    //         return redirect()->back()->with('error', 'الايميل غير موجود');
    //     }
      public function password_reset(Request $request)
    {
        $user=Account::where('email',$request->email)->first();
        if(!$user){
             return redirect()->back()->with('error', 'الايميل غير موجود');
   }
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', 'تم إرسال رابط إعادة تعيين كلمة المرور على الإيميل.');
        } else {
            return back()->withErrors(['email' => 'الإيميل غير موجود أو حدث خطأ.']);
        }
    }


    }


