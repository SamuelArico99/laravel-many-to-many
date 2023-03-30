@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                {{ $category->name }}
            </h1>
            <h6>
              Slug:  {{ $category->slug }}
            </h6>


            @if ($category->posts()->count() > 0)
            <h2>
                Articoli associati:  {{ $category->posts()->count() }}
            </h2>
            <ul>
                @foreach ($category->posts as $post)
                <li>
                    <a href="{{ route('admin.posts.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </li>
                @endforeach

            </ul>         
            @else
                <h3>
                    Nessun articolo associato
                </h3>

            @endif

            <a href="{{ route('admin.categories.index') }}" class="btn btn-success">
                Torna alle categorie
            </a>
        </div>
    </div>
@endsection