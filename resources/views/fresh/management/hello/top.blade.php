@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">管理側TOP</div>
		<div class="card-body">
			<div>
        <a href="http://localhost:8000/jissyu14/" class="btn btn-danger">管理ユーザー</a>
				
				<!--<a href="http://localhost:8000/generaluser/" class="btn btn-primary">一般ユーザー数</a>!-->
				<a href="http://localhost:8000/generaluser2/" class="btn btn-primary">一般ユーザー</a>

        <!--<a href="http://localhost:8000/company/" class="btn btn-secondary">企業ユーザー数</a>!-->
				<a href="http://localhost:8000/company2/" class="btn btn-secondary">企業ユーザー</a>

        <!--<a href="http://localhost:8000/support/" class="btn btn-success">お問い合わせ（一般ユーザー）</a>!-->
				<a href="http://localhost:8000/support2/" class="btn btn-success">お問い合わせ（一般ユーザー）</a>

				<!--<a href="http://localhost:8000/companysupport/" class="btn btn-warning">お問い合わせ（企業ユーザー) </a>!-->
				<a href="http://localhost:8000/companysupport2/" class="btn btn-warning">お問い合わせ（企業ユーザー) </a>

        
			</div>

			<form method="post" action="fresh/management/hello/auth" method="post">
				@csrf
				<td><a href="/home"　class="btn btn-info">ログアウト</a></td>
			</form>
		</div>
	</div>
</div>
@endsection