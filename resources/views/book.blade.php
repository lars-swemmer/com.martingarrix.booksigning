<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/book.css">

    <title>Martin Garrix - Life = Crazy book signing</title>
  </head>
  <body class="presave-hero-background" style="background-image:url('{{ url('/img/hero-bg.jpg') }}');">

    <div class="container book">

      <div class="row mt-4 mb-4">
        <div class="col">
          <h1>LIFE = CRAZY</h1>
          <p class="header">Book singing by Martin Garrix</p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="artwork">
            <img class="img-fluid" src="/img/book-head.jpg">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-10 offset-lg-4 offset-md-3 offset-1 mt-3">
          <p>
            On <span class="white">November 8th</span> I will be in New <span class="white">York City</span> and will bring a limited amount of books with me. Want to buy a copy of <span class="white">LIFE=CRAZY</span> and get it signed by me? Register here!
          </p>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-lg-4 col-md-6 col-10 offset-lg-4 offset-md-3 offset-1">

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          

          {!! Form::open(['url' => '/store']) !!}

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              {!! Form::text('email', '', ['class' => 'form-control']); !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-primary']); !!}

          {!! Form::close() !!}

          <!-- <form> -->
            
            {{-- <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Accept terms?</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> --}}

          <!-- </form> -->



          
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>