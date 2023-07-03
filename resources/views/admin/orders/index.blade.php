@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-8">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Client</th>
                            <th scope="col">Produit</th>
                            <th scope="col">Qauntité</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Total</th>
                            {{-- <th  scope="col">status</th> --}}

                            <th scope="col"></th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->user->name}} </td>
                            <td>{{$order->product_name}} </td>
                            <td>{{$order->quantity}} </td>
                            <td>{{$order->price}}DH</td>
                            <td>{{$order->total}}DH </td>
                            {{-- <td>
                                @if($order->status ==='1')
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif

                        </td> --}}
                        <td>


                            {{-- <form method="POST" action="{{ route("update.order",$order) }}">
                                @csrf
                                @method("PUT")

                                <button class="btn btn-sm btn-success">
                                    <i class="fa fa-check"></i>
                                </button>
                            </form> --}}
                                <form id="{{ $order->id }}" method="POST" action="{{ route("order.destroy",$order->id) }}">
                                @csrf
                                @method("DELETE")
                                <button
                                onclick="event.preventDefault();
                                   if(confirm('Do you really want to delete {{ $order->id  }} ?'))
                                    document.getElementById({{ $order->id }}).submit();
                                "
                                class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                    supprimer
                                </button>
                                </form>


                        </td>

                          </tr>

                       @endforeach

                        </tbody>
                      </table>
                      <hr>
            <div class="justify-content-center d-flex">
                {{ $orders->links() }}
            </div>


                </div>
            </div>

        </div>
@endsection
