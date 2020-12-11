@extends('layouts.admin')

@section('title', 'Contact')

@section('content')
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
                            <li class="breadcrumb-item active"><a href="#">List</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6" style="padding:40px;margin-top:-5.5rem">
<div class="row">
    <div class="col-xl-9 order-xl-2">
      <div class="card card-profile">
        <div class="card-body pt-0">
          <div class="row">
            <div class="card-body">
                <div class="card-header">
                    <h3 class="mb-0">Contact</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" style="width: 100%;" id="datatable-buttons">
                        <thead class="thead-light">
                            <tr>
                              
                                <th>Name:</th>
                                <th>Email:</th>
                                <th>Details:</th>
                                <th>Actions:</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($contact as $index => $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{!! $row->description !!}</td>
                              
                        
                                <td>
                                    
                                    <a class="btn btn-sm btn-danger" id="delete" href="{{ URL::to('delete/contact/'.$row->id) }}"><i class="fa fa-trash"></i></a>
                                    <a class="btn btn-sm btn-warning" href="{{ URL::to('view/contact/'.$row->id) }}"><i class="fa fa-eye"></i></a>

                                 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
