<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/confession.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <title>Register Page</title>

</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class = "py-5 text-center container">
        <div class = "row py-lg 5">
            <div class="col-lg-6 col-md-8 mx-auto">

            <form action="" method="POST" class="p-5 border-primary rounded-3 shadow-lg">
            @csrf
                <h1 class="mb-2">Registration</h1>
            <div class="row align-items-center mb-3">
                <div class="col-4 text-end">
                <label for="name" class="form-label mb-0">Name</label>
                </div>
                <div class="col-8">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your name" required />
                </div>
            </div>

            <div class="row align-items-center mb-3">
                <div class="col-4 text-end">
                <label for="username" class="form-label mb-0">Username</label>
                </div>
                <div class="col-8">
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required />
                </div>
            </div>

            <div class="row align-items-center mb-3">
                <div class="col-4 text-end">
                <label for="password" class="form-label mb-0">Password</label>
                </div>
                <div class="col-8">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required />
                </div>
            </div>

                        <div class="row align-items-center mb-3">
                <div class="col-4 text-end">
                <label for="password" class="form-label mb-0">Confirm Password</label>
                </div>
                <div class="col-8">
                <input type="password" class="form-control" id="password" name="password" placeholder="Confirm your password" required />
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-primary mt-3" id="submitConfession">Register</button>
            </div>
            </form>

            </div>
        </div>
    </main>
  

</body>
</html>