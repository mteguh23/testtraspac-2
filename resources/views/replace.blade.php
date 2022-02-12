@extends("layout.app")
@section("main")
<h3>Replace Text</h3>
<form method="post" action="/replace/process">
	@csrf
	<input type="text" name="text" placeholder="Input Text">
	<input type="text" name="replace" placeholder="Replace With">
	<button>Replace</button>
</form>
<hr>
@endsection