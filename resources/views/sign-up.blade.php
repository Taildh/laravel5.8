<h1>Dang ky Member</h1>
@if(!empty($successMsg))
  <div class="alert alert-success"> {{ $successMsg }}</div>
@endif
<form action="{{route('sign-up')}}" method="post">
	@csrf
	Name: 
	<br>
	<input type="text" name="name">
	<br>
	Email:
	<br>
	<input type="text" name="email">
	<br>
	Password: 
	<br>
	<input type="password" name="password">
	<br>
	<input type="submit">
</form>