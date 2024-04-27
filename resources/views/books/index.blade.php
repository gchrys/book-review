@extends('layouts.app')

@section('content')
<h1 class="mb-10 text-2xl">Books</h1>

<form></form>

<ul>
    @forelse ($books as $book)
        <li class="mb-4">
            <div class="book-item">
                <div class="flex flex-wrap items-center justify-between">
                <div class="w-full flex-grow sm:w-auto">
                    <a href="{{route('books.show',['book'=>$book->id])}}" class="book-title">{{$book->title}}</a>
                    <span class="book-author">{{$book->author}}</span>
                </div>
                <div>
                    <div class="book-rating">
                    {{$book->rating}}
                    </div>
                    <div class="book-review-count">
                    out of {{$book->review_count}} reviews
                    </div>
                </div>
                </div>
            </div>
        </li>
    @empty
        
    @endforelse
</ul>
@endsection