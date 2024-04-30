<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $company->name }}</title>
    <!-- Bootstrap CSS link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .company-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .company-logo {
    float: left;
    margin-right: 20px;
    margin-bottom: 20px;
}

.logo-smaller {
    width: 100px; /* Adjust the width as needed */
    height: 100px; /* Adjust the height as needed */
}
        .company-name {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .company-description {
            margin-bottom: 20px;
        }
        .website-link {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="company-info">
                <div class="company-logo">
    <img src="{{ asset('comapny images/' . $company->logo) }}" alt="{{ $company->name }} Logo" class="img-fluid rounded-circle logo-smaller">
</div>
                    <div class="company-details">
                        <h1 class="company-name">{{ $company->name }}</h1>
                        <p class="company-description">{{ $company->company_des }}</p>
                        <p class="website-link"><a href="{{ $company->website }}">{{ $company->website }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS scripts (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
