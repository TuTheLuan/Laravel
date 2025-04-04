<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * CRUD User controller
 */
class LayoutController extends Controller
{   
    public function login()
    {
        return view('layout.login');
    }

    /**
     * User submit form login
     */
    public function authUser(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('layout.list')->with('success', 'Đăng nhập thành công!');
    }

    return redirect()->route('layout.login')->withErrors(['login' => 'Sai tài khoản hoặc mật khẩu.']);
}


    
    public function update($id)
    {
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('layout.list')->with('error', 'Người dùng không tồn tại.');
    }

    return view('layout.update', compact('user'));
    }


    public function listUsers()
    {
    $users = User::all();
    return view('layout.list', compact('users'));
    }



    public function register()
    {
        return view('layout.register');
    
    }
    /**
     * User submit form register
     */
    public function postUser(Request $request)
{
    $validatedData = $request->validate([
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
       
    ]);

    try {
        User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            
        ]);

        return redirect()->route('layout.login')->with('success', 'Đăng ký thành công!');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}







     function view(Request $request)
    {
    $userId = $request->query('id'); // Lấy id từ query string
    $user = User::find($userId);

    if (!$user) {
        return redirect()->route('layout.list')->with('error', 'Người dùng không tồn tại.');
    }

    return view('layout.view', compact('user'));
    }
    
    public function deleteUser($id)
    {
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('layout.list')->with('error', 'User not found!');
    }

    $user->delete();
    return redirect()->route('user.list')->with('success', 'User deleted successfully!');
    }


 

    public function postUpdate(Request $request, $id)
{
    $user = User::find($id);
    if (!$user) {
        return redirect()->route('layout.list')->with('error', 'User not found!');
    }

    // Validation dữ liệu đầu vào
    $request->validate([
        'username' => 'required|unique:users,username,' . $id,
        'email' => 'required|email|unique:users,email,' . $id,
        
    ]);

    // Cập nhật dữ liệu
    $user->username = $request->username;
    $user->email = $request->email;
  

    // Kiểm tra nếu người dùng nhập mật khẩu mới
    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('layout.list')->with('success', 'User updated successfully!');
}




    public function signout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('layout.login')->with('success', 'Đăng xuất thành công!');
    }
}