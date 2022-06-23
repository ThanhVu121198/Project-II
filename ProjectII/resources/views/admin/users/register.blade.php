@extends('admin.adminmain')
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Register admin form</h3>
            </div>
     
            <form style="padding: 10px" method="POST" enctype="multipart/form-data">
                <div class="row" >
                    <div class="mb-3 col-6">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="input name" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                <div class="mb-3 col-6">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-6">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control"name="password" id="exampleInputPassword1">
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleInputPassword1" class="form-label">Password confirm </label>
                    <input type="password" class="form-control" name="passwordcf" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3 col-6 form-group">
                <label for="">avatar</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="avatar" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                  </div>
                  <div class="mb-3 col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="desc" rows="3" name="desc" placeholder="description of admin "></textarea>
                  </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
                @csrf
              </form>
@endsection 
@section('js')
<script>
</script>    
 
    
@endsection
