@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
    <style>
        .hoper{
          transform:scale(1 , 1);
          box-shadow: 0, 0, 0, 0, #000;
          transition: .3s;
        }
        .hoper:hover {
          transform:scale(1.1 , 1.1);
          box-shadow: 0, 0, 10px, 10px, black;
          z-index: 2;
          transition: .3s;
        }
}
    </style>
    @foreach ($categories as $category)
        <div class="col-md-4 hoper">
            <a href="/blog?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0 bgtul">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0,0,0, 0.7)"> {{ $category->name }} </h5>
                        </div>
                </div>
             </a>
        </div>
    @endforeach


    </div>
</div>


@endsection
