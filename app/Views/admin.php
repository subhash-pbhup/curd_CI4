<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 id="div">Stacked form</h2>
  <form action="/admin/save" method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" value="Subhash" placeholder="Enter email" name="name">
    </div>
    <div class="mb-3">
      <label for="pwd">Mobile:</label>
      <input type="text" class="form-control" id="mobile" value="123546" placeholder="Enter mobile" name="mobile">
    </div>
    <div class="mb-3">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" id="email" value="subhashchandar@gmail.com" placeholder="Enter email" name="email">
    </div>

    <div class="mb-3">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="add" value="Ghaziabad" placeholder="Enter address" name="address">
    </div>

    <div class="mb-3">
      <label for="pwd">File:</label>
      <input type="file" class="form-control" id="file" value="Ghaziabad" name="file">
    </div>
 
    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
  </form>
</div>

<div class="container mt-3">

<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Address</th>
      <th>Action</th>
  
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach($admin_data as $res) { ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $res['name']; ?></td>
      <td><?php echo $res['email']; ?></td>
      <td><?php echo $res['mobile']; ?></td>
      <td><?php echo $res['address']; ?></td>
      <td><img src="file/<?php echo $res['file']; ?>" width="100"></td>
      <td><a href="<?= base_url('admin/delete/'.$res['id']) ?>" class="btn btn-danger btn-sm">Delete</a></td>
  

    </tr>
    <?php } ?>
  
  </tbody>
</table>

</div>

</body>
</html>


<script>

$(document).ready(function(){
    // alert("hello");

    $("#email").css({"color":"red","border-color":"green"});
    $("#div").css({"color":"red","font-size":"20px"});

    let name=$("#name").val();
    let email=$("#email").val();

    let data= {name,email};

    console.log(data);



})

    </script>