<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    .form-register{
      border: 1px solid;
      padding: 30px;
      border-radius: 10px;
    }
  </style>
  <body>
   <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <div class="form-register">
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session ('message') }}
                </div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        <form action="" method="POST" style="width: 500px;">
        @csrf
        <div class="mb-3 text-center">
            <h3>REGISTER</h3>
        </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Number Handpone</label>
                <input type="number" name="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Addres</label>
                <textarea type="text" name="address" class="form-control" id="address"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2 w-50" type="submit">Send</button>
            </div>
            <div class="mb-3">
              <p>Have an account? <a href="/login" style="text-decoration: none;">Login</a></p>
            </div>
          </form>
    </div>
   </div>

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>