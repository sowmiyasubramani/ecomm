//
<h1>user login</h1>

<form action="users" method="POST">
	@csrf
	<input type="text" name="user" placeholder="enter name"><br><br>
	<input type="password" name="password" placeholder="enter password"><br><br>
	<button type="submit">login</button><br><br>
</form>
//
//