<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// use Hash;
use Mail;

class UserAuthController extends Controller
{
    

    public function Login()
    {
        return view( 'auth.login'); //這行才有透過view，來顯示視窗畫面
    }

    public function LoginProcess()
    {
        $form_data = request()->all();
        
        // 檢查 email 是否存在
        $user = User::where('email', $form_data['email'])->first();
        if (!$user) {
            return redirect('/user/auth/login')
                ->withInput()
                ->withErrors(['email' => '帳號或密碼錯誤，請再次確認']);
        }
    
        // 檢查密碼是否正確
        if (Hash::check($form_data['password'], $user->password)){
            echo '登入成功';
            session()->put('user_id', $user->id);
            session()->put('user_email', $user->email);
            # 導向到首頁
            return redirect('/user/auth/home');
        } else {
            return redirect('/user/auth/login')
                ->withInput()
                ->withErrors(['password' => '帳號或密碼錯誤，請再次確認']);
        }
    }
    


    public function SignOut()
    {
        session()->forget('user_id');
        return redirect('/user/auth/login');
    }

    public function home()
    {
        return view( 'auth.home');
    }

    public function home1()
    {
        return view( 'auth.home1');
    }


    public function Profile($id)
    {
        return 'My id：'.$id;
    }

    public function SignUp()
    {
        return view( 'auth.sign_up');

    }


    public function SignUpProcess()
    {
        $form_data = request()->all();


        // $form_data['password'] = Hash::make($form_data['password']);
        // $user = User::create($form_data);

        if ( $form_data['password'] == "" || $form_data['email'] == "" || $form_data['nickname'] == "" ) {
            return redirect('/user/auth/signup')
            ->withInput()
            ->withErrors(['資料不齊全','請檢查所有欄位都填滿']);
        }else{
            # 判斷帳號是否重複
            $user = User::where('email', $form_data['email'])->first();
            if (!is_null($user)) {
                return redirect('/user/auth/signup')
                ->withInput()
                ->withErrors(['此帳號已被註冊','請更換帳號']);
            }

            $user = User::create([
                'email' => $form_data['email'],
                'password' => Hash::make($form_data['password']),
                'type' => $form_data['type'],
                'nickname' => $form_data['nickname'],
            ]);

            // Mail::send('email.signUpEmailNotification', [
            //     'nickname' => $form_data['nickname']
            // ], function($message) use ($form_data) {
            //     $message->to($form_data['email'], $form_data['nickname'])
            //         ->from('nickyhuang613@gmail.com')
            //         ->subject('nicky甜點會員註冊成功');
            // });
            //dd($user);
            // return redirect('/user/auth/login');


           
            return redirect()
            ->to('/user/auth/login')
            ->with('message', trans('會員註冊成功'));
        
        }


    }


    public function forgetpassword()
    {
        return view( 'auth.forgetpassword');

    }


    public function forgetpasswordprocess(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string',
        ]);
    
        // 根據識別資訊尋找使用者
        $user = User::where('email', $request->identifier)
                    ->first();
    
        if (!$user) {
            return back()->withErrors(['identifier' => '找不到與此識別資訊相符的帳號']);
        }
    
    
        // 如果驗證通過，顯示重設密碼的表單
        return view('auth.resetpassword', compact('user'));
    }



    public function resetpassword()
    {
        return view( 'user.auth.resetpassword');

    }


    public function resetpasswordprocess(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'new_password' => 'required|string|confirmed',
        ]);

        $user = User::find($request->user_id);
        $user->password = Hash::make($request->new_password);
        $user-> updated_at = now();  // 更新密碼變更時間
        $user->save();

        return redirect()->route('user.auth.login')->with('message', '您的密碼已成功重設');
    }


}

