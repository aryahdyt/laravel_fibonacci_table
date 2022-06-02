@if(session('success'))
<div>
    <strong>{{ __('Success ') }}</strong>{{ session('success') }}
</div>
@endif
@if(session('error'))
<div>
    <strong>{{ __('error ') }}</strong>{{ session('error') }}
</div>
@endif
<hr>

<a href="{{ route('users.create') }}">Tambah</a>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>no</th>
            <th>Userame</th>
            <th>Password</th>
            <th>Created</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->created_at }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>