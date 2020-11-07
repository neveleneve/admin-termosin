<?php

namespace App\Http\Controllers;

use App\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    public function dashboard()
    {
        return view('login');
    }

    public function masuk(Request $req)
    {
        $dataadmin = Administrator::where('username', $req->username)->get();
        if (count($dataadmin) == 0) {
            return redirect('/');
        } else {
            if ($dataadmin[0]->level == 0) {
                $pass = trim($req->password);
                $hash = trim($dataadmin[0]->password);
                if (Hash::check($pass, $hash)) {
                    Auth::guard('admin')->LoginUsingId($dataadmin[0]['id']);
                    return redirect('/admin/dashboard');
                } else {
                    echo 'pass salah';
                }
            }
            if ($dataadmin[0]->level == 1) {
                $pass = trim($req->password);
                $hash = trim($dataadmin[0]->password);
                if (Hash::check($pass, $hash)) {
                    Auth::guard('superadmin')->LoginUsingId($dataadmin[0]['id']);
                    return redirect('/superadmin/dashboard');
                } else {
                    echo 'pass salah';
                }
            }
        }
    }

    public function keluar()
    {
        if (Auth::guard('superadmin')->check()) {
            Auth::guard('superadmin')->logout();
        } elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        return redirect('/');
    }
}
