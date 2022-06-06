@extends('admin.adminmain')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Categories form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="" method="POST">
      <div class="card-body">
        <div class="form-group">
          <label for="menu">Categories Name</label>
          <input type="text" class="form-control" id="name" value="{{$menu->name}}" name="categories_name" placeholder="Enter Name">
        </div>
      
       
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="0" id="status_on" {{$menu->status==0 ? 'checked':''}}>
            <label class="form-check-label" for="flexRadioDefault1">
              on sale
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="1" name="status" id="status_cancel" {{$menu->status==1 ? 'checked':''}}>
            <label class="form-check-label" for="flexRadioDefault2">
              cancel sale
            </label>
          </div>
      </div>
          
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      @csrf
    </form>
  </div>
@endsection