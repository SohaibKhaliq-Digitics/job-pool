@extends('front.layout.layout')


@section('content')



<!--
        ==================================================
        Header Section Start
        ================================================== -->

<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>{{$job['name']}}</h2>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#Page header-->

<!-- work details part start -->
<section class="work-single">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="work-single-image">
          <!-- Work Single Image -->
          <img class="w-100" src="/jobs banners/{{ $job['logo']}}" alt="{{ $job['logo'] }}" height="600">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <!-- work single Content -->
        <div class="work-single-content">
          <h3>Description</h3>
          <p>
          {{ $job['description']}}
          </p>
          <!-- Blockquote -->
          <blockquote>
            First Come First Serve
          </blockquote>
        </div>
      </div>
      <div class="col-lg-4">
        <!-- sidebar -->
        <div class="work-single-sidebar">
          <h5>Event Name</h5>
          <h6>{{ $job['name']}}</h6>
          <h5>Date</h5>
          <h6>{{ $job['type']}}</h6>
          <h5>Type</h5>
          <h6>{{ $job['type']}}</h6>
          <h5>Company</h5>
          <h6><a href="/view-company/{{ $job['company_id']}}">Visit Company</a></h6>
          
          


          <h5>Catagory</h5>
          <h6>{{ $job['category']}}</h6>
        </div>
      </div>
      @if($job['type']=="paid")
      <div class="col-lg-12">
      @if($job['type']=="paid")
          <h5>Ticket Price</h5>
          <h6>{{ $job['ticket_price']}}</h6>
          @endif
        <a class="btn btn-dafault btn-work hvr-bounce-to-right" href="#">Get Event Ticket</a>
      </div>
      @endif
    </div>
  </div>
</section>




<!-- work details part end -->


@if (session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif




<section class="works works-fit">
  <div class="container">
    <h2 class="subtitle">Apply For Jobs</h2>
    
    <div class="row-12">

        <form action="/apply-job" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="img">Image</label>
            <input type="file" class="form-control" id="img" name="img">
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="Tayyab" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="tayyab7fiaz86@gmail.com" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" value="03127656789" class="form-control" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="company_id">Company Id</label>
            <input type="text" class="form-control" value="{{ $job['company_id']}}" id="company_id" name="company_id">
          </div>
          <div class="form-group">
            <label for="cv">CV</label>
            <input type="file" class="form-control" id="cv" name="cv">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>
  </div>
</section>










<section class="works works-fit">
  <div class="container">
    <h2 class="subtitle">More Jobs</h2>
    <p class="subtitle-des">
      Explore More Jobs
    </p>
    <div class="row">
      @foreach ($Alljobs as $Alljob)
      <div class="col-md-3 col-sm-6">
        <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="300ms" data-wow-delay="0ms"
          style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
          <div class="img-wrapper"  style="height: 200px;">
            <img src="/jobs banners/{{ $Alljob['logo']}}"  class="img-fluid" alt="portfolio items">
            <div class="overlay">
              <div class="buttons">
                <a target="_blank" href="/Job-Pool/job?message={{ $Alljob['id'] }}">Details</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href="#">
                {{ $Alljob['name']}}
              </a>
            </h4>
            <p>
            {{ $Alljob['description']}}
            </p>
          </figcaption>
        </figure>
      </div>
      @endforeach

    </div>
  </div>
</section>







            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>;
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            
	<!-- Template Javascript Files
	================================================== -->
	
 	</body>
</html>



@endsection