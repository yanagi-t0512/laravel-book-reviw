@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row justify-content-center">

    @foreach($reviews as $review)
    <div class="col-md-4">
        <div class="card mb50">
            <div class="card-body">

                @if(!@empty($review->image))
                    <div class="image-wrapper">
                        <img src="{{ asset('storage/images/'.$review->image) }}" alt="" class="book-image">
                    </div>
                @else
                    <div class="image-wrapper">
                        <img src="{{ asset('images/dummy.png') }}" alt="" class="book-image">
                    </div>
                @endif
                
                <h3 class="h3 book-title">{{ $review->title }}</h3>
                <p class="description">
                    {{ $review->body }}
                </p>
                <a href="{{ route('show', ['id' => $review->id ]) }}" class="btn btn-secondary detail-btn">詳細を読む</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{ $reviews->links() }}

@endsection
