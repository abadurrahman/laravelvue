@extends('layouts.admin')

@section('title', 'Coupon')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Coupon</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Coupon</a></li>
                            <li class="breadcrumb-item active"><a href="#">List</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
<div class="row">
    <div class="col-xl-3 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-12">
              <h3 class="mb-0">Add Coupon</h3>
              <a href="{{ route('all.coupon') }}" style="margin-top:-25px; " class="btn btn-sm btn-primary float-right">All-Coupon</a>
            </div>
          </div>
        </div>
        <div class="card-body">
       <form action="{{ route('store.coupon') }}" method="POST">
            @csrf
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Coupon Name*</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="coupon" name="coupon">
              </div>
            </div>  
            <div class="col-md-6">
                  <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Discount*</label>
                <input type="text" class="form-control" id="example3cols1Input" placeholder="discount" name="discount">
              </div>
            </div> 
              <button class="btn btn-primary" type="submit">Save Coupon</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
