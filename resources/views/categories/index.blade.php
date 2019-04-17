@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                      <h3>Categories

                      <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm pull-right">New Categories</a>

                      </h3>
                </div>
                <div class="panel-body">
                    @if($categories->count() != 0)

                    <table class="table">
                        <thead>
                              <th>
                                    Name
                              </th>
                              <th>
                                    Description
                              </th>
                              <th>
                                    Edit
                              </th>
                              <th>
                                    Delete
                              </th>
                        </thead>
                        <tbody>
                              @foreach($categories as $category)
                                    <tr>
                                          <td>{{ $category->name }}</td>
                                          <td>{{ $category->description }}</td>
                                          <td>
                                                <a href="{{ route('categories.edit', ['id' => $category->id ]) }}" class="btn btn-default btn-xs">Edit</a>
                                          </td>
                                          <td>
                                                <form action="{{ route('categories.destroy', ['id' => $category->id ]) }}" method="post">
                                                      {{ csrf_field() }}
                                                      {{ method_field('DELETE') }}
                                                      <button class="btn btn-xs btn-danger">Delete</button>
                                                </form>
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>
                    </table>
                    @else
                        No categories to display 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
