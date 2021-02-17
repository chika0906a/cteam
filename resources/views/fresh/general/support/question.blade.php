@extends('layouts.freshgeneral')

@section('title', 'お問い合わせフォーム')
@section('menu_title')
@endsection

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">お問い合わせ </FONT>';
?><p>
@endsection


@section('content1')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="disp_img">
<div style="position: relative; display:inline-block;">
<img src="../../images/blackbase.png" width="350" height="310"> 
<div style="position: absolute; top: 0; left: 0; max-width: 100%; max-height: 100%; padding: 30px; text-align: left;">


<form action="/fresh/general/support" method="post">
@csrf
	<div class="element_wrap">
		<label>メールアドレスを入力</label>
		<input type="text" name="mail" value="">
	</div>

	<div class="element_wrap">
		<label>連絡用メールアドレスを入力</label>
		<input type="text" name="support_mail" value="">
	</div>

  <div class="element_wrap">
  <label>お問い合わせ内容を入力</label><br>
  <input type="text" style="width:300px;height:30px;" name="support_text" >
	<input type="submit" value="送信">
	</div>
	</div>

</form>

<div class="disp_img">
 <button type="button" onclick="history.back()">マイページに戻る</button>

 
</div>
 </div>
</div>
@endsection

@section('content2')


@endsection

@section('content3')




@endsection


@section('footer')
@endsection
