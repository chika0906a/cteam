@extends('layouts.area')

@section('title', '')
@section('menu_title')
@endsection

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white"> 範囲選択画面 </FONT>';
?><p>
   <form action="/fresh/company/dataview" method="post">
       @csrf
        <select name="ingredients_id">
            <option value="統計データを表示する食材" selected>🔍統計データを表示する食材</option>
            <?php
            foreach($ingredients as $item){
                print('<option value="' . $item->ingredients_id . '">' . $item->ingredients_name . '</option>');
            }
            ?>
        </select>
        <div class="disp_img">
        <img src='../../images/日付.png'/>
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
        <img src='../../images/性別.png'/>
        </div>
            <ul>
            <input type="radio" value="man" name="gender">男性
            <input type="radio" value="woman" name="gender">女性
            <input type="radio" value="noans" name="gender">選択しない
            </ul>
        <p></p><p></p>
        <div class="disp_img">
        <img src='../../images/同居人数.png'/>
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
        <img src='../../images/地域.png'/>
        </div>
            <select name="area_id">
            <option value="" selected>選択しない</option>
            <?php
            foreach($areas as $item){
                print('<option value="' . $item->area_id . '">' . $item->area_name . '</option>');
            }
            ?>
            </select>
            
            <table>
            <div class="disp_img">
                <img src='../../images/生年月日.png'>
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
    <a href="javascript:history.back()" class="pochitto_btn_blue" style=font-size:10pt;>戻る</a>

@endsection

@section('footer')
@endsection

 
