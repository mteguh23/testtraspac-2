@extends("layout.app")
@section("main")
<h3>Count Text</h3>
<form method="post" action="/count/process">
	@csrf
	<input type="text" name="count" placeholder="Input Text">
	<button>Count</button>
</form>
<hr>
@endsection