<?php

namespace App\Http\Services\User;

use App\Models\User;
use Illuminate\Support\Str;

class UserService 
{
    public function create($request)
    {
        try {
            User::create([
                'fname' => (string) $request->input('fname'),
                'name' => (string) $request->input('name'),
                'phone' => (int) $request->input('phone'),
                'password' => bcrypt($request->input('password')),
                'email' => (string) $request->input('email')
            ]);
            session()->flash('success', 'Tạo tài khoản thành công!');
        } catch (\Exception $e) {
            session()->flash('error', 'Tài khoản này đã tồn tại!');
            return false;
        }
        return true;
    }

    public function getUser()
    {
        return User::paginate(10);
    }

    public function updateUser($request, $user): bool
    {
        $user->fill($request->input());

        $user->save();

        session()->flash('success', 'Cập nhật thành công.');
        return true;
    }

    public function delUser($request)
    {
        $id = (int) $request->input('id');
        $user = User::where('id', $id)->first();

        if ($user) {
            return User::where('id', $id)->delete();
        }
        return false;
    }
}