@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <table class="table table-hover">

                    <thead>

                      <th>Username</th>

                      <th>Email</th>

                      <th>Created At</th>

                    </thead>

                    <tbody>

@foreach($users as $key=>$user)


                        <tr>

                          <td>{{$user['name']}} </td>

                          <td>{{$user['email']}} </td>

                          <td>{{$user['created_at']}} </td>



                        </tr>
@endforeach
                    </tbody>

                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
