@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 text-center">
                <h1>
                    Creating a New Project
                </h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="col-8 card bg-dark-subtle m-3" method="POST" action="{{ route('admin.projects.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
                    @error('author')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{ old('date') }}">
                    @error('date')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="proj-tech" class="form-label">Select Technology</label>
                    @foreach ($technologies as $technology)
                        <div class="form-check">
                            <input type="checkbox" name="technologies[]" id="proj-tech" class="form-check-input"
                                value="{{ $technology->id }}">
                            <label type="checkbox" name="technologies[]" id="proj-tech" class="form-check-label">
                                {{ $technology->name }}
                            </label>
                        </div>
                    @endforeach
                    @error('type_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{ old('status') }}">
                    @error('author')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type_id" class="form-label">Select a Type</label>
                    <select name="type_id" id="type_id" class="form-control">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('type_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="6" name="description">
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary me-3">
                        Create New Project
                    </button>
                    <button type="reset" class="btn btn-success me-3">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
