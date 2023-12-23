@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <section class="container">
            <div class="row">
                @foreach ($movie as $item)
                    <div class="col-12 col-md-4 col-lg-3 my-3 ">
                        <div class="card">
                            <img src="{{ $item->image }}" alt="">
                            <div class="card-body">
                                <h2 class="card-title">{{ $item->title }}</h2>
                                <a href="" class="btn btn-danger ">Vedi le specifiche</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>



    @endsection
