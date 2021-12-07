<?php

namespace App\Http\Controllers;

use App\User;
use App\Settings;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Redis;
use Auth;
use DB;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            view()->share('u', $this->user);
            if(Auth::user()){
                $this->basket =  DB::table('basket')->where('user_id', $this->user->id)->count();
                view()->share('b', $this->basket);
            }
            return $next($request);
        });
        Carbon::setLocale('ru');
        date_default_timezone_set('Europe/Moscow');
        
		$this->settings = Settings::first();
		view()->share('settings', $this->settings);
        $this->promo = DB::select('select * from promo where id = 1');
        view()->share('promo', $this->promo);
    }
}
