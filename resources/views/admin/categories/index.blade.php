@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-8">
                <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary"  >
                    <i class="fa fa-plus"></i>
                </a>
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">title</th>
                            <th scope="col"></th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                            <td>{{$category->title}}</td>

                            <td class="d-flex flex-row justify-content-center align-items-center">
                                {{-- <a
                                href="{{ route("edit.category",$category->id) }}"
                                class="btn btn-sm btn-warning mr-4">
                                    <i class="fa fa-edit"></i>edit
                                 </a> --}}
                                <form id="{{ $category->id }}" method="POST" action="{{ route("categories.destroy",$category->id) }}" class="mr-4">
                                @csrf
                                @method("DELETE")
                                <button
                                onclick="event.preventDefault();
                                   if(confirm('Do you really want to delete {{ $category->title  }} ?'))
                                    document.getElementById({{ $category->id }}).submit();
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
                          {{ $categories->links() }}
                      </div>

                </div>
            </div>

        </div>
@endsection
