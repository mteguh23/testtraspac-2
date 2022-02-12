@extends("layout.app")
@section("main")
<h3>Sort Text</h3>
<form method="post" action="/sort/process">
	@csrf
	<input type="text" name="paragraph" placeholder="Input Paragraph">
	<button>Sort</button>
</form>
<hr>
@endsection