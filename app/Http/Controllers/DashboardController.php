<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tpackage;
use App\Models\Transaksi;
use App\Models\Transaksidt;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{

    public function __invoke()
    {
         if($user = Auth::user()){
            if($user->role == 'admin'){
                $users = User::count();
                $package = Tpackage::count();
                $transaksi = Transaksi::count();
                $detail = Transaksidt::count();

                return view('admin.index',[
                    'users' => $users,
                    'package' => $package,
                    'transaksi' => $transaksi,
                    'detail' => $detail,
                ]);

            } elseif($user->role == 'user'){
                return view('home');
            }
         }

    }
}
