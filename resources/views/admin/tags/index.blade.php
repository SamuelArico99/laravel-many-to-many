@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                Tutti i Tags
            </h1>
            <a href="{{ route('admin.tags.create') }}" class="btn btn-success">
                Aggiungi Tag
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Slug</th>
                    <th scope="col">N. Articoli</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <th scope="row">{{ $tag->id }}</th>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->slug }}</td>
                        <td>{{ $tag->posts()->count() }}</td>
                        <td>
                            <a href="{{ route('admin.tags.show', $tag->id) }}" class="btn btn-info">
                                Dettagli
                            </a>
                            <a href="{{ route('admin.tags.edit', $tag->id) }} " class="btn btn-warning">
                                Modifica
                            </a>
                            <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Sei sicuro di voler eliminare questo tag?')" >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection  
