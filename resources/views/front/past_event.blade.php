@extends('front.layout.layout')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .star.active {
            color: Red;
            font-size:24px;
        }
    </style>

<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>{{ $eventRecord->name }}</h2>
          <div class="portfolio-meta">
            <span>{{ $eventRecord->date }}</span>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#Page header-->


<section class="single-post">
  <div class="container">
    <div class="row">


      @foreach($memoryImage as $image)
      <div class="col-4">
        <div class="post-img d-flex align-items-center justify-content-center vh-100">
          <!-- mx-auto to center the div horizontally -->
          <img class="img-fluid" alt="" src="/memory_images/{{ $image['image_url'] }}" alt="{{ $image['image_url'] }}">
          <!-- set a maximum width for larger images -->
        </div>
        <hr>
      </div>

      @endforeach

      <div class="post-content">
        <p>
        <h2>{{ $eventMemorie->memory_description }}</h2>
        </p>
        
        
      </div>
      

    </div>
  </div>



  </div>
  </div>
  </div>
</section>



<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      
    <div class="border p-4 rounded shadow mb-4 text-center"> <!-- Add text-center class to center content -->
        <ul class="social-share">
        
        
        @if (!empty($ratings))
    @php
        // Initialize variables for total stars and total feedback entries
        $totalStars = 0;
        $totalFeedbacks = count($ratings);
        $averageRating = 0;

        // Calculate total stars
        foreach ($ratings as $rating) {
            $totalStars += $rating['stars'];
        }

        // Calculate average rating
        $averageRating = ($totalFeedbacks > 0) ? ($totalStars / $totalFeedbacks) : 0;

        // Convert average rating to star representation
        $averageRatingStars = str_repeat('<i class="bi bi-star-fill"></i>', round($averageRating));
    @endphp

    <!-- Display the total stars, total feedbacks, and average rating -->
    <div>
        <p>Reviews ({{ $totalFeedbacks }})</p>
        <p> {!! $averageRatingStars !!}</p>
    </div>
@else
    <p>No rates</p>
@endif





        </ul>
      </div>

      <div class="border p-4 rounded shadow text-center"> <!-- Add text-center class to center content -->
        <form action="/past-event/rate/{{$eventRecord->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="rating">Rate this event:</label>
            <div class="rating">
              <input type="hidden" name="rating" id="rating-value" value="0">
              <span class="star"  data-value="1"><i class="bi bi-star"></i></span>
              <span class="star"  data-value="2"><i class="bi bi-star"></i></span>
              <span class="star"  data-value="3"><i class="bi bi-star"></i></span>
              <span class="star"  data-value="4"><i class="bi bi-star"></i></span>
              <span class="star"  data-value="5"><i class="bi bi-star"></i></span>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Rate</button>
        </form>
      </div>
      <hr>
      
    </div>
  </div>
</div>


<!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
  <div class="container">
    <div class="row justify-content-center"> <!-- Center the content horizontally -->
      <div class="col-md-8"> <!-- Adjust the column width as needed -->
        <div class="border p-4 rounded shadow"> <!-- Add border, padding, rounded corners, and shadow -->
          <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h2> <!-- Fix the closing tag of h2 -->
          <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
          <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const rating = parseInt(this.getAttribute('data-value'));
                    document.getElementById('rating-value').value = rating;

                    stars.forEach((s, index) => {
                        if (index < rating) {
                            s.classList.add('active');
                        } else {
                            s.classList.remove('active');
                        }
                    });

                    console.log('Rating:', rating);
                    // You can perform further actions with the selected rating here
                });
            });
        });
    </script>


@endsection