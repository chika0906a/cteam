@extends('layouts.area')

@section('title', '')
@section('menu_title')
@endsection

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white"> 範囲選択画面 </FONT>';
?><p>
   <form action="/fresh/areachoice" method="post">
       @csrf
        <select name="ingredients_id">
            <option value="統計データを表示する食材" selected>🔍統計データを表示する食材</option>
            <option value="I0001">にんじん</option>
            <option value="I0002">じゃがいも</option>
            <option value="I0003">たまねぎ</option>
            <option value="I0004">大根</option>
            <option value="I0005">ほうれん草</option>
            <option value="I0006">鶏肉</option>
            <option value="I0007">牛肉</option>
            <option value="I0008">豚肉</option>
            <option value="I0009">ブリ</option>
            <option value="I0010">サケ</option>
            <option value="I0011">カレイ</option>
            <option value="I0012">牛乳</option>
            <option value="I0013">チーズ</option>
            <option value="I0014">バター</option>
            <option value="I0015">生クリーム</option>
            <option value="I0016">昆布</option>
            <option value="I0017">味噌</option>
            <option value="I0018">マヨネーズ</option>
            <option value="I0019">卵</option>
            <option value="I0020">豆腐</option>
            <option value="I0021">カレールー</option>
            <option value="I0022">醤油</option>
        </select>
        <div class="disp_img">
        <img src='../images/日付.png'/>
        </div>
        <input type="date" name="startdate"
            value="2020-11-01"
            min="2020-01-01" max="2025-12-31">
        <label for="start">から</label>
        <input type="date" name="enddate"
            value="2020-11-01"
            min="2020-01-01" max="2025-12-31">
        <label for="start">まで</label>
        <div class="disp_img">
        <img src='../images/性別.png'/>
        </div>
            <ul>
            <input type="radio" value="man" name="gender">男性
            <input type="radio" value="woman" name="gender">女性
            <input type="radio" value="noans" name="gender">選択しない
            </ul>
        <p></p><p></p>
        <div class="disp_img">
        <img src='../images/同居人数.png'/>
        </div>
            <ul>
            <input type="radio" value="1" name="people_ind">1人暮らし
            <input type="radio" value="2" name="people_ind">2人暮らし
            <input type="radio" value="3" name="people_ind">3人暮らし
            <input type="radio" value="4" name="people_ind">4人暮らし
            <br><p>
            <input type="radio" value="0" name="people_ind">選択しない
            </ul>
        <div class="disp_img">
        <img src='../images/地域.png'/>
        </div>
            <h5>選択しない場合は「選択しない」を入力してください</h5>
            <!--<ul><input type="checkbox" value="noarea" name="area_name">選択しない</ul>
            <ul>
                <select name="parentS" onchange="createChildOptions(this.form)" style="width:80px;height:30px">
                <option value="">都道府県</option>
                <option value="tokyo">東京都</option>
                <option value="kanagawa">神奈川県</option>
                <option value="saitama">埼玉県</option>
                </select>
            </ul>
            -->
            <ul>
                <input type="text" name="area_name" placeholder="神奈川県横浜市南区"></td>
            </ul>
            
            <table>
            <div class="disp_img">
                <img src='../images/生年月日.png'>
            </div>
            <select name="agechoice">
                <option value="年代" selected>🔍年代を選択</option>
                <option value="0">選択しない</option>
                <option value="10">10代</option>
                <option value="20">20代</option>
                <option value="30">30代</option>
                <option value="40">40代</option>
                <option value="50">50代</option>
                <option value="60">60代</option>
            </select>
        <br>
        <br>
        <input type="submit" value="抽出">
    </form>
    <br>
    <a href="/fresh/companymypage">マイページに戻る</a>
@endsection

@section('footer')
@endsection

 
