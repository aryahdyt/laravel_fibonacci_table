{{-- <ul>
  <li>username : {{ $user->username }}</li>
  <li>password : {{ $user->password }}</li>
  <li>Created : {{ $user->created_at }}</li>
</ul> --}}

{{-- javascript button back --}} 
{{-- <button onclick="history.back()">back</button> --}}
<a href="{{ route('users.index') }}">list user</a>
<h1>edit User</h1>
<form action="{{ route('users.update', $user->id) }}" method="post">
@method('put') 
@csrf

  <label for="username">Username</label>
  <br>
  <input type="text" name="username" value="{{ $user->username }}">
  <br>
  <label for="password">Password</label>
  <br>
  <input type="text" name="password" value="">
  <br>
  <br>

  <button type="submit">submit</button>
</form>