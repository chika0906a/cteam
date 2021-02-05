<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\SupportRequest;
use App\Http\Requests\ResetmailRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon;

class TeamcController extends Controller
{
    public function getAuth(Request $request)
    {
        $msg = 'ログインしてください。';
        return view('fresh.company.login', ['msg' => $msg]);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])){
            return view('fresh.company.mypage');
        } else {
            return view('fresh.company.mypage');
        }
    }

    public function mypage() {
        return view('fresh.company.mypage');
    }

    public function new(Request $request)
    {
        return view('company.signup');
    }
    public function create2(Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,    
        ];
        DB::table('users')->insert($param);
        
        return view('signup.done');
    }

    public function datachoice()
    {
        return view('fresh.company.toukei.input');
    }

    public function dataview(Request $request)
    {
        //選択した条件を取得
        $ingredients_id = $request->ingredients_id;
        $area_name = $request->area_name;
        $people_ind = $request->people_ind;
        $gender = $request->gender;

        //性別未選択の場合freeをtrue化
        if($gender == 'noans'){
            $genderfree = true;
            $selectedgender = "選択しない";
        } elseif($gender == 'man') {
            $genderfree = false;
            $selectedgender = "男性";
        } else {
            $genderfree = false;
            $selectedgender = "女性";
        }

        //同居人数未選択の場合freeをtrue化
        switch($people_ind){
            case 0:
                $peoplefree = true;
                $selectedpeople = "選択しない";
                break;
            case 1:
                $peoplefree = false;
                $selectedpeople = "1人暮らし";
                break;
            case 2:
                $peoplefree = false;
                $selectedpeople = "2人暮らし";
                break;
            case 3:
                $peoplefree = false;
                $selectedpeople = "3人暮らし";
                break;
            case 4:
                $peoplefree = false;
                $selectedpeople = "4人暮らし";
                break;
        }

        //エリア未選択の場合
        if($area_name == "選択しない"){
            $areafree = true;
            $selectedarea = "選択しない";
        } else {
            $areafree = false;
            $selectedarea = $area_name;
        }

        //条件の年代が何歳から何歳までか計算
        $reqage1 = $request->agechoice;
        $reqage2 = $reqage1 + 10;
        //年代未選択の場合
        if($reqage1 == 0){
            $agefree = true;
            $selectedage = "選択しない";
        } else {
            $agefree = false;
            $selectedage = $reqage1 . "代";
        }
        //今日の日付を取得
        $age0 = Carbon::now();
        //条件の年代の誕生日を計算(age1～age2)
        $age1 = $age0->copy()->subYear($reqage1)->toDateString();
        $age2 = $age0->copy()->subYear($reqage2)->addDay()->toDateString();

        //shopping_historyテーブルからデータを取得
        //条件に合致するデータを購入日付を問わず抽出
        $item = DB::table('shopping_history')
                ->join('generalusers', 'shopping_history.mail', '=', 'generalusers.email')
                ->join('areas', 'generalusers.area_id', '=', 'areas.area_id')
                ->leftjoin('companies', 'shopping_history.company_id', '=', 'companies.company_id')
                ->where('shopping_history.ingredients_id', $ingredients_id);

        $item0 = $item->where('shopping_history.day', '>=', $request->startdate)
                      ->where('shopping_history.day', '<=', $request->enddate); 

        if($genderfree && $areafree && $agefree && $peoplefree){
            //全部未選択
            $item99 = $item0;
        } elseif($genderfree && $areafree && $agefree && $peoplefree==false){
            //同居人数だけ選択
            $item99 = $item0->where('generalusers.people_ind', $people_ind);
        } elseif($genderfree && $areafree && $agefree==false && $peoplefree){
            //年代だけ選択
            $item99 = $item0
                        ->where('generalusers.birthday', '>=', $age2)
                        ->where('generalusers.birthday', '<=', $age1);
        } elseif($genderfree && $areafree==false && $agefree && $peoplefree){
            //エリアだけ選択
            $item99 = $item0->where('areas.area_name', $area_name);
        } elseif($genderfree==false && $areafree && $agefree && $peoplefree){
            //性別だけ選択
            $item99 = $item0->where('generalusers.gender', $gender);
        } elseif($genderfree && $areafree && $agefree==false && $peoplefree==false){
            //同居人数・年代を選択
            $item99 = $item0
                        ->where('generalusers.people_ind', $people_ind)
                        ->where('generalusers.birthday', '>=', $age2)
                        ->where('generalusers.birthday', '<=', $age1);
        } elseif($genderfree && $areafree==false && $agefree && $peoplefree==false){
            //同居人数・エリアを選択
            $item99 = $item0
                        ->where('areas.area_name', $area_name)
                        ->where('generalusers.people_ind', $people_ind);
        } elseif($genderfree==false && $areafree && $agefree && $peoplefree==false){
            //同居人数・性別を選択
            $item99 = $item0
                        ->where('generalusers.gender', $gender)
                        ->where('generalusers.people_ind', $people_ind);
        } elseif($genderfree && $areafree==false && $agefree==false && $peoplefree){
            //年代・エリアを選択
            $item99 = $item0
                        ->where('areas.area_name', $area_name)
                        ->where('generalusers.birthday', '>=', $age2)
                        ->where('generalusers.birthday', '<=', $age1);
        } elseif($genderfree==false && $areafree && $agefree==false && $peoplefree){
            //年代・性別を選択
            $item99 = $item0
                        ->where('generalusers.gender', $gender)
                        ->where('generalusers.birthday', '>=', $age2)
                        ->where('generalusers.birthday', '<=', $age1);
        } elseif($genderfree==false && $areafree==false && $agefree && $peoplefree){
            //エリア・性別を選択
            $item99 = $item0
                        ->where('generalusers.area', $area)
                        ->where('generalusers.gender', $gender);
        } elseif($genderfree && $areafree==false && $agefree==false && $peoplefree==false){
            //性別だけ未選択
            $item99 = $history
                ->join('generalusers', 'shopping_history.mail', '=', 'generalusers.email')
                ->join('areas', 'generalusers.area_id', '=', 'areas.area_id')
                ->where('shopping_history.ingredients_id', $ingredients_id)
                ->where('areas.area_name', $area_name)
                ->where('generalusers.people_ind', $people_ind)
                ->where('generalusers.birthday', '>=', $age2)
                ->where('generalusers.birthday', '<=', $age1);
        } elseif($genderfree==false && $areafree && $agefree==false && $peoplefree==false){
            //エリアだけ未選択
            $item99 = $history
                ->join('generalusers', 'shopping_history.mail', '=', 'generalusers.email')
                ->join('areas', 'generalusers.area_id', '=', 'areas.area_id')
                ->where('shopping_history.ingredients_id', $ingredients_id)
                ->where('generalusers.gender', $gender)
                ->where('generalusers.people_ind', $people_ind)
                ->where('generalusers.birthday', '>=', $age2)
                ->where('generalusers.birthday', '<=', $age1);
        } elseif($genserfree==false && $areafree==false && $agefree && $peoplefree==false){
            //年代だけ未選択
            $item99 = $history
                ->join('generalusers', 'shopping_history.mail', '=', 'generalusers.email')
                ->join('areas', 'generalusers.area_id', '=', 'areas.area_id')
                ->where('shopping_history.ingredients_id', $ingredients_id)
                ->where('areas.area_name', $area_name)
                ->where('generalusers.people_ind', $people_ind)
                ->where('generalusers.gender', $gender);
        } elseif($genserfree==false && $areafree==false && $agefree==false && $peoplefree){
            //同居人数だけ未選択
            $item99 = $history
                ->join('generalusers', 'shopping_history.mail', '=', 'generalusers.email')
                ->join('areas', 'generalusers.area_id', '=', 'areas.area_id')
                ->where('shopping_history.ingredients_id', $ingredients_id)
                ->where('areas.area_name', $area_name)
                ->where('generalusers.gender', $gender)
                ->where('generalusers.birthday', '>=', $age2)
                ->where('generalusers.birthday', '<=', $age1);
        } else {
            //全部選択した場合
            $item99 = $history
                    ->join('generalusers', 'shopping_history.mail', '=', 'generalusers.email')
                    ->join('areas', 'generalusers.area_id', '=', 'areas.area_id')
                    ->where('shopping_history.ingredients_id', $ingredients_id)
                    ->where('areas.area_name', $area_name)
                    ->where('generalusers.people_ind', $people_ind)
                    ->where('generalusers.gender', $gender)
                    ->where('generalusers.birthday', '>=', $age2)
                    ->where('generalusers.birthday', '<=', $age1);
        }
        
        //店舗ごとに販売数量を求める
        $shopquantity = $item99
                        ->selectRaw('companies.company_name, sum(shopping_history.quantity) as total')
                        ->groupBy('shopping_history.company_id')
                        ->latest('total')
                        ->get();

        //食材IDから食材名を取得
        $param1 = ['ingredients_id' => $request->ingredients_id];
        $names = DB::select('SELECT ingredients_name FROM ingredients WHERE ingredients_id = :ingredients_id', $param1);

        //入力された選択肢を取得
        $selected = array('startdate' => $request->startdate,
                          'enddate' => $request->enddate,
                          'gender' => $selectedgender,
                          'people' => $selectedpeople,
                          'area' => $selectedarea,
                          'age' => $selectedage);

        return view('fresh.company.toukei.output', ['shopquantity' => $shopquantity, 'names' => $names, 'selected' => $selected]);
    }
    
    public function companysupport()
    {
        return view('fresh.company.support.input');
    }

    public function companysupportconfirm(SupportRequest $request)
    {
        $data = $request->all();
        return view('fresh.company.support.confirm', ['data' => $data]);
    }

    public function companysupportfinish(SupportRequest $request)
    {
        $data = $request->all();
        $day = now()->format('Y-m-d');
        $param = [
            'mail' => $request->company_mail,
            'support_mail' => $request->support_mail,
            'day' => $day,
            'support_text' => $request->support_text,
        ];
        DB::table('companysupports')->insert($param);
        return view('fresh.company.support.finish', ['data' => $data]);
    }

    //サービス情報作成画面
    public function infoadd(Request $request)
    {
        //$items = DB::select('select station_name from stations' );
        //return view('infoconfirm.input', ['items' => $items]);
        $data = [
            'msg'=>'',
        ];
        return view('fresh.company.info.input', $data);

    }

    public function infocreate(Request $request)
    {
        $param = [
            'mail' => $request->mail,
            'day' => $request->day,
            'info_title' => $request->info_title,
            'info_text' => $request->info_text,
            'station_id' => $request->station_id,
        ];
        DB::table('info')->insert($param);

        return view('fresh.infofinishinput');
    }

    public function image(Request $request, User $user) {

        // バリデーション省略
        $originalImg = $request->user_image;
      
          if($originalImg->isValid()) {
            $filePath = $originalImg->store('public');
            $user->image = str_replace('public/', '', $filePath);
            $user->save();
            return redirect("/user/{$user->id}")->with('user', $user);
        }
    }

    public function post(Request $request)
    {
        $rules = [
            'name' => 'required|max:10',
            'adress' => 'required|max:20',
            'login_id' => 'required|numeric|digits_between:8,16',
            'password' => 'required|between:8,16',
        ];
        $messages = [
            'name.required' => '名前は必ず入力して下さい。',
            'name.max' => '名前は10文字以内で入力して下さい。',
            'adress.required'  => '住所は必ず入力して下さい。',
            'adress.max'  => '住所は20文字以内で入力して下さい。',
            'login_id.required' => 'ログインIDは必ず入力して下さい。',
            'login_id.numeric' => 'ログインIDは数字で入力して下さい。',
            'login_id.digits_between' => 'ログインIDは8文字以上16文字以内で入力して下さい。',
            'password.required' => 'パスワードは必ず入力して下さい。',
            'password.between' => 'パスワードは8文字以上16文字以内で入力して下さい。',
        ];
        $validator = Validator::make($request->all(),$rules,$message);
        if ($validator->fails()) {
            return redirect('fresh/infoconfirm')
                ->withErrors($validator)
                ->withInput();
        }

        //全データの取得
        $data = $request->all();

        return view('fresh.company.infoconfirm.output', ['data' => $data]);
    }

    //お知らせ送信履歴のメソッド部分

    public function infohistory(Request $request)
    {

        //企業マイページにお知らせ送信履歴を表示するSQL文
        $param = ['company_mail' => $request->company_mail];
        $items = DB::select('SELECT DISTINCT name, info_title, info_text, day
            FROM info, companies, generalusers
                WHERE info.mail = companies.company_mail AND
                info.station_id = generalusers .station_id AND 
                companies.company_mail = :company_mail', $param);
                $param = ['mail' => $request->session()->get('usermail')];

        return view('fresh.company.infohistory', ['items' => $items]);

        $data = [
            'msg'=>'必要事項を記入してください。',
        ];
        return view('fresh.company.infohistory', $data);
    }

    public function infohistorypost(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'mail'=>$request->mail,
            'age'=>$request->age
        ];
        return view('fresh.company.infohistoryoutput', ['data'=>$data]);
    }
}
