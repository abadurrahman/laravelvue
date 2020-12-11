@extends('layouts.admin')

@section('title', 'Category')

@section('content')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Contact</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Contact</a></li>
                            <li class="breadcrumb-item active"><a href="#">View</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding:40px;margin-top:-5.5rem">
  <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">View Contact</h3>
          <a href="{{ route('admin.contact') }}" style="margin-top:-25px; " class="btn btn-sm btn-primary float-right">All-Contact</a>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <div class="row">

            <div class="col-md-6 " style="">
               <div class="form-group">
              <label class="form-control-label" for="example3cols1Input">Name:</label>
              <br>
                {{ $show->name }} 
             </div>
              <!--  -->
            </div> 

             <div class="col-md-6 " style="">
               <div class="form-group">
              <label class="form-control-label" for="example3cols1Input">Email:</label>
              <br>
                {{ $show->email }} 
             </div>
              <!--  -->
            </div> 
             
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-control-label" >Details:</label>
                <br>
                  {!! $show->description !!}
             </div>
           </div>
          </div> 
        </div>
    </div>
</div>


<script>
      $('#summernote').summernote({
        placeholder: 'Text Here.....',
        tabsize: 2,
        height: 150
      });
    </script>
@endsection
