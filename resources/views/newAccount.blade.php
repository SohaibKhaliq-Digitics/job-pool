<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
    </style>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="post" action="{{ route('admin.register') }}">
@csrf
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="name" value="New1" class="form-control form-control-lg" name="name" />
                        <label class="form-label" for="name">Name</label>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="email" id="email" value="New1@gmail.com" class="form-control form-control-lg" name="email" />
                        <label class="form-label" for="email">Email</label>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="tel" id="phone" value="0312 7294145" class="form-control form-control-lg" name="phone" />
                        <label class="form-label" for="phone">Phone</label>
                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="password" id="password" value="12345678" class="form-control form-control-lg" name="password" />
                        <label class="form-label" for="password">Password</label>
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

        

              <div class="mt-4 pt-2">
                <input data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>



            </form>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <a href="{{ route('admin.login') }}" class="btn btn-primary">Login</a>
                </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>