<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Moh. Berlian Nusantara</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Top navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog") ?>">Blog</a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container">
      <a href="<?php echo base_url("index.php/Blog/add_view") ?>" class="btn btn-primary">Tambah Blog</a>
      <br>
      <br>
      <ul class="list-unstyled">
      <?php foreach ($records as $key => $value): ?>
        <li class="media">
          <a href="<?php echo base_url('index.php/Blog/byId/'.$value['id']) ?>">
            <img src="<?php echo base_url() ?>uploads/<?php echo $records[0]['image_file']  ?>" alt="Generic placeholder image" width="200px" height="200px" class="">
          </a>
          <div class="media-body">
            <table class="table">
              <tr>
                <td><h6 class="text-muted"><?php echo $value['date'] ?></h6></td>
              </tr>
              <tr>
                <td><h5 class="mt-0 mb-1"><?php echo $value['title'] ?></h5></td>
              </tr>
              <tr>
                <td><?php echo $value['content'] ?></td>
              </tr>
              <tr>
                <td><a href="<?php echo base_url('index.php/Blog/byId/'.$value['id']) ?>">View Details</a></td>
              </tr>
              <tr>
                <td>
                  <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Blog/update_view/'.$value['id']) ?>">Update</a>
                  <a class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/Blog/delete_action/'.$value['id']) ?>">Delete	</a>
              </td>
              </tr>
            </table>
          </div>
      </li>
      <?php endforeach ?>
      </ul>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
