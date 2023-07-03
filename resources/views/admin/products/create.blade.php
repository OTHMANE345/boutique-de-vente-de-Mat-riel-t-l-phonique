@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-tiltle ">   ajouter un nouveau produit</h3>
                    <div class="card-body">
                        {{-- {{ route('store.product') }} --}}
                    <form action="{{ route("store.product") }}" method="POST"  enctype="multipart/form-data" >
                    @csrf
                           <div class="form-group my-3" >
                            <input type="text"
                            name="name"
                            placeholder="Title"
                            class="form-control ">
                            </div>
                            <div class="form-group my-3">
                            <input type="description"
                            name="description"
                            placeholder="description"
                            class="form-control" cols="30" rows="10">
                            </div>
                            <div class="form-group my-3">
                            <input type="number"
                            name="price"
                            placeholder="prix"
                            class="form-control">
                            </div>
                            <div class="form-group my-3">
                            <input type="file"
                            name="image"
                            class="form-control">
                            </div>
                            <div class="form-group my-3">
                            <select name="category_id"
                             class="form-control">
                            <option value="">choisir un categorie</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}">
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
