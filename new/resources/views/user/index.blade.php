@extends('layouts.app')

@section('content')
    <div class="container">
       <h5>Users</h5>
       <table class="table table-bordered">
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>
                    @can('edit user')
                        <a href="{{ route('user.edit',['user' => $user->id]) }}">Edit</a>
                    @endcan
                </td>
            </tr>
        @endforeach
       </table>
    </div>
@endsection
