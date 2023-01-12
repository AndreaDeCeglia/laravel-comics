@extends('layouts.app')

@section('main')
    <div class="comics-section">
        <div class="container py-5">
            <div class="d-flex flex-wrap">
                @foreach ($comics as $elem)
                    <div class="card-container d-flex flex-column">
                        <div>
                            <img class="image-comic" src="{{ $elem['thumb'] }}" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            {{ $elem['title'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div> 
@endsection