@extends ('app')
@section('content')

<table>
    <tr>
        <th>Nombre</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
    </tr>
        @endforeach
</table>
    {!! $users->render() !!}
@endsection
