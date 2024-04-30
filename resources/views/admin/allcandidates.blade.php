<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>


@extends('admin.layout.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">ADD Event</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    

    <div class="container-fluid">




        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">ALL companies</h3>
                            </div>
                            
                            <!-- /.card-header -->
                            <div class="card-body">
                            <div class="container">
            <!-- First Div -->


            <!-- Sixth Div -->

        </div>
                                
        


        
    <div class=" container table-responsive">
    <table class="table table-striped">
        <thead>
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<tr>
                
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Cv</th>
                <th>Company name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidates as $candidate)
            <tr>
            <td><img src="/candidate_images/{{ $candidate->img }}" alt="{{ $candidate->img }}" style="max-width: 100px;"></td>
                <td>{{ $candidate->name }}</td>
                <td>{{ $candidate->email }}</td>
                <td>{{ $candidate->phone }}</td>
                <td><a href="{{ asset('storage/candidate_cv/' . $candidate->cv) }}" target="_blank">{{ $candidate->cv }}</a></td>
                <td>{{ $candidate->company->name }}</td>
                <td>
                <!-- Update Button -->
                <form method="POST" action="{{ route('candidate.approve', $candidate->id) }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-success">Approve</button>
                </form>

<!-- Reject Button -->
                <form method="POST" action="{{ route('candidate.reject', $candidate->id) }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Reject</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@if ($message === 'edit')



        <!-- JavaScript to trigger the modal when the condition is true -->
        <script>
            $(document).ready(function () {
                // Show the modal when the page is loaded
                $('#editModal').modal('show');
            });
        </script>

        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Update Records</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for updating records -->
                        <form action="/company/update/{{$update->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$update->name}}" id="name" name="name" required>
        <div class="invalid-feedback">
            Please provide a valid name.
        </div>

    
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" value="{{$update->email}}" name="email" required>
        <div class="invalid-feedback">
            Please provide a valid email.
        </div>
    </div>
    <div class="mb-3">
        <label for="logo" class="form-label">Logo</label>
        <input type="file" class="form-control" id="logo"  name="logo" required>
        <div class="invalid-feedback">
            Please upload a logo.
        </div>
    </div>
    <div class="mb-3">
        <label for="website" class="form-label">Website</label>
        <input type="url" class="form-control" id="website" value="{{$update->website}}" name="website" required>
        <div class="invalid-feedback">
            Please provide a valid website URL.
        </div>
    </div>
               
    
    </div>

                        <button type="submit" class="btn btn-primary">Update Event</button>
                    </form>
                    </div>
                </div>
            </div>







        @else



        <hr class="border-bottom">

        @endif




 
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>






                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->


        



        <hr>





        








        </div>
























        <div class="container-fluid">




        </div>


        @endsection