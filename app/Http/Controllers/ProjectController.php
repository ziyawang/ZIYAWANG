<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ProjectController extends Controller
{
	public function prolist(){
		return view('proinfo.prolist');
	}

    public function _delnull($arr){
        foreach ($arr as $key => $value) {
            if($value == ''){
                unset($arr[$key]);
            }
        }
        return $arr;
    }

    public function proInfo(Request $request,$type,$id){
        $cookie = explode(';',($request->header()['cookie'][0]));
        foreach($cookie as $c){
            if(strpos($c,'phonenumber')){
                $arr = explode('=',$c);
                $phonenumber = $arr[1];
            }
        }
        
        if($type == "czgg"){
            return view('proinfo.newsinfo');
        }
        $type = sprintf("%02d", $type);
        $data = DB::table('T_P_PROJECTINFO')
        ->join('T_P_SPEC'.$type,'T_P_PROJECTINFO.ProjectID','=', 'T_P_SPEC'.$type.'.ProjectID')
        ->join('T_P_PROJECTTYPE', 'T_P_PROJECTINFO.TypeID', '=', 'T_P_PROJECTTYPE.TypeID')
        ->join("users", 'T_P_PROJECTINFO.UserID', '=', 'users.userid')
        ->where(['T_P_PROJECTINFO.ProjectID'=>$id,'CertifyState'=>1])->first();
        if($data == '' || !in_array($type, [1,6,12,16,17,18,19,20,21,22])){
            return view('errors.404');
        }


        //抢单人数统计
        $RushCount = DB::table('T_P_RUSHPROJECT')->where('ProjectID', $id)->where('CooperateFlag','<>',3)->count();
        //收藏人数统计
        $CollectCount = DB::table('T_P_COLLECTION')->where(['Type'=>1, 'ItemID'=>$id])->count();
        // $project = Project::join('T_P_PROJECTTYPE', 'T_P_PROJECTINFO.TypeID', '=', 'T_P_PROJECTTYPE.TypeID')->join("$diffTableName", 'T_P_PROJECTINFO.ProjectID', '=', "$diffTableName.ProjectID")->select('ProjectID','ProArea')->where($where)->get();
        $data->RushCount = $RushCount;
        $data->CollectCount = $CollectCount;
        $data->CollectFlag= 0;
        $data->RushFlag= 0;
        $data->PayFlag= 0;
        $data->Account= 0;

        if(isset($phonenumber)){
            $UserID = DB::table('users')->where('phonenumber',$phonenumber)->first() ? DB::table('users')->where('phonenumber',$phonenumber)->pluck('userid') : null;
            if ($UserID) {
                $tmp = DB::table('T_P_COLLECTION')->where(['Type' => 1, 'ItemID' => $id, 'UserID' => $UserID])->get();
                if ($tmp) {
                    $data->CollectFlag= 1;
                } else {
                    $data->CollectFlag= 0;
                }

                $ServiceID = DB::table('T_U_SERVICEINFO')->where('UserID',$UserID)->pluck('ServiceID');
                $tmpp = DB::table('T_P_RUSHPROJECT')->where(['ProjectID'=>$id, 'ServiceID'=>$ServiceID])->where('CooperateFlag','<>',3)->get();
                if ($tmpp) {
                    $data->RushFlag= 1;
                } else {
                    $data->RushFlag= 0;
                }

                //支付标记
                $tmppp = DB::table('T_U_MONEY')->where('UserID', $UserID)->where('ProjectID', $id)->get();
                $tmpppp = DB::table('T_P_RUSHPROJECT')->where(['ServiceID'=>$ServiceID, 'ProjectID'=>$id])->get();
                if ($tmppp || $tmpppp) {
                    $data->PayFlag= 1;
                } else {
                    $data->PayFlag= 0;
                }

                $data->Account= DB::table('users')->where('phonenumber',$phonenumber)->pluck('Account');
            }
        }
        $data->ProjectNumber = 'FB' . sprintf("%05d", $data->ProjectID);
        $data->ProLabel = isset($data->ProLabel) ? explode(',', rtrim($data->ProLabel,',')) : '';
        $data->ProLabel = $this->_delnull($data->ProLabel);
        $data->PictureDes = [$data->PictureDes1,$data->PictureDes2,$data->PictureDes3,$data->PictureDes4,$data->PictureDes5];
        $data->PictureDes = $this->_delnull($data->PictureDes);
        $data->CollectCount = DB::table('T_P_COLLECTION')->where(['Type'=>1, 'ItemID'=>$id])->count();
        if(($data->Member == 1 && $data->PayFlag != 1) || ($data->Member == 2 && $data->PayFlag != 1) ){
            if($data->UserID != $UserID){
                return view('errors.forbidden');
            }
        }
        if($data->ConnectPhone == ''){
            $data->ConnectPhone = $data->phonenumber;
        }
        $viewcount = DB::table('T_P_PROJECTINFO')->where('ProjectID',$id)->pluck('ViewCount');
        $viewcount += 1;
        DB::table('T_P_PROJECTINFO')->where('ProjectID',$id)->update(['ViewCount'=>$viewcount]);
        return view('proinfo.proinfo'.$type,compact('data'));
    }
}
