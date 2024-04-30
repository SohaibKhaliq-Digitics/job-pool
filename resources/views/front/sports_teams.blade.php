@extends('front.layout.layout')
@section('content')

<!--==================================================Global Page Section Start==================================================-->
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>Sports Gala</h2>
          <div class="portfolio-meta">
            <span>ALL YOURS SPORTS GALA TEAMS INFO</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#Page header-->

<section id="works" class="works">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form method="get">
          @csrf
          <div class="row justify-content-center text-left">
            <div class="form-group col-sm-3 flex-column d-flex">
              <label for="year">Year:</label>
              <select class="form-control" id="year">
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <!-- Add more options as needed -->
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row" id="filterData">
      @foreach($teams as $team)
      <div class="col-md-4 col-sm-6">
        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
          <div class="img-wrapper">
            <img src="{{ asset('sports_team_banner/' . $team->banner) }}" class="img-fluid" style="width: 350px; height: 300px; object-fit: cover;" alt="">
            <div class="overlay">
              <div class="buttons">
              <button id="detailsButton" class="btn btn-primary" data-value="{{ $team->id }}">Details</button>
              </div>
            </div>
          </div>
          <figcaption>
            <h4><a href="#">{{ $team->name }}</a></h4>
            <p>{{ $team->description }}</p>
          </figcaption>
        </figure>
      </div>
      @endforeach
    </div>

    <div class="row1">
      
    </div>








  <div id="teams-container"></div>


</section>

<div class="modal" id="projectModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Your Project</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <!-- Your modal body content here -->
      </div>
    </div>
  </div>
</div>

<!-- Call To Action Section Start -->
<section id="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h2>
          <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
          <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection




    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>


document.addEventListener('DOMContentLoaded', function() {
    var yearSelect = document.getElementById('year');
    yearSelect.addEventListener('change', function() {
        var year = this.value;
        fetch('/get-teams/' + year)
            .then(response => response.json()) // Parse response as JSON
            .then(teamsData => {
                let container = document.querySelector('.row'); // Get the container element

                // Clear previous data in the container
                container.innerHTML = '';

                // Iterate over each team in the JSON data
                teamsData.forEach(team => {
                    // Create a div element for each team
                    let teamDiv = document.createElement('div');
                    teamDiv.className = 'col-md-4'; // Adjust column size to fit three divs in one row

                    // Set the inner HTML of the div with team information
                    teamDiv.innerHTML = `
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                            <div class="img-wrapper">

                                <img src="{{ asset('sports_team_banner')}}/${team.banner}" class="img-fluid" style="width: 350px; height: 300px; object-fit: cover;" alt="${team.banner}">
                                <div class="overlay">
                                    <div class="buttons">
                                        <button id="detailsButton" class="btn btn-primary" data-value="${team.id}">Details</button>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4><a href="#">${team.name}</a></h4>
                            </figcaption>
                        </figure>
                    `;

                    // Append the team div to the container
                    container.appendChild(teamDiv);
                });
            })
            .catch(error => console.error('Error:', error));
    });
});



//////////////////////////////




document.addEventListener('DOMContentLoaded', function() {
    // 1. Add event listener to the details button
    var detailsButton = document.getElementById('detailsButton');
    detailsButton.addEventListener('click', function() {
        // 2. Extract data value from the button
        var teamId = this.getAttribute('data-value');
        
        // 3. Make an AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/fetch-details?teamId=' + teamId, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // 4. Once data is fetched successfully, handle the response
                    var responseData = JSON.parse(xhr.responseText);
                    // Handle the fetched data as needed
                } else {
                    // Handle error
                }
            }
        };
        xhr.send();
    });
});












</script>