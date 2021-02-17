<?php
//管理側のコントローラー
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Generaluser;
use App\Company;
use App\Companysupport;
use App\Support;

class ManagementController extends Controller
{
    //ログイン
    public function getAuth(Request $request)
   {
     $param =['message' => '管理者用ログイン画面'];
     return view('hello.auth', $param);
   }

   public function postAuth(Request $request)
   {
     $email = $request->email;
     $password = $request->password;
     if (Auth::attempt(['email' => $email,'password' => $password])) {
       $msg = 'ログインしました。(' . Auth::user()->name . ')';
       return view('hello.top', ['message' => $msg]);
     } else {
       $msg = 'ログインに失敗しました。';
     }
     //return view('hello.auth', ['message' => $msg]);
   }

   //トップページ
    public function top(Request $request) 
    {
    return view('fresh.management.hello.top');
    }

    //一般ユーザーのメソッド
    public function generaluserindex(Request $request)
    {
        $items = DB::select('SELECT id,name,email,password,gender,birthday,area_name,station_name,people_num FROM generalusers,areas,stations,people 
        WHERE generalusers.area_id = areas.area_id AND 
        generalusers.station_id = stations.station_id AND
        generalusers.people_ind = people.people_ind ORDER BY id');
        $param = ['input' => '','items' => $items];
        return view('generaluser.index', ['items' => $items]);
    }

    public function generaluserfind(Request $request)
    {
        $item = Generaluser::where('id',$request->input)->first();
        return view('generaluser.show', ['item' => $item]);
    }

    public function generalusershow(Request $request)
    {
        $item = Generaluser::where('id', $request->id)->first();
        return view('generaluser.show', ['item' => $item]);
    }

    public function generaluseradd(Request $request)
    {
        return view('generaluser.add');
    }

    public function generalusercreate(Request $request)
    {
        $this->validate($request, Generaluser::$rules);
        $generaluser = new Generaluser;
        $form = $request->all();
        unset($form['_token']);
        $generaluser->fill($form)->save();
        return redirect('/generaluser');
    }
    public function generaluseredit(Request $request)
    {

        $item = Generaluser::find($request->id);
        return view('generaluser.edit', ['item' => $item]);

    }

    public function generaluserupdate(Request $request)
    {
        $this->validate($request, Generaluser::$rules);
        $generaluser = Generaluser::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $generaluser->fill($form)->save();
        return redirect('/generaluser');

    }

    public function generaluserdel(Request $request)
    {
        //$item = Generaluser::where('id',$request->id)->first();
        //return view('generaluser.del', ['item' => $item]);
        $item = DB::table('generalusers')->where('id', $request->id)->first();
        return view('generaluser.del', ['item' => $item]);
    }

    public function generaluserremove(Request $request)
    {
        //Company::where('id',$request->id)->delete();
        //return redirect('/generaluser');
        DB::table('generalusers')->where('id', $request->id)->delete();
        return redirect('/generaluser');
    }



    //企業ユーザーのメソッド
    public function companyindex(Request $request)
    {
        $items = DB::select('SELECT company_id,company_name,company_mail,password,area_name FROM companies,areas 
        WHERE companies.area_id = areas.area_id ORDER BY company_id');

        $param = ['input' => '','items' => $items];

        return view('company.index', ['items' => $items]);
    }

    public function companyfind(Request $request)
    {
        $item = Company::where('company_id',$request->input)->first();
        return view('company.show', ['item' => $item]);
    }

    public function companyshow(Request $request)
    {
        $item = Company::where('company_id', $request->company_id)->first();
        return view('company.show', ['item' => $item]);
    }

    public function companyadd(Request $request)
    {
        return view('company.add');
    }

    public function companycreate(Request $request)
    {
        $this->validate($request, Company::$rules);
        $company = new Company;
        $form = $request->all();
        unset($form['_token']);
        $company->fill($form)->save();
        return redirect('/company');
    }
    public function companyedit(Request $request)
    {
        //$item = Company::where('company_id', $request->company_id)->first();
        //return view('company.edit', ['item' => $item]);

        $item = DB::table('companies')->where('company_id', $request->company_id)->first();
        return view('company.edit', ['item' => $item]);


    }

    public function companyupdate(Request $request)
    {
        //$this->validate($request, Company::$rules);
        //$company = Company::find('company_id',$request->company_id);
        //$form = $request->all();
        //unset($form['_token']);
        //$company->fill($form)->save();
        //return redirect('/company');

        $param = [
            'company_name' => $request->company_name,
            'company_mail' => $request->company_mail,
            'password' => $request->password,
            'area_id' => $request->area_id,
        ];
        DB::table('companies')->where('company_id', $request->company_id)->update($param);
        return redirect('/company');
    }

    public function companydel(Request $request)
    {
        $item = Company::where('company_id', $request->company_id)->first();
        return view('company.del', ['item' => $item]);
    }

    public function companyremove(Request $request)
    {
        Company::where('company_id',$request->company_id)->delete();
        return redirect('/company');
    }


    //お問い合わせ(企業ユーザー)のメソッド
    public function companysupportindex(Request $request)
    {
        $items = Companysupport::all();
        $param = ['input' => '','items' => $items];
        return view('companysupport.index', $param);
    }

    public function companysupportfind(Request $request)
    {
        $item = Companysupport::where('support_num',$request->input)->first();
        return view('companysupport.show', ['item' => $item]);
    }

    public function companysupportshow(Request $request)
    {
        $item = Companysupport::where('support_num', $request->support_num)->first();
        return view('companysupport.show', ['item' => $item]);
    }

    public function companysupportadd(Request $request)
    {
        return view('companysupport.add');
    }

    public function companysupportcreate(Request $request)
    {
        $this->validate($request, Companysupport::$rules);
        $companysupport = new Companysupport;
        $form = $request->all();
        unset($form['_token']);
        $companysupport->fill($form)->save();
        return redirect('/companysupport');
    }
    public function companysupportedit(Request $request)
    {
        $item = Companysupport::find($request->support_num);
        return view('companysupport.edit', ['item' => $item]);
    }

    public function companysupportupdate(Request $request)
    {
        $this->validate($request, Companysupport::$rules);
        $companysupport = Companysupport::find($request->support_num);
        $form = $request->all();
        unset($form['_token']);
        $companysupport->fill($form)->save();
        return redirect('/companysupport');
    }

    public function companysupportdel(Request $request)
    {
        $item = Companysupport::where('support_num', $request->support_num)->first();
        return view('companysupport.del', ['item' => $item]);
    }

    public function companysupportremove(Request $request)
    {
        Companysupport::where('support_num', $request->support_num)->delete();
        return redirect('/companysupport');
    }

    //お問い合わせ(一般ユーザー)のメソッド
    public function supportindex(Request $request)
    {
        $items = Support::all();
        $param = ['input' => '','items' => $items];
        return view('support.index', $param);
    }

    public function supportfind(Request $request)
    {
        $item = Support::where('support_num',$request->input)->first();
        return view('support.show', ['item' => $item]);
    }

    public function supportshow(Request $request)
    {
        $item = Support::where('support_num', $request->support_num)->first();
        return view('support.show', ['item' => $item]);
    }

    public function supportadd(Request $request)
    {
        return view('support.add');
    }

    public function supportcreate(Request $request)
    {
        $this->validate($request, Support::$rules);
        $support = new Support;
        $form = $request->all();
        unset($form['_token']);
        $support->fill($form)->save();
        return redirect('/support');
    }
    public function supportedit(Request $request)
    {
        $item = Support::find($request->support_num);
        return view('support.edit', ['item' => $item]);
    }

    public function supportupdate(Request $request)
    {
        $this->validate($request, Support::$rules);
        $support = Support::find($request->support_num);
        $form = $request->all();
        unset($form['_token']);
        $support->fill($form)->save();
        return redirect('/support');
    }

    public function supportdel(Request $request)
    {
        $item = Support::where('support_num', $request->support_num)->first();
        return view('support.del', ['item' => $item]);
    }

    public function supportremove(Request $request)
    {

        $item = Support::where('support_num', $request->support_num)->delete();
        return redirect('/support');
    }
}
