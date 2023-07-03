@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-9">
                <div class="card">
                    <h3 class="card-tiltle">Add new card</h3>
                    <div class="card-body">
                        {{-- {{ route('store.product') }} --}}
                    <form action='{{ route("update.category",$category->id)}}' method="POST" >
                    @csrf
                    @method("PUT")
                           <div class="form-group">
                            <input type="text"
                            name="title"
                            value="{{ $category->title }}"
                            placeholder="Title"
                            class="form-control">
                            </div>

                            <div class="form-group">
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
