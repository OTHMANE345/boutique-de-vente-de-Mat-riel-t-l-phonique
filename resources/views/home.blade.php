@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                   @foreach ($products as $product)
                   <div class="col-md-4 mb-2 shadow-sm">
                    <div class="card" style="width:18rem,height:100%">
                        <img class="img-fluid rounded" src="{{ asset($product->image) }}"
                                            alt="{{ $product->title }}" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name}}</h5>
                            <p class="card-text">{{ Str::limit($product->description,23)}}</p>
                            <p class="card-text"><small class="text-muted">{{ $product->price}} DH</small></p>
                            <a href="{{route("products.show",$product->id)}}
                                " class="btn btn-primary">
                                <i class="fas fa-chevron-right" ></i>
                                show more
                                </a>
                        </div>

                    </div>

                   </div>
                   @endforeach
                    </div>
                    <hr>
                    <div class="justify-content-center">
                        {{ $products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
