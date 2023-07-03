@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-9">
                <div class="card">
                    <h3 class="card-tiltle">Ajouter une nouvelle catégorie.</h3>
                    <div class="card-body">
                        {{-- {{ route('store.product') }} --}}
                    <form action="{{ route("store.category") }}" method="POST"   >
                    @csrf
                           <div class="form-group">
                            <input type="text"
                            name="title"
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
