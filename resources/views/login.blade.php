<h1>Login</h1>
<form method="post" action="{{ route('login')}}">
	@csrf
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