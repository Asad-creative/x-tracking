@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Projects</div>

                <div class="card-body">

                    <table class="table table-hover">

                    <thead>

                      <th>Id</th>

                      <th>Name</th>

                      <th>Created At</th>

                    </thead>

                    <tbody>

                        @foreach($projects as $key=>$project)


                        <tr>

                          <td>{{$project['id']}} </td>

                          <td>{{$project['name']}} </td>

                          <td>{{$project['created_at']}} </td>



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
