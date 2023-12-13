<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Services\User\UserService;
use App\Http\Requests\User\UserRequest;

class LoginController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService) 
    {
        $this->userService = $userService;
    }

    public function login()
    {
        return view('admin.users.login', [
            'title' => 'TravelWithU - Đăng Nhập'
        ]);
    }

    public function handle_login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter', 
            'password' => 'required'
        ],[
            'email.required'=>'Bạn chưa nhập email.',
            'password.required'=>'Bạn chưa nhập mật khẩu.'
        ]);

        // Kiểm tra thông tin nhập vào có đúng với giá trị có trong csdl
        if (Auth::attempt([
            'email' => $request->input('email'), 
            'password' => $request->input('password')],
             $request->input('remember'))) {                // Kiểm tra remember tồn tại hay không. Có -> true, và ngược lại

                // Đúng thì chuyển sang trang admin (admin.main)
                return redirect()->route('admin');              
        }

        // Session::flash('error', 'Sai email hoặc mật khẩu');

        // Sai thì trở lại trang đăng nhập và hiện lỗi
        session()->flash('error', 'Sai Email hoặc Mật khẩu!');
        return redirect()->back();
    }

    
    public function register()
    {
        return view('user.register', [
            'title'=>'TravelWithU - Đăng Ký'
        ]);
    }

    public function addUserByAdmin()
    {
        return view('admin.users.add-user', [
            'title' => 'Thêm Người Dùng'
        ]);   
    }

    // public function handle(UserRequest $request)
    // {
    //     $this->userService->create($request);
    //     return redirect()->back();  
    // }

    public function handle_register(UserRequest $request)
    {
        $this->userService->create($request);
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
