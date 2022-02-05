<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Meranda | Add Post</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css'>
  <link rel="stylesheet" href= {{ asset( $path_to_ui . "add_post_editor/style.css") }} >
</head>
<body>
  <!-- partial:index.partial.html -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
      <textarea name="" id="ta-1" cols="30" rows="30"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <a href={{ route('admin.search_post') }} class="btn btn-danger btn-user btn-block">
        CANCEL
      </a>
    </div>
    <div class="col-lg-6">
      <a href={{ route('admin.search_post') }} class="btn btn-primary btn-user btn-block">
        ADD THIS POST
      </a>
    </div>
    
  </div>
  

  <hr>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js'></script>
  <script  src= {{ asset( $path_to_ui . "add_post_editor/script.js") }} ></script>

</body>
</html>
