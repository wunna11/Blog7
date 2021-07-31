@extends('layouts.app')
@section('content')
    <div class="container">
        @if (Session('info'))
            <div class="alert alert-info">{{ Session('info') }}</div>
        @endif

        {{-- pagination --}}
        {{ $articles->links() }}
        @foreach ($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <div class="card-subtitle mb-2 text-muted small">
                        {{ $article->created_at->diffForHumans() }}
                    </div>
                    <p class="text-content">{{ $article->body }}</p>
                    <a class="card-link"
                     href="{{ route('articleDetail', $article->id) }}">
                     View Detail &raquo;
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection