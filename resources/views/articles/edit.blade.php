@extends('layouts.app')
@section('content')
    <div class="contianer-fluid mr-5 ml-5">
      
      <form action="{{ route('articleUpdate', $article->id) }}" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $article->title }}">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Body</label>
                  <textarea type="text" class="form-control" name="body" id="" cols="30" rows="10">{{ $article->body }}</textarea>
                </div>

                <div class="mb-3">
                  <label for="">Category</label>
                  <select class="form-control" name="category_id" id="">
                    <option value="{{ $article->category['id'] }}" selected>{{ $article->category['name'] }}</option>
                  </select>
                </div>

                <button type="submit" value="Add Article" class="btn btn-primary">Update Article</button>
            </form>
        </div>
        
    </div>

    
@endsection