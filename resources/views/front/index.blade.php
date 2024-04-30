@php
use App\Team;
@endphp
<style>
  /* Custom styles for the full-size div with background image */


  /* Style for the visit link */
  .visit-link {
    text-align: center;
    align-items: center;
  }

  .content {

    margin: 100px;
    text-align: center
      /* Ensures content is above the background image */
  }

  hr {
  /* Set the height of the horizontal rule */
  height: 2px;
  /* Set the color of the horizontal rule */
  background-color: #000; /* Change the color as needed */
  /* Add margin to provide spacing around the horizontal rule */
  margin: 20px 0; /* Adjust the margin as needed */
  /* Remove default browser styles */
  border: none;
  /* Add shadow to give depth (optional) */
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1); /* Optional shadow effect */
}
</style>



@extends('front.layout.layout')
@section('content')



<section id="hero-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="block wow fadeInUp" data-wow-delay=".3s">

          <!-- Slider -->
          <section class="cd-intro">
            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
              <span> HI, Welcome To </span><br>
              <span class="cd-words-wrapper">
                <b class="is-visible">Jobs Pool</b>
              </span>
            </h1>
          </section> <!-- cd-intro -->
          <!-- /.slider -->
          <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
            Here you can find the best jobs for you.With Highy rated companies.And also you
            can find the best salary as well as the best working environment.
          </h2>
        </div>
      </div>
    </div>
  </div>
</section>






<hr>
<div class="container">

  <div class="section-heading">
    <h1 class="title wow fadeInDown" data-wow-delay=".3s">JOBS</h1>
  </div>
  <div class="row justify-content-center">

  @foreach ($eventDataPaginated as $comingEvent)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="/jobs banners/{{ $comingEvent->logo }}" alt="{{ $comingEvent->logo }}" width="250" height="250" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $comingEvent->name }}</h5>
                    <p class="card-text">{{ $comingEvent->description }}</p>
                    <a href="/Job-Pool/job?message={{ $comingEvent->id }}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    @endforeach






  </div>


</div>

<div class="row mt-4">
    <div class="col-md-12 d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item {{ $eventDataPaginated->previousPageUrl() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $eventDataPaginated->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            @foreach ($eventDataPaginated->getUrlRange(1, $eventDataPaginated->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $eventDataPaginated->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach
            <li class="page-item {{ $eventDataPaginated->nextPageUrl() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $eventDataPaginated->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </div>
</div>





  <!--
==================================================
Portfolio Section Start
================================================== -->









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
              <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni
                recusandae? Dolore, maxime praesentium.</p>
              <a href="/contact-us" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s"
                data-wow-duration="500ms">Contact With Me</a>
          </div>
        </div>

      </div>
    </div>
  </section>





  @endsection
