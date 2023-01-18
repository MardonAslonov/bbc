@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center">This table of users</h2>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{'userCreate'}}"><button type="button" class="btn btn-success">create</button></a>
    {{-- <a href="/1bet"><button type="button" class="btn btn-success">home</button></a> --}}
</div>
<br>
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>T/R</th>
                <th class="col-md-2">name user</th>
                <th>email user</th>
                <th>password</th>
                {{-- <th class="col-md-1">Action</th> --}}
            </tr>
        </thead>
        <body>
            @foreach ($users as $user)
            <tr>
                <td>{{ ($loop->index + 1) }}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                {{-- <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('edit',$mard->id)}}"><button class="btn btn-primary me-md-2" type="button">update</button></a>
                        <a href="{{route('delete',$mard->id)}}"><button class="btn btn-danger" type="button">delete</button></a>
                    </div>
                </td> --}}
            </tr>
            @endforeach
        </body>
    </table>
{{-- {{ $users-> links()}} --}}
@endsection
