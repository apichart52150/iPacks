<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page Not found</title>
  
  <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body style="height:100vh">
  <div class="h-100 d-flex align-items-center justify-content-center">
    <div class="card">
      <div class="card-body p-4">
        <div class="text-center">
          <h1>404</h1>
          <h3>Page Not Found</h3>
        </div>
        <p>
          We have not found what you are looking for.
          <br>
          We have put our robots to search.
        </p>
        <div class="d-flex justify-content-center">
          <a href="{{ route('user_home') }}" class="w-50">
            <button class="btn btn-warning w-100">Go Home</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>