@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    @foreach($users as $user)
                    {{$user->name}}-{{$user->email}}
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection