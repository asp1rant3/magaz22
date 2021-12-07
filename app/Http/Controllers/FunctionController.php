<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Settings;
use App\Http\Controllers\VkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use DB;

class FunctionController extends Controller
{
       public function saved_lists_save(Request $r) {
        $arr_lists = json_decode($this->user->arr_lists);
        if(!$arr_lists){
            $arr_lists = array();
        }
        array_push($arr_lists, $r->id);
        DB::table('users')->where('id', $this->user->id)->update([
            'arr_lists' => json_encode($arr_lists)
        ]);
        return response()->json([
            'success' => true,
            'error' => ''
        ]);
    }

    public function saved_lists_del(Request $r) {
        $del = $this->del($r->id);
        return response()->json([
            'success' => true,
            'error' => ''
        ]);
    }

    public function buy_add(Request $r) {
        $del = $this->del($r->id);
        \DB::table('basket')->insert(['products_id' => $r->id, 'user_id' => $this->user->id]);
        return response()->json([
            'success' => true,
            'error' => ''
        ]);
    }

    public function del_buy(Request $r) {
        DB::table('basket')->where('products_id', $r->id)->where('user_id', $this->user->id)->delete();
        return response()->json([
            'success' => true,
            'error' => ''
        ]);
    }

    private function del($products_id) {
        $arr_lists = json_decode($this->user->arr_lists);
        $arr_lists2 = array();
        foreach ($arr_lists as $key => $value) {
            if($value != $products_id){
                array_push($arr_lists2, $value);
            }
        }
        DB::table('users')->where('id', $this->user->id)->update([
            'arr_lists' => json_encode($arr_lists2)
        ]);
        return;
    }
}