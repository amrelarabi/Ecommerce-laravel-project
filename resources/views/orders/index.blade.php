@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Orders</h3>
                </div>

                <div class="panel-body">
                    @if($orders->count() != 0)

                    <table class="table">
                        <thead>
                              <th>
                                    id
                              </th>
                              <th>
                                    product
                              </th>
                              <th>
                                    user
                              </th>
                              <th>
                                    amount
                              </th>
                              <th>
                                    date
                              </th>
                        </thead>
                        <tbody>
                         @foreach($orders as $order)
                         <tr>
                            <td> {{  $order->id }} </td>
                            <td> {{  $order->product->name }} </td>
                            <td> {{  $order->user->name }} </td>
                            <td> {{  $order->amount }} </td>
                            <td> {{  $order->created_at }} </td>
                         </tr>
                         @endforeach
                        </tbody>
                    </table>
                    @else
                        No orders to display 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
