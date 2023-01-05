@extends('layout.utama')

@section('css')
    <link rel="stylesheet" href="css/update.css">
@endsection

@section('main')
<h5 class="fw-bold ms-5"  style=" color: rgb(99, 98, 98);" >BUSINESS SETTINGS</h5>
<div class="update mb-5" >
  
  <div class="column bg-light p-3 rounded shadow ">
    <form>

    <div class="mb-3 mt-3">
      <label for="exampleFormControlInput1" class="form-label ms-2 fw-bold" style=" color: rgb(99, 98, 98);">Company</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ABC Company up">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label ms-2 fw-bold" style=" color: rgb(99, 98, 98);">Address</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="421 Example South Street">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label ms-2 fw-bold" style=" color: rgb(99, 98, 98);">City</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Los Angeles">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label ms-2 fw-bold" style=" color: rgb(99, 98, 98);">Region</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="FL">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label ms-2 fw-bold" style=" color: rgb(99, 98, 98);">County</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="USA">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label ms-2 fw-bold" style=" color: rgb(99, 98, 98);">Post</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="123">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label ms-2 fw-bold" style=" color: rgb(99, 98, 98);">TAX ID</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="23442">
    </div>

    <button type="button" class="btn btn-danger btn-sm">Cancel</button>
    <button type="submit" class="btn btn-success btn-sm">Update</button> 

    </form> 
      </div> 

    <div class="column bg-light p-3  rounded shadow">
         <!-- icons -->
        <h6 style=" color: rgb(99, 98, 98);" class="fw-bold mb-3" >Company Favicon<h6>
        <img class="kecil" src="img/imgUpdate.jpg" alt="gambar" > 
        <div class="aksi">
          <input type="file"  name="" id="">
          <p>Leave blank you do not want to update it</p>
        </div>
        <h6 class="text-kecil">only .ico format accepted<h6>
        <div class="garis"></div>
        <!-- Logo -->
        <h6 style=" color: rgb(99, 98, 98);" class="fw-bold mb-3" >Theme Logo<h6>
        <img class="sedang" src="img/imgUpdate.jpg" alt="gambar" > 
        <div class="aksi">
          <input type="file"  name="" id="">
          <p>Leave blank you do not want to update it</p>
        </div>
        <h6 class="text-kecil">only jpg|png Format accepted<h6>
        <h6 class="text-kecil">Recommended dimensions are 80x80.Use small size file - it will load quickly<h6>
        <div class="garis"></div>
        <!-- Company Logo -->
        <h6 style=" color: rgb(99, 98, 98);" class="fw-bold mb-3" >Theme Logo<h6>
        <img class="besar" src="img/imgUpdate.jpg" alt="gambar" > 
        <div class="aksi">
          <input type="file"  name="" id="">
          <p>Leave blank you do not want to update it</p>
        </div>
        <h6 class="text-kecil">only jpg|png Format accepted<h6>
        <h6 class="text-kecil">Recommended dimensions are 500x280.Use small size file - it will load quickly<h6>
    </div>
</div>


@endsection