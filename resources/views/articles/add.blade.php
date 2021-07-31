@extends('layouts.app')
@section('content')
    <div class="contianer-fluid mr-5 ml-5">
      {{-- errror    $errors => withErros from artcilecontroller --}}
      @if ($errors->any())
          <div class="alert alert-danger">
            <ol>
              @foreach ($errors->all() as $error)
                  <li>{{ $error}} </li>
              @endforeach
            </ol>
          </div>
      @endif
      <form action="{{ route('post_articleAdd') }}" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Body</label>
                  <textarea type="text" class="form-control" name="body" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="mb-3">
                  <label for="">Category</label>
                  <select class="form-control" name="category_id" id="">
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{$category['name'] }}</option>
                    @endforeach
                  </select>
                </div>

                <button type="submit" value="Add Article" class="btn btn-primary">Create Article</button>
            </form>
        </div>
        
    </div>

    
@endsection