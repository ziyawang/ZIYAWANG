<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use PDO;

class UserController extends Controller
{
    public function publish()
    {
        return view('ucenter.publish');
    }

    public function serInfo(Request $request,$id)
    {
		$cookie = explode(';',($request->header()['cookie'][0]));
        foreach($cookie as $c){
            if(strpos($c,'phonenumber')){
                $arr = explode('=',$c);
                $phonenumber = $arr[1];
            }
        }
		DB::setFetchMode(PDO::FETCH_ASSOC);
        $service = DB::table('T_U_SERVICEINFO')->where('T_U_SERVICEINFO.ServiceID',$id)->first();
        DB::setFetchMode(PDO::FETCH_CLASS);

        $type = explode(',', $service['ServiceType']);
        $type = DB::table('T_P_PROJECTTYPE')->whereIn('TypeID',$type)->lists('SerName');
        $conumber = DB::table('T_P_RUSHPROJECT')->where(['ServiceID' => $id, 'CooperateFlag' => 1])->count();
        $service['ServiceType'] = $type;
        $servicearea = explode(' ', $service['ServiceArea']);
        //收藏人数统计
        $CollectCount = DB::table('T_P_COLLECTION')->where(['Type'=>4, 'ItemID'=>$id])->count();
        $service['CollectCount'] = $CollectCount;

        $service['CollectFlag'] = 0;
        if(isset($phonenumber)){
        	$UserID = DB::table('users')->where('phonenumber',$phonenumber)->pluck('userid');
            $tmp = DB::table('T_P_COLLECTION')->where(['Type' => 4, 'ItemID' => $id, 'UserID' => $UserID])->get();
            if ($tmp) {
               $service['CollectFlag'] = 1;
            } else {
               $service['CollectFlag'] = 0;
            }
        }

        $service['showlevel'] = explode(',',$service['Level']);
        $UserID = DB::table('T_U_SERVICEINFO')->where('ServiceID',$id)->pluck('UserID');
        $star = ['1'=>$this->_starState($UserID,1),'2'=>$this->_starState($UserID,2),'3'=>$this->_starState($UserID,3),'4'=>$this->_starState($UserID,4),'5'=>$this->_starState($UserID,5)];
        $service['showlevelarr'] = $star;

		DB::setFetchMode(PDO::FETCH_ASSOC);
        $userinfo = DB::table('users')->where('userid',$UserID)->first();
		DB::setFetchMode(PDO::FETCH_ASSOC);

        $service['right'] = $userinfo['right'];
        $service['showright'] = json_decode($userinfo['showright'],true);
        $service['showrightios'] = [];
        $service['showrightarr'] = [];
        if($service['showright']){
            $arr = array_keys($service['showright']);
            if(count($service['showright']) == 0){
                $service['showright'] = json_decode("{}");
            }
            foreach ($service['showright'] as $key => $value) {
                $service['showrightarr'][] = [$key,$value];
            }
        }else{
            $service['showright'] = '';
        }

        $service['ServiceLevel'] = 'VIP1';
        $service['CoNumber'] = $conumber;
        $picture = DB::table('users')->where('userid',$service['UserID'])->pluck('UserPicture');
        $service['UserPicture'] = $picture;
        $service['ServiceNumber'] = 'FW' . sprintf("%05d", $service['ServiceID']);

        $service['PictureDes'] = [$service['ConfirmationP1'],$service['ConfirmationP2'],$service['ConfirmationP3']];
        $service['PictureDes'] = $this->_delnull($service['PictureDes']);

        $viewcount = DB::table('T_U_SERVICEINFO')->where('ServiceID',$id)->pluck('ViewCount');
        $viewcount += 1;
        DB::table('T_U_SERVICEINFO')->where('ServiceID',$id)->update(['ViewCount'=>$viewcount]);

        $service['starvideo'] = DB::table('T_U_STAR')->where(['ServiceID'=>$id, 'StarID'=>3, 'State'=>2])->pluck('Resource');
        $service['starvideo'] = $service['starvideo']? 'http://videos.ziyawang.com'.$service['starvideo']:'';
        $service['starcns'] = DB::table('T_U_STAR')->where(['ServiceID'=>$id, 'StarID'=>4, 'State'=>2])->pluck('Resource');
        $service['starcns'] = $service['starcns']? 'http://images.ziyawang.com'.$service['starcns']:'';
        $service['starsz'] = DB::table('T_U_STAR')->where(['ServiceID'=>$id, 'StarID'=>5, 'State'=>2])->pluck('Resource');
        $picarr = explode(',', $service['starsz']);
        $service['starsz'] = '';
        if($picarr[0] != ''){
            foreach ($picarr as $v) {
                $service['starsz'][] = 'http://images.ziyawang.com'.$v;
            }
        } else {
            $service['starsz'] = '';
        }

        $service['starsd'] = DB::table('T_U_STAR')->where(['ServiceID'=>$id, 'StarID'=>2, 'State'=>2])->pluck('Resource');
        $sdarr = explode(',', $service['starsd']);
        $service['starsd'] = '';
        if($sdarr[0] != ''){
            foreach ($sdarr as $v) {
                $service['starsd'][] = 'http://images.ziyawang.com'.$v;
            }
        } else {
            $service['starsd'] = '';
        }
        
        return view('serinfo2',compact('service'));
    }

    //获取星级认证状态
    protected function _starState($userid,$starid){
        $tmp = DB::table('T_U_STAR')->where(['UserID'=>$userid, 'StarID'=>$starid])->count();
        if($tmp > 0){
            $temp = DB::table('T_U_STAR')->where(['UserID'=>$userid, 'StarID'=>$starid])->orderBy('State','desc')->first();
            return $temp->State;
        } else {
            return 0;
        }
    }

    public function _delnull($arr){
        foreach ($arr as $key => $value) {
            if($value == ''){
                unset($arr[$key]);
            }
        }
        return $arr;
    }
}
