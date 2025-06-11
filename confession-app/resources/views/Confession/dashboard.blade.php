<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <style>
    .card-body{
        background-color: #f8f9fa;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
        border: 1px solid #272727;
        width: 250px;
        height: 200px;
    }
    </style>
</header>
<body>
<main>
    <div class="nav justify-content-end bg text-bg-secondary p-2">
    <div class="mt-2 ">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
                <button type="submit" class="btn btn-primary" >
                    Log out
                </button>
        </form>
    </div>
</div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                  
                       
                            @foreach ($cons as $confession)
                            <div class="card-body p-1 border m-2 shadow-lg ">
                                <p><strong>{{ $confession->id}}</strong></p>
                                <p>{{ $confession->confess}}</p>
                            </div>
                            @endforeach
                       
                
            </div>

        </div>
</main>
</body>
</html>