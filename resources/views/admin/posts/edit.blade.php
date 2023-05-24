@extends('layouts.admin')

@section('page-title', "Modifica: $post->title")

@section('content')

    <form method="POST" action="{{ route('admin.posts.update', ['post' => $post->slug]) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title"
                value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cover_img" class="form-label">URL immagine</label>
            <input type="text" class="form-control @error('cover_img') is-invalid @enderror " id="cover_img"
                name="cover_image" value="{{ old('cover_img', $post->cover_image) }}">
            @error('cover_img')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione progetto</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $post->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
        <a class="btn btn-secondary" href="{{ route('admin.posts.index') }}">Back</a>

    </form>

@endsection
