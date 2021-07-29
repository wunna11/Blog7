@extends('layouts.app')
@section('content')
    <div class="contianer">
        <div class="col-md-8">
            <form action="" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Body</label>
                  <textarea type="text" class="form-control" name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                  <label for="">Category</label>
                  <select class="form-control" name="category_id" id="">
                    @foreach ($article as $category)
                    <option value="{{ $category['id'] }}">{{$category['name'] }}</option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" value="Add Article" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
    </div>

    
@endsection