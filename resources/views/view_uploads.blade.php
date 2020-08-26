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

    </style>
  </head>
  <body>



<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="cs-p-1">Name</th>
                <th class="cs-p-1">Type</th>
                <th class="cs-p-1">Thumbnail</th>
                <th class="cs-p-1">URL</th>
            </tr>
        </thead>

        @forelse($images as $image)
            <tr>
                <td class="cs-p-1">{{ $image->Book_Name }}</td>
                <td class="cs-p-1">{{ $image->Book_Type }}</td>
                <td class="cs-p-1"><a href="{{ $image->Book_Thumbnail }}">View Image</a></td>
                <td class="cs-p-1"><a href="{{ $image->Book_Link }}">View pdf</a></td>
            </tr>
            @empty
            <p>No Images at the moment</p>
        @endforelse
    </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
