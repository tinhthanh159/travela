<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Login;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginGoogleController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new Login();
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $finduser = $this->user->checkUserExistGoogle($user->id);

            if ($finduser) {
                session()->put('username', $finduser->username);
                return redirect()->intended('/');
            } else {
                $data_google = [
                    'google_id' => $user->id,
                    'fullName' => $user->name,
                    'username' => 'google_' . rand(1000, 9999),
                    'password' => bcrypt('12345678'),
                    'email' => $user->email,
                    //'avatar' => $user->avatar, // thêm nếu bạn muốn
                    'isActive' => 'y'
                ];

                $this->user->registerAcount($data_google);

                $newUser = $this->user->checkUserExistGoogle($user->id);
                
                if ($newUser) {
                    session()->put('username', $newUser->username);
                    return redirect()->intended('/');
                } else {
                    return redirect()->back()->with('error', 'Có lỗi xảy ra trong quá trình đăng ký người dùng mới');
                }
            }
        } catch (Exception $e) {
            return redirect('/login')->with('error', 'Lỗi đăng nhập Google: ' . $e->getMessage());
        }
    }
}
