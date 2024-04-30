<style? /* Add your CSS styles here */ .container { display: flex; flex-wrap: wrap; justify-content: space-around; }
    .box { flex: 1; min-width: calc(33.33% - 20px); /* Adjust for gutter spacing */ margin: 10px; padding: 20px;
    background-color: #f2f2f2; text-align: center; border: 1px solid #ddd; border-radius: 5px; } hr { border: 0; /*
    Remove the default border */ height: 1px; /* Set the height of the line */ background-color: white; /* Set the line
    color to white */ margin-top: 100px; /* Add margin for spacing */ } .box img { max-width: 100%; height: auto; } .box
    a { display: block; margin-top: 10px; text-decoration: none; color: #333; } @media (max-width: 768px) { .box { flex:
    1; min-width: calc(50% - 20px); } } </style>




    @extends('admin.layout.layout')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Banners Details</h1>
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
                                    <h3 class="card-title">Event Details</h3>
                                </div>



                <a href="{{ url('em/banners') }}?message=add" class="btn btn-primary m-2">Add New Banner</a>
               
                @if($success_message=session::get('success'))
            <div class="alert alert-success alert-block m-2">
                <strong> {{$success_message}} </strong>

            </div>
            @endif

            
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="eventData" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Banner ID</th>
                                                <th>Image</th>
                                                <th>Type</th>
                                                <th>link</th>
                                                <th>Sort</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bannersDetails as $banner) 
                                            <tr>
                                                <td>{{ $banner['id']}}</td>
                                               
                                                <td><img src="/banners_img/{{ $banner['img']}}" alt="{{ $banner['img'] }}" width="50">
                                            
                                            </td>
                                                
                                                <td>{{ $banner['type']}}</td>
                                                <td>{{ $banner['link']}}</td>
                                                <td>{{ $banner['sort']}}</td>
                                                <td>{{ $banner['status']}}</td>
                                                <td >
                                                <a href="/em/editBanner/{{$banner['id']}}?message=edit" class="btn btn-primary">Edit</a>
                                                <a href="/em/deleteBanner/{{$banner['id']}}?message=delete" class="btn btn-primary btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </table>
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


            

            

            @if ($message === 'add')



            <div class="border-bottom mb-5">
                <div class="container-fluid"> <!-- Add a container for limited content width -->
                    <h1 style="text-align: center; margin-bottm:10px">Add New Banner</h1>


                    <form action="/em/bannerCreate" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="type">Banner Type:</label>
                            <select class="form-control" id="type" name="type">
                                <option value="slider">Slider</option>
                                <option value="fix">Fix</option>

                                <!-- Add more event types as needed -->
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="name">Banner link:</label>
                            <input type="text" class="form-control" value="three" id="link" name="link" >
                            @if($errors->has('link'))
                            <span class="text-danger"> {{$errors->first('link')}} </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="venue">Banner Title:</label>
                            <input type="text" class="form-control" value="three place" id="title" name="title">
                        </div>
                        @if($errors->has('title'))
                            <span class="text-danger"> {{$errors->first('title')}} </span>
                        @endif


                        <div class="form-group">
                            <label for="venue">Banner Alt:</label>
                            <input type="text" class="form-control" value="three place" id="alt" name="alt">
                        </div>
                        @if($errors->has('alt'))
                            <span class="text-danger"> {{$errors->first('alt')}} </span>
                        @endif


                        
                        <div class="form-group">
                            <label for="venue">Banner Sort:</label>
                            <input type="text" class="form-control" value="three place" id="sort" name="sort">
                        </div>
                        @if($errors->has('sort'))
                            <span class="text-danger"> {{$errors->first('sort')}} </span>
                        @endif


                        <div class="form-group">
                            <label for="venue">Banner Status:</label>
                            <input type="text" class="form-control" value="three place" id="status" name="status">
                        </div>
                        @if($errors->has('status'))
                            <span class="text-danger"> {{$errors->first('status')}} </span>
                        @endif


                        <div class="from-group">
                            <label for="file">Select Image:</label>
                <input type="file" class="form-control-file" id="img" name="img">
                @if($errors->has('img'))
                            <span class="text-danger"> {{$errors->first('img')}} </span>
                            @endif
                        </div>
                        

                        

                        

                        <button type="submit" class="btn btn-primary">Save Banner</button>
                    </form>
                </div> <!-- Close the container -->
            </div>

            <hr class="border-bottom">


            @elseif ($message === 'edit')



            <div class="border-bottom mb-5">
                <div class="container-fluid"> <!-- Add a container for limited content width -->
                    <h1 style="text-align: center; margin-bottm:10px">Edit Banner </h1>


                    <form action="/em/updateBanner/{{$update->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="type">Banner Type:</label>
                            <select class="form-control" id="type" name="type">
                                <option value="slider">Slider</option>
                                <option value="fix">Fix</option>

                                <!-- Add more event types as needed -->
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="name">Banner link:</label>
                            <input type="text" class="form-control" value="{{$update->link}}" id="link" name="link" >
                            @if($errors->has('link'))
                            <span class="text-danger"> {{$errors->first('link')}} </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="venue">Banner Title:</label>
                            <input type="text" class="form-control" value="{{$update->title}}" id="title" name="title">
                        </div>
                        @if($errors->has('title'))
                            <span class="text-danger"> {{$errors->first('title')}} </span>
                        @endif


                        <div class="form-group">
                            <label for="venue">Banner Alt:</label>
                            <input type="text" class="form-control" value="{{$update->alt}}" id="alt" name="alt">
                        </div>
                        @if($errors->has('alt'))
                            <span class="text-danger"> {{$errors->first('alt')}} </span>
                        @endif


                        
                        <div class="form-group">
                            <label for="venue">Banner Sort:</label>
                            <input type="text" class="form-control" value="{{$update->sort}}" id="sort" name="sort">
                        </div>
                        @if($errors->has('sort'))
                            <span class="text-danger"> {{$errors->first('sort')}} </span>
                        @endif


                        <div class="form-group">
                            <label for="venue">Banner Status:</label>
                            <input type="text" class="form-control" value="{{$update->status}}" id="status" name="status">
                        </div>
                        @if($errors->has('status'))
                            <span class="text-danger"> {{$errors->first('status')}} </span>
                        @endif


                        <div class="from-group">
                            <label for="file">Select Image:</label>
                <input type="file" class="form-control-file" id="img" name="img">
                @if($errors->has('img'))
                            <span class="text-danger"> {{$errors->first('img')}} </span>
                            @endif
                        </div>

                        

                        <button type="submit" class="btn btn-primary">Update Event</button>
                    </form>
                </div> <!-- Close the container -->
            </div>

            <hr class="border-bottom">






            @else

            

            <hr class="border-bottom">
            <hr class="border-bottom">


            @endif






            


        </div>
























        <div class="container-fluid">




        </div>


        @endsection