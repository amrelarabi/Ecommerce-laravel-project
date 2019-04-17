@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Users</h3>
                </div>
                <div class="panel-body">
                    @if($users->count() != 0)
                    <table class="table">
                        <thead>
                              <th>
                                    Name
                              </th>
                              <th>
                                    Email
                              </th>
                        
                        </thead>
                        <tbody>
                              @foreach($users as $user)
                                    <tr>
                                          <td>{{ $user->name }}</td>
                                          <td>{{ $user->email }}</td>
                                    </tr>
                              @endforeach
                        </tbody>
                    </table>
                    @else
                        No users to display 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
