<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use DB;
use Hash;
use Auth;
use App\Models\User;

class MyController extends Controller
{
	 //------------------So luong-------------------------------
	 public function increase($in){
		$test = DB::table('products')->where('p_id',$in)->select('p_quantity')->get();
		foreach ($test as $key ) {
			$test = $key->p_quantity;
		}
        $increase = DB::table('products')->where('p_id',$in)->update(['p_quantity' => $test+1]);
		$id = DB::table('products')->get(); 
        return view('profile/chitietdonhang', compact('id'));
  	}
	public function decrease($de){
		$test = DB::table('products')->where('p_id',$de)->select('p_quantity')->get();
		foreach ($test as $key ) {
			$test = $key->p_quantity;
		}
		if ($test > 1) {
			$decrease = DB::table('products')->where('p_id',$de)->update(['p_quantity' => $test-1]);
		}
		$id = DB::table('products')->get(); 
        return view('profile/chitietdonhang', compact('id'));
	}

	//------------------Xoa product-----------------------------
	public function del_product($v){
        $del = DB::table('products')->where('p_id',$v)->delete();
		$id = DB::table('products')->get();
        return view('profile/chitietdonhang', compact('id'));
    }



    public function lichsudonhang(){
        $users = DB::table('orders')->where('o_state',1)->get();
        return view('profile/lichsudonhang', compact('users'));
    }
    
    public function donhang(){
        $users = DB::table('orders')->where('o_state',0)->get();
        return view('profile/donhang', compact('users'));
    }

    //------------------ dia chi thanh toan--------------------

    public function select_delivery_home(Request $request){
    	$data = $request->all();
    	if($data['action']){
    		$output = '';
    		if($data['action']=="city"){
    			$select_province = DB::table('devvn_quanhuyen')->where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();	
                $output.='<option>Chọn quận huyện</option>';
    			foreach($select_province as $key => $province){
    				$output.='<option value="'.$province->maqh.'">'.$province->name.'</option>';
    			}
    		}else{

    			$select_wards =  DB::table('devvn_xaphuongthitran')->where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
    			$output.='<option>Chọn xã phường</option>';
    			foreach($select_wards as $key => $ward){
    				$output.='<option value="'.$ward->xaid.'">'.$ward->name.'</option>';
    			}
    		}
    		echo $output;
    	}
    }

	//------------------------Phí ship-----------------------------------
	public function ship(Request $request){
    	$data = $request->all();
		$name = $data['name'];
		$phone = $data['phone'];
		$matp = $data['city'];
		$maqh = $data['province'];
		$xaid = $data['wards'];
		$id = DB::table('address')->update([
			'ma_tp' => $matp,
			'ma_qh' => $maqh,
			'xa_id' => $xaid,
			'name' => $name,
			'phone' => $phone
		]);	
    }
	//------------------------Vouchers-----------------------------------

	public function vouchers(Request $request){
    	$data = $request->all();
		$fee = $data['voucher'];
		$vou = DB::table('vouchers')->select('v_discount')->where('v_content',$fee)->get();
		$thanhpho = DB::table('devvn_tinhthanhpho')->orderBy('matp','ASC')->get();
		$su = DB::table('products')->get();
		$sum = 0;
		foreach ($su as $su) {
			$sum = $sum + $su->p_prices;
		} 
		foreach ($vou as $vous) {
			$vous = $vous->v_discount;
		} 
		
		if (isset($vous)) {
			return view('profile/muahang',compact('vous','thanhpho','sum'));	
		} else {
			$vous = 0;
			return view('profile/muahang',compact('vous','thanhpho','sum'));		
		}
	}



}
