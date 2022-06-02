<a href="{{ route('users.index') }}">list user</a>
<h1>Tambah User</h1>
<form action="{{ route('users.store') }}" method="post">
@method('POST') 
@csrf

  <label for="username">Username</label>
  <br>
  <input type="text" name="username">
  <br>
  <label for="password">Password</label>
  <br>
  <input type="text" name="password">
  <br>
  <br>

  <button type="submit">submit</button>
</form>