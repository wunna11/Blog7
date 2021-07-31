@extends('layouts.app')
@section('content')
    <div class="contianer-fluid mr-5 ml-5">
      
      <form action="" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('name')
                    <p class="text-danger">{{$message}}</p>       
                  @enderror
                </div>

                <button type="submit" value="Add Category" class="btn btn-primary">Create Category</button>
            </form>
        </div>
        
    </div>

    
@endsection