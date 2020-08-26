<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>MyBookHouse</title>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap');

      *{margin: 0;padding: 0;}
      body{margin: 0;padding: 0;background: #bdc3c7;}

      .header{padding: 0;margin: 0;}
      @media(min-width: 992px){
      	.header nav{padding-right: 15%;padding-left: 15%;}
      	
      	.header .navbar-collapse{margin-left: 200px;}
      
      }
      @media(max-width: 992px){
      	.header nav{padding-right: 20px;padding-left: 0;}
      	.header .navbar-collapse{margin-left: 10%;}
      	.brand-img2{position: relative;left: -290px;}
      	.navbar-brand2 span{position: relative;left: -290px;color: #fff;font-size: 30px;font-weight: 900;}
      }
      
      .header .navbar-brand{}
      .header .navbar-brand img{position: absolute;top: 0;}

      @media (max-width: 768px) {
      	.brand-img2{display: block;position: relative;left: -190%;}
      	.navbar-brand2 span{position: absolute;color: #fff;font-size: 22px;font-weight: 900;left: 90px;top: 25px;}
      }
      
      

      .showcase{padding: 0;margin: 0;}
      .showcase .carousel-inner{height: 574px;}
      .showcase img{height: 574px;}

      .book-info{background: #2ecc71;width: 100%;height: auto;}
      .book-info p{color: #fff;font-family: 'Do Hyeon', sans-serif;font-size: 20px;}
      .book-info .img-container{display: flex;justify-content: center;align-items: center;}
      .book-info img{width: 100%;height: 300px;padding: 10px;}

    </style>
  </head>
  <body>
    <!-- header -->
    <div class="container-fluid header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary text-light">
      	<div class=""></div>
        <a class="navbar-brand" href="#"><img src="{{ asset('images/my_logo.png') }}" class="brand-img d-lg-block d-md-none d-sm-none d-none"></a>
        <a class="navbar-brand2 d-block d-sm-block d-md-block d-lg-none" href="#"><img src="{{ asset('images/my_logo2.png') }}" class="brand-img2 "> <span style="display: inline-block;">MyBookHouse</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
	</div><!-- end of container-fluid -->
	
	<!-- showcase -->
	<div class="container-fluid showcase">
		<img class="w-100" src="{{ asset('images/Computer-Science-Books-2-1200x627.png') }}" alt="showcase-img">
		
	</div><!-- end of container-fluid -->

	<!-- books info -->
	<div class="container-fluid book-info">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 col-12">
					<p>MyBookHouse is a library which contains every book related to computer science / information technology. We have included all the books for college students, coders and professionals.</p>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-12 img-container">
					<img src="{{ asset('images/img-container.png') }}">
				</div>
			</div><!-- end of row -->
		</div><!-- end of container -->
	</div><!-- end of container-fluid -->

	      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>