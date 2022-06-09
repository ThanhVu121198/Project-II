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
              <h3 class="card-title">Product form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row g-3">
                  <div class="col mb-3">
                    <label for="exampleFormControlTextarea1"  class="form-label">product name</label>
                    <input type="text" class="form-control" name="name" placeholder="product name ... " >
                  </div>
                  <div class="col mb-3">
                  </div>
                </div>
             
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" name="desc" class="form-label">Description</label>
                  <textarea class="form-control" id="desc" rows="3" placeholder="Description  of product..."></textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1"  class="form-label">content</label>
                  <textarea class="form-control" id="content" name="content" rows="3"  placeholder="Content  of product..."></textarea>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">categories option</label>
                <br>
                <select class="form-select col-4 mb-3" name="categories" aria-label="Default select example">
                  <option selected value="">please choose categories</option>
                  @foreach ($cate as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                  
                </select>
              </div>
              <label for="exampleFormControlTextarea1" class="form-label">status</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" value="0" id="status_on" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    on sale
                  </label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="radio" value="1" name="status" id="status_cancel" >
                  <label class="form-check-label" for="flexRadioDefault2">
                    cancel sale
                  </label>
                </div>
                <div class="row">
                <div class="col-3">
                  <label for="exampleFormControlTextarea1"  class="form-label">Price</label>
                  <input type="number" class="form-control" name="price" placeholder="price of product" >
                </div>
                <div class="col-md-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Qty</label>
                  <input type="number" class="form-control" name="qty" placeholder="amount of product " >
                </div>
                <div class="col-md-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Discount</label>
                  <input type="number" class="form-control" name="discount" min="0" max="99" maxlength="2" placeholder="discount of product " >
                </div>
                <div class="col-md-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Weight</label>
                  <input type="number" class="form-control" name="weight" placeholder="weight of product" >
                </div>
              </div>
              <label style="margin-top:10px" for="exampleFormControlTextarea1" class="form-label">featured</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="featured" value="0" id="featuredon" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  on featured
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="radio" value="1" name="featured" id="featuredcanel" >
                <label class="form-check-label" for="flexRadioDefault2">
                  cancel featured
                </label>
              </div>
              <div class="row">
                <div class="input-group">
                  <div class="custom-file col-4">
                    <input type="file" class="custom-file-input" name="img1" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file 1</label>
                  </div>
                  {{-- <div class="custom-file col-4">
                    <input type="file" class="custom-file-input" name="img2" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file 2</label>
                  </div>
                  <div class="custom-file col-4">
                    <input type="file" class="custom-file-input" name="img3" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file 3</label>
                  </div> --}}
              </div>
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

  CKEDITOR.replace('desc');
  CKEDITOR.replace('content');
</script>    
 
    
@endsection
