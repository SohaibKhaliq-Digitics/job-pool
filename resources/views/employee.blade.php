<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company id</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($emp as $employee)
            <tr>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->company_id }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>
                <!-- Update Button -->
                <a href="/employee/{{ $employee->id }}?message=edit" class="btn btn-primary">Edit</a>
                
                <!-- Delete Button -->
                <!-- <form method="POST" action="{{ route('em.destroy', $employee->id) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form> -->

                <form method="POST" action="{{ route('em.destroy', $employee->id) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>

            </td>
            </tr>
            @endforeach
        </tbody>
    </table>




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
                    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                        <!-- Form for updating records -->
                        <form action="/employee/update/{{$update->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <label for="name" class="form-label">Firt Name</label>
        <input type="text" class="form-control" value="{{$update->first_name}}" id="first_name" name="first_name" required>
        <div class="invalid-feedback">
            Please provide a valid name.
        </div>
                        <label for="name" class="form-label">Last Name</label>
        <input type="text" class="form-control" value="{{$update->last_name}}" id="last_name" name="last_name" required>
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
        <label for="company_id" class="form-label">Company Name</label>
        <select class="form-control" name="company_id" id="game_id">
                        @foreach($comp as $com)
                            <option value="{{ $com->id }}">{{ $com->name }}  </option>
                        @endforeach
                    </select>

        <div class="invalid-feedback">
            Please provide a valid email.
        </div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">phone</label>
        <input type="phone" class="form-control" value="{{$update->phone}}" id="phone"  name="phone" required>
        <div class="invalid-feedback">
            Please upload a logo.
        </div>
    </div>
    
                        
    </div>
                        <button type="submit" class="btn btn-primary">Update Employee</button>
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
