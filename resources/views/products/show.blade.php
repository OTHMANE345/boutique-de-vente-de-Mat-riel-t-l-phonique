@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">


                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" >
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text"><small class="text-muted">{{ $product->category->title }}</small></p>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text"><small class="text-muted">{{ $product->price }} DH</small></p>

                            </div>

                        </div>





                    </div>
                </div>
            </div>
            <div class="col-md-3">
        <form action="{{ route("add.cart",$product->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="" class="form-label">quantité</label>
              <input type="number" name="quantity" id="" class="form-control"
              placeholder="" aria-describedby="helpId"
              min="1">

            </div>


        <div class="form-group">

              <button type="submit" name="" id="" class="btn btn-block btn-primary">
                <i class="fa fa-shopping-cart"></i>
                ajouter au panier
            </button>

        </div>
    </form>
    </div>
    </div>
@endsection
