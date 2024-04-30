
@extends('front.layout.layout')
@section('content')












<div class="container">


    

<div class="section-heading">
        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Upcoming Events</h1>
        </div>
        <div class="row justify-content-center">

        

        <div class="col-lg-3 col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('front/images/portfolio/item-5.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body">
                        <h5 class="card-title">Event 1</h5>
                        <p class="card-text">Date: January 1, 2023</p>
                        <a href="/coming-event" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
          </div>

          <div class="col-lg-3 col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('front/images/portfolio/item-1.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body">
                        <h5 class="card-title">Event 1</h5>
                        <p class="card-text">Date: January 1, 2023</p>
                        <a href="/coming-event" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
          </div>

          <div class="col-lg-3 col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('front/images/portfolio/item-3.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body">
                        <h5 class="card-title">Event 1</h5>
                        <p class="card-text">Date: January 1, 2023</p>
                        <a href="/coming-event" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
          </div>

        </div>

</div>











<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
  <div class="container">
    <div class="section-heading">
      <h1 class="title wow fadeInDown" data-wow-delay=".3s">Our Past Events</h1>
      <p class="wow fadeInDown" data-wow-delay=".5s">
        Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est.
        Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis
        lacus.
      </p>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
          <div class="img-wrapper">
            <img src="{{ asset('front/images/portfolio/item-1.jpg') }}" class="img-fluid" alt="this is a title">
            <div class="overlay">
              <div class="buttons">
              
                <a target="_blank" href="/past-event">Details</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href="#">
                Dew Drop
              </a>
            </h4>
            <p>
              Redesigne UI Concept
            </p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4 col-sm-6">
        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
          <div class="img-wrapper">
            <img src="{{ asset('front/images/portfolio/item-2.jpg') }}" class="img-fluid" alt="this is a title">
            <div class="overlay">
              <div class="buttons">
              
                <a target="_blank" href="/past-event">Details</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href="#">
                Bottle Mockup
              </a>
            </h4>
            <p>
              Lorem ipsum dolor sit.
            </p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4 col-sm-6">
        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
          <div class="img-wrapper">
            <img src="{{ asset('front/images/portfolio/item-3.jpg') }}" class="img-fluid" alt="">
            <div class="overlay">
              <div class="buttons">
                
                <a target="_blank" href="/past-eventl">Details</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href="#">
                Table Design
              </a>
            </h4>
            <p>
              Lorem ipsum dolor sit amet.
            </p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4 col-sm-6">
        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
          <div class="img-wrapper">
            <img src="{{ asset('front/images/portfolio/item-4.jpg') }}" class="img-fluid" alt="">
            <div class="overlay">
              <div class="buttons">
                
                <a target="_blank" href="/past-event">Details</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href="#">
                Make Up elements
              </a>
            </h4>
            <p>
              Lorem ipsum dolor.
            </p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4 col-sm-6">
        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
          <div class="img-wrapper">
            <img src="{{ asset('front/images/portfolio/item-5.jpg') }}" class="img-fluid" alt="">
            <div class="overlay">
              <div class="buttons">
              
                <a target="_blank" href="/past-event">Details</a>

              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href="#">
                Shoping Bag Concept
              </a>
            </h4>
            <p>
              Lorem ipsum dolor.
            </p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4 col-sm-6">
        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
          <div class="img-wrapper">
            <img src="{{ asset('front/images/portfolio/item-6.jpg') }}" class="img-fluid" alt="">
            <div class="overlay">
              <div class="buttons">
              
                <a target="_blank" href="/past-event">Details</a>
              </div>
            </div>
          </div>
          <figcaption>
            <h4>
              <a href="#">
                Caramel Bottle
              </a>
            </h4>
            <p>
              Lorem ipsum dolor.
            </p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section> <!-- #works -->
<!--
==================================================
Portfolio Section Start
================================================== -->






<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
          <h2>
            ABOUT ME
          </h2>
          <p>
            Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of
            Web Design from the World University.And scrambled it to make a type specimen book. It has survived not only
            five centuries
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus
            impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
          </p>
        </div>

      </div>
      <div class="col-md-6 col-sm-6">
        <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
          <img src="{{ asset('front/images/about/about.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</section> <!-- /#about -->


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
            </section>


@endsection