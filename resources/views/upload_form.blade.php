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
      .red{color: red;}
    </style>
  </head>
  <body>

    <div class="container-fluid">
    <div class="row justify-content-center">
        <h2 class="card-header w-100 m-1 text-center">Upload Book (Only pdf)</h2>
    </div>
    <div class="row justify-content-center">
    {{-- enctype attribute is important if your form contains file upload --}}
    {{-- Please check https://www.w3schools.com/tags/att_form_enctype.asp for further info --}}
        <form class="m-2" method="post" action="/file-upload" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
{{--                <label for="name">File Name</label>--}}
                <input type="text" class="form-control" id="name" placeholder="Enter Book Name" name="name" required>
            </div>
            <div class="form-group">
                <label for="image">Choose thumbnail<span class="red">*</span>:</label>
                <input id="image" type="file" name="image" accept="image/jpeg, image/png" required>
            </div>
            <div class="form-group">
                <label for="image">Choose File<sup class="red">*</sup>:</label>
                <input id="pdf" type="file" name="pdf" accept="application/pdf" required>
            </div>
            <div class="form-group">
              <label for="select">Book Type<span class="red">*</span>:</label>

              <select name="type" id="type" required>
              <option value="College">College</option>
              <option value="Data_Structure">Data_Structure</option>
              <option value="Programming(C,C++,Java)">Programming(C,C++,Java)</option>
              <option value="Python">Python</option>
              <option value="Web_Development">Web_Development</option>
              <option value="Office">Office</option>
            </select>
          </div>
            <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
        </form>
    </div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
