<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Settings;
use App\Http\Controllers\VkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use DB;

class PagesController extends Controller
{
    public function index() {
    	$products = \DB::table('products')->limit(8)->orderBy('id', 'desc')->get();
        $products_all = \DB::table('products')->orderBy('id', 'desc')->get();
    	return view('layouts.home', compact('products', 'products_all'));
    }
    public function faq() {
        return view('layouts.faq');
    }
    public function privacy_policy() {
        return view('layouts.privacy-policy');
    }
	public function terms_and_conditions() {
        return view('layouts.terms-and-conditions');
    }
    public function privacy_policy_cookies() {
        return view('layouts.privacy-policy-cookies');
    }
    public function to_contact_us() {
        return view('layouts.to_contact_us');
    }
    public function accessibility() {
        return view('layouts.accessibility');
    }

    public function products($r) {
        $p = \DB::table('products')->where('id', $r)->first();
        if(!$p){
            return redirect('/');
        }
        $rand_p = \DB::table('products')->orderBy(DB::raw('RAND()'))->take(4)->get();
        return view('layouts.products', compact('p', 'rand_p'));
    }

    public function search(Request $r)
    {
        if ($r->search == '') {
            return redirect('/');
        }

        $result = \DB::select('SELECT * FROM products WHERE name LIKE "%'.$r->search.'%"');
        if (!$result) {
            return redirect('/');
        }
        return view('layouts.search', compact('result'));
    }

    public function my_account() {
        return view('layouts.my-account');
    }
    public function my_details() {
        return view('layouts.my-details');
    }
    public function contact_preferences() {
        return view('layouts.contact-preferences');
    }
    public function change_password() {
        return view('layouts.change-password');
    }
    public function orders() {
        $ids = [];
        $basket = \DB::table('basket')->where('user_id', $this->user->id)->get();
        foreach ($basket as $key => $value) {
            $ids[] = $value->products_id;
        }
        $products_user = \DB::table('products')->whereIn('id', $ids)->orderBy('id', 'desc')->get();
        return view('layouts.orders', compact('products_user'));
    }
    public function saved_lists() {
        $arr_lists = [];
        if(Auth::check()){
            $ids = json_decode($this->user->arr_lists);
            if ($ids) {
                $arr_lists = \DB::table('products')->whereIn('id', $ids)->get();
            }
            
        }

        return view('layouts.saved-lists', compact('arr_lists'));
    }
}