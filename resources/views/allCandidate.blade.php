<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <!-- Bootstrap CSS link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Your content here -->
    <div class="container">
        <h1>Welcome to My Website</h1>
        <p>This is a sample content.</p>
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
                <td>{{ $candidate->cv }}</td>
                <td>{{ $candidate->company->name }}</td>
                <td>
                <!-- Update Button -->
                <a href="/company/{{ $candidate->id }}?message=edit" class="btn btn-primary">Edit</a>
                <a href="/view-company/{{ $candidate->id }}" class="btn btn-primary">View</a>
                
                <!-- Delete Button -->
                <form method="POST" action="{{ route('company.destroy', $candidate->id) }}" style="display: inline;">
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
</body>

</html>
