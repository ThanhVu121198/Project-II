@extends('admin.adminmain')
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Blog form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="col-6 mb-3">
                    <label for="exampleFormControlTextarea1"  class="form-label">Blog title</label>
                    <input type="text" class="form-control" value="{{$blog->title}}" name="title" placeholder="Blog title ... " >
                  </div>
                  <div class="col-6">
                  </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1"  class="form-label">Category</label>
                    <textarea class="form-control" id="category" type="text"  name="category" rows="3"  placeholder="Blog category....">{{$blog->category}}</textarea>
                  </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1"  class="form-label">Content</label>
                  <textarea class="form-control" id="content" name="content" rows="5"  placeholder="Content of blog...">{{$blog->content}}</textarea>
                </div>
                <label for="">Old I mage</label>
                <div class="col-4 mb-5">
                  <img class="col-12" src={{"/front/images/blog/medium-size/$blog->image"}}>
                </div>
                <input type="hidden" value="{{$blog->image}}">
                <div class="custom-file col-4">
                    <input type="file" class="custom-file-input" value="{{$blog->image}}" name="img" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                  </div>
              <!-- /.card-body -->
              </div>
            
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
              </div>
              @csrf
            </form>
          </div>
@endsection 
@section('js')
<script>
  CKEDITOR.replace('content');
</script>    
 
    
@endsection
