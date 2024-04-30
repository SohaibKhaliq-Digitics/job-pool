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
                <th>Name</th>
                <th>Description</th>
                <th>Logo</th>
                <th>type</th>
                <th>Company Name</th>
                <th>Catagory</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{ $job->name }}</td>
                <td>{{ $job->description }}</td>
                <td><img src="/jobs banners/{{ $job->logo }}" alt="{{ $job->logo }}" style="max-width: 100px;"></td>
                <td>{{ $job->type }}</td>
                <td>{{ $job->company->name }}</td>
                <td>{{ $job->category }}</td>


                <td>
                <!-- Update Button -->
                <a href="/job/{{ $job->id }}?message=edit" class="btn btn-primary">Edit</a>
                <!-- <a href="/view-company/{{ $job->id }}" class="btn btn-primary">View</a> -->
                
                <!-- Delete Button -->
                <form method="POST" action="{{ route('job.destroy', $job->id) }}"  style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
                        <form action="/job/update/{{$update->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$update->name}}" id="name" name="name" required>
        <div class="invalid-feedback">
            Please provide a valid name.
        </div>

    
    <div class="mb-3">
        <label for="email" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" value="{{$update->description}}" name="description" required>
        <div class="invalid-feedback">
            Please provide a valid description.
        </div>
    </div>

    <div class="form-group">
                        <label for="company_id">Company ID</label>
                        <select class="form-control" id="company_id" name="company_id">
                            @foreach ($com as $company)
                                <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                            @endforeach
                        </select>
                        @error('company_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="part-time">Part Time</option>
                            <option value="full-time">Full Time</option>
                        </select>
                        @error('type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
    </div>

    <div class="mb-3">
        <label for="logo" class="form-label">Logo</label>
        <input type="file" class="form-control" id="logo"  name="logo" required>
        <div class="invalid-feedback">
            Please upload a logo.
        </div>
    </div>

    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Enter category" value="{{ old('category') }}">
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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