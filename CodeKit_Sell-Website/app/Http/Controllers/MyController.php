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
		$matp = $data['city'];
		$maph = $data['province'];
		$xaid = $data['wards'];
		$id = DB::table('ship')->where([
			['matp','=',$matp],
			['maqh','=',$maqh],
			['xaid','=',$xaid]
		])->get();

		/* DB::table('ship')->insert([
			'matp' => $matp,
			'maqh' => $maph,
			'xaid' => $xaid
		])->get(); */

			// CHưa xong

    }
	//------------------------Vouchers-----------------------------------

	public function vouchers(Request $request){
    	$data = $request->all();
		$fee = $data['vouchers'];
		$vou = DB::table('vouchers')->select('v_discount')->where('v_content',$fee)->get();
		return view('profile/muahang',compact('vou'));	
	}



}
