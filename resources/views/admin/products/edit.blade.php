@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-tiltle">modifier produit</h3>
                    <div class="card-body">
                        {{-- {{ route('store.product') }} --}}
                    <form action="{{ route("update.product",$product->id)}}" method="POST"  enctype="multipart/form-data" >
                    @csrf
                    @method("PUT")
                           <div class="form-group my-3">
                            <input type="text"
                            name="name"
                            value="{{ $product->name }}"
                            placeholder="Title"
                            class="form-control">
                            </div>
                            <div class="form-group my-3">
                            <textarea type="description"
                            name="description"
                            placeholder="description"
                            class="form-control" cols="30" rows="10">
                            {{ $product->description }}
                            </textarea>
                            </div>
                            <div class="form-group my-3">
                            <input type="number"
                            name="price"
                            value="{{ $product->price }}"
                            placeholder="prix"
                            class="form-control">
                            </div>
                            <div class="form-group my-3">
                                <img src="{{ asset($product->image) }}"
                                width="200"
                                height="200"
                                alt="{{ $product->name }}">
                            </div>
                            <div class="form-group my-3">
                            <select name="category_id"
                             class="form-control">
                            <option value="" selected disabled>choisir un categorie</option>
                            @foreach($categories as $category)
                            <option {{ $product->category_id === $category->id ? "selected" : "" }} value="{{ $category->id}}">
                               {{$category->title}}
                            </option>
                            @endforeach
                            </select>
                            </div>
                            <div class="form-group my-3">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

                </div>

            </div>
        </div>
@endsection
