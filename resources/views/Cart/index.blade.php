@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Imae</th>
                            <th scope="col">Titre</th>
                            <th scope="col">prix</th>
                            <th scope="col">total</th>
                            <th scope="col">quantity</th>
                            <th scope="col"></th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>

                                <td> <img  src="{{ $item->associatedModel->image }}" alt="{{ $item->name }}"
                                        width="50"
                                        height="50"
                                        class="img-fluid rounded">
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}} DH</td>
                            <td>{{$item->price * $item->quantity }} DH</td>

                            <td>
                                <form  class="d-flex flex-row justify-content-center align-items-center" action="{{ route("update.cart",$item->id) }}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                      <input type="number"
                                      value="{{$item->quantity}}"
                                      name="quantity" id="" class="form-control"
                                      placeholder="" aria-describedby="helpId"
                                      min="1">

                                    </div>


                                <div class="form-group px-3">

                                    <button type="submit" name="" id="" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit-cart"></i>
                                           modifier
                                    </button>

                                </div>
                            </form>
                            </td>
                            <td>


                                    <form  class="d-flex flex-row justify-content-center align-items-center" action="{{ route("remove.cart",$item->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")


                                    <div class="form-group">

                                          <button type="submit" name="" id="" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                            supprimer
                                        </button>

                                    </div>
                                </form>

                            </td>

                          </tr>

                       @endforeach
                    <tr class="text-dark font-weight-bold">
                        <td colspan="3" class="border border-succes">Total</td>
                        <td colspan="3" class="border border-success">
                            {{ Cart::getSubtotal()}}DH
                        </td>
                    </tr>
                        </tbody>
                      </table>
                      @if(Cart::getSubtotal() > 0)
                      <div class="form-group">
                        <a href="{{ route("add.Order")}}" class="btn btn-success">
                             Comander maintenant {{ Cart::getSubtotal()}}DH
                        </a>
                      </div>
                      @endif
                </div>

            </div>
        </div>
@endsection
