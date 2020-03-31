@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                   
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                      <tr>
                        <th scope="row">1</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                        <td>
                        <a href="{{route('admin.users.edit',$user->id)}}"> <button type="button" class="btn btn-success">Success</button></a>
                        <a href="{{route('admin.users.destroy',$user->id)}}">    <button type="button" class="btn btn-danger">Danger</button></a>  
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection