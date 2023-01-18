@extends('layouts.app')
@section('content')
<br>
<h2 class="text-center"> LOGIN </h2>
<br>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/"><button type="button" class="btn btn-outline-warning">home</button></a>
</div>
<br>
<br>
<div class="row">
    <div class="col-md-6">
        <form method="post" action="{{ route('createInfo')}}">
            @csrf
            <div class="mb-3">
                <label for="address" class="form-label">name user</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">email user</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">password</label>
                <input type="text" class="form-control" name="password">
            </div>
           <button type="submit" class="btn btn-success">inter</button>
        </form>
    </div>
</div>
@endsection
