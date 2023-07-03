@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-8">
                <a href="{{route('products.create')}}" class="btn btn-sm btn-primary"  >
                    <i class="fa fa-plus"></i>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">name</th>
                            <th scope="col">prix</th>
                            <th scope="col">description</th>
                            <th scope="col">categorie</th>
                            <th scope="col"></th>
                            <th scope="col"></th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>

                                <td> <img  src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                        width="50"
                                        height="50"
                                        class="img-fluid rounded">
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}} DH</td>
                            <td>{{$product->description}} </td>
                            <td>{{$product->category->title}} </td>
                            <td class="d-flex flex-row justify-content-center align-items-center">
                                <a
                                href="{{ route("edit.product",$product->id) }}"
                                class="btn btn-sm btn-warning mr-4">
                                    <i class="fa fa-edit"></i>modifier
                                 </a>
                               </td>
                               <td> <form id="{{ $product->id }}" method="POST" action="{{ route("products.destroy",$product->id) }}" class="mr-4">
                                @csrf
                                @method("DELETE")
                                <button
                                onclick="event.preventDefault();
                                   if(confirm('Do you really want to delete {{ $product->name  }} ?'))
                                    document.getElementById({{ $product->id }}).submit();
                                "
                                class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>supprimer
                                </button>
                                </form>
                        </td>

                          </tr>

                       @endforeach

                        </tbody>
                      </table>
                      <hr>
                      <div class="justify-content-center d-flex">
                          {{ $products->links() }}
                      </div>


                </div>
            </div>

        </div>
@endsection
