

@extends('layouts.jissyu4')

@section('title', '')
@section('menu_title')
@endsection
<form action="" method="post">

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">マイページ編集 </FONT>';
?><p>
@endsection

@section('content1')
<div class="disp_img">
  <img src='../images/base.png'/>
</div>
@endsection

@section('content2')
<body>
    ニックネーム　<input type="text" name='nickname'style="width:200px; height:30px";  value=""placeholder="ニックネーム">
@endsection

@section('content3')
<input type="text" name="area_id"style="width:200px; height:30px";  value=""placeholder="ニックネーム">
<form action="#">
    
        <tr>
            <th>地域</th>
            <td>
                <input select name="area_id" onchange="createChildOptions(this.form)" style="width:80px;height:30px">
                    <option value="">選択して</option>
                    <option value="1">北海道</option>
                    <option value="2">青森</option>
                    <option value="3">岩手</option>
                </select>県
            </td>
        </tr>
        <tr>
            <th></th>
            <td><!--表示位置--><div id="childS"></div></td>
        </tr>
    </table>
    
</form>

<script type="text/javascript">
    /* 子ジャンル（selectC）用の配列 */
    var item = new Array();

        item[0] = new Array();
        item[0][0]="---------------------";

        /* Fruits */
        item[1] = new Array();
        item[1][0]="選択して";
        item[1][1]="函館";
        item[1][2]="札幌";
        item[1][3]="小樽";
        item[1][4]="室蘭";
        item[1][5]="旭川";
        item[1][6]="釧路";
        item[1][7]="帯広";
        item[1][8]="北見";
        item[1][9]="夕張";

        /* Vegitables */
        item[2]= new Array();
        item[2][0]="選択して";
        item[2][1]="青森";
        item[2][2]="弘前地";
        item[2][3]="八戸";

        /* Drinks */
        item[3] = new Array();
        item[3][0]="選択して";
        item[3][1] = "盛岡";
        item[3][2] = "宮古";
        item[3][3] = "北上";
        item[3][4] = "滝沢";
        item[3][5] = "釜石";

    /* 子ジャンルのID名 */
    var idName="childS";

    /* 親ジャンルが変更されたら、子ジャンルを生成 */
    function createChildOptions(frmObj) {
        /* 親ジャンルを変数pObjに格納 */
        var pObj=frmObj.elements["parentS"].options;
        /* 親ジャンルのoption数 */
        var pObjLen=pObj.length;
        var htm="<select name='childS' style='width:80px;height:30px'>";
        for(i=0; i<pObjLen; i++ ) {
            /* 親ジャンルの選択値を取得 */
            if(pObj[i].selected>0){
                var itemLen=item[i].length;
                for(j=0; j<itemLen; j++){
                    htm+="<option value='"+j+"'>"+item[i][j]+"<\/option>";
                }
            }
        }
        htm+="<\/select>";
        /* HTML出力 */
        document.getElementById(idName).innerHTML=htm;
    }

    /* 選択されている値をアラート表示 */
    function chkSelect(frmObj) {
        var s="";
        var idxP=frmObj.elements['parentS'].selectedIndex;
        var idxC=frmObj.elements['childS'].selectedIndex;
        if(idxP>0){
            s+="親ジャンルの選択肢："+frmObj.elements['parentS'][idxP].text+"\n";
            if(idxC > 0){
                s+="子ジャンルの選択肢："+frmObj.elements['childS'][idxC].text+"\n";
            }else{
                s+="子ジャンルが選択されていません\n";
            }
        }else{
            s+="親ジャンルが選択されていません\n";
        }
        alert(s);
    }

    /* onLoad時にプルダウンを初期化 */
    function init(){
        htm ="<select name='childS' style='width:80px;height:30px'>";
        htm+="<option value=''>"+item[0][0]+"<\/option>";
        htm+="<\/select>";
        /* HTML出力 */
        document.getElementById("childS").innerHTML=htm;
    }

    /* ページ読み込み完了時に、プルダウン初期化を実行 */
    window.onload=init;
</script>
@endsection

@section('content4')
メールアドレス　<input type="text"name="mail" style="width:200px; height:30px";  value=""placeholder="メールアドレス"><br>
@endsection

@section('content5')
ニックネーム　<input type="text" name='station_id'style="width:200px; height:30px";  value=""placeholder="ニックネーム">
最寄り駅<select name="example"style="width:100px; height:30px">
　　　　　<option value="県" 
           selected>複数選択可</option>
         <option value="反町駅">反町駅</option>
         <option value="神奈川駅">神奈川駅</option>
         <option value="神奈川駅">横浜駅</option>
         <option value="神奈川駅">選択しない</option>
         </select>
</body>
@endsection

@section('content6')

<body>
    <ul>
      <input type="radio" name="people_ind">一人暮らし
      <input type="radio" name="people_ind">夫婦・カップル
      <input type="radio" name="people_ind">選択しない
      
    </ul>
</body>
@endsection

@section('content7')
ニックネーム　<input type="text" name='people_ind'style="width:200px; height:30px";  value=""placeholder="ニックネーム">
子供の人数<select name="example"style="width:100px; height:30px">
　　　　　<option value="県" 
           selected>選択して</option>
         <option value="反町駅">一人</option>
         <option value="神奈川駅">二人</option>
         <option value="神奈川駅">三人</option>
         <option value="神奈川駅">選択しない</option>
         </select>
</body>
@endsection

@section('content8')
<div class="disp_img">
  <img src='../images/文.png'/>
</div>
@endsection

@section('content9')
<input type="submit" value="決定">
@endsection
</form>
@section('content10')
<button type="button" onclick="history.back()">戻る</button>

@endsection



 
