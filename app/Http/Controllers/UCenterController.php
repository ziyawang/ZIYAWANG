<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class UCenterController extends Controller
{
    public function index()
    {
        return view("ucenter.index");
    }

    public function helper()
    {
        return view("ucenter.helper");
    }

    public function publish()
    {
        return view("ucenter.publish");
    }

    public function pubPro($TypeID)
    {
        return view("publish.publish$TypeID");
    }

    public function mypro()
    {
        return view('ucenter.mypro');
    }

    public function myproinfo($type,$id){
        $type = sprintf("%02d", $type);
        $data = DB::table('T_P_PROJECTINFO')
        ->join('T_P_SPEC'.$type,'T_P_PROJECTINFO.ProjectID','=', 'T_P_SPEC'.$type.'.ProjectID')
        ->join('T_P_PROJECTTYPE', 'T_P_PROJECTINFO.TypeID', '=', 'T_P_PROJECTTYPE.TypeID')
        ->join("users", 'T_P_PROJECTINFO.UserID', '=', 'users.UserID')
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
        $data->ProjectNumber = 'FB' . sprintf("%05d", $data->ProjectID);
        $data->ProLabel = isset($data->ProLabel) ? explode(',', rtrim($data->ProLabel,',')) : '';
        $data->ProLabel = $this->_delnull($data->ProLabel);
        $data->PictureDes = [$data->PictureDes1,$data->PictureDes2,$data->PictureDes3,$data->PictureDes4,$data->PictureDes5];
        $data->PictureDes = $this->_delnull($data->PictureDes);
        $data->CollectCount = DB::table('T_P_COLLECTION')->where(['Type'=>1, 'ItemID'=>$id])->count();
        return view('proinfo.myproinfo'.$type,compact('data'));
    }

    public function mycoo()
    {
        return view('ucenter.mycoo');
    }

    public function rushlist()
    {
        return view('ucenter.rushlist');
    }

    public function confirm()
    {
        return view('ucenter.confirm');
    }

    public function reconfirm()
    {
        return view('ucenter.reconfirm');
    }

    public function myrush()
    {
        return view('ucenter.myrush');
    }

    public function mycollect()
    {
        return view('ucenter.mycollect');
    }

    public function safe()
    {
        return view('ucenter.safe');
    }

    public function resetpwd()
    {
        return view('ucenter.resetpwd');
    }

    public function redirect()
    {
        return view('ucenter.redirect');
    }    


    public function saveSession(Request $req)
    {
        session(['phonenumber'=>$req->phonenumber]);
        dd(session('phonenumber'));
    }

    public function _delnull($arr){
        foreach ($arr as $key => $value) {
            if($value == ''){
                unset($arr[$key]);
            }
        }
        return $arr;
    }

    public function member(){
        return view('member.member');
    }

    public function memberPay(Request $req){
        $memberid = $req->id;
        return view("member.memberpay",compact('memberid'));
    }

    public function memberDetail(){
        return view("member.memberdetail");
    }

    public function star(Request $request){
        $cookie = explode(';',($request->header()['cookie'][0]));
        foreach($cookie as $c){
            if(strpos($c,'phonenumber')){
                $arr = explode('=',$c);
                $phonenumber = $arr[1];
            }
        }
        if(!isset($phonenumber)){
            return view('login');
        }
        $UserID = DB::table('users')->where('phonenumber',$phonenumber)->pluck('userid');
        $star = ['1'=>$this->_starState($UserID,1),'2'=>$this->_starState($UserID,2),'3'=>$this->_starState($UserID,3),'4'=>$this->_starState($UserID,4),'5'=>$this->_starState($UserID,5)];

        return view('star.index',compact('star'));
    }

    public function starPay(Request $req){
        $starid = $req->id;
        return view("star.starpay",compact('starid'));
    }

    //三证认证
    public function sz(){
        return view("star.sz");
    }

    //承诺书认证
    public function cns(){
        return view("star.cns");
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
}
