    <div style="background-color: red;">
    <div class="container"> <!-- Add a container for limited content width -->
        <h1 style="text-align: center; margin-bottm:10px">Schedule Event</h1>

            
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Event Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="venue">Event Venue:</label>
            <input type="text" class="form-control" id="venue" name="venue">
        </div>

        <div class="form-group">
            <label for="date">Event Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="description">Event Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="type">Event Type:</label>
            <select class="form-control" id="type" name="type">
                <option value="Party">Party</option>
                <option value="Exhibition">Exhibition</option>
                <option value="Conference">Conference</option>
                <option value="Workshop">Workshop</option>
                <!-- Add more event types as needed -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Event</button>
        </form>
    </div> <!-- Close the container -->
</div>

<hr style="background-color: white;">