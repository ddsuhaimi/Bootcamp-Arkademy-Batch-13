<!DOCTYPE html>
<html lang="en">
    <?php require_once 'connections.php'; ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />

    <title>Jawaban No. 6c||Soal Arcademy Bootcamp 13-1</title>
  </head>
  <body>
    <!-- Just an image -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" alt="" />
        <span class="arkademy">Arkademy </span
        ><span class="coffee">Coffee Shop</span>
      </a>
      <button class="btn my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal"> Add</button>
    </nav>
    <div class="container">
      <table class="table head-silver">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Cashier</th>
            <th scope="col">Product</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php
          
            $sql = "SELECT product.id, product.name AS productname, product.price AS productprice, cashier.name AS cashiername, category.name AS categoryname FROM product JOIN cashier ON product.id_cashier=cashier.id JOIN category ON product.id_category=category.id";
            $result = $connect->query($sql);
            $no = 1;
 
            if($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 echo "<tr>
                 <td>".$no++."</td>
                 <td>".$row['cashiername']."</td>
                 <td>".$row['productname']."</td>
                 <td>".$row['categoryname']."</td>
                 <td>".$row['productprice']."</td>
                 
                 <td>
                 <a class='edit-link' href='edit.php?id=".$row['id']."'>Edit</a> | 
                 <a class='delete-link' href='delete.php?id=".$row['id']."'>Delete</a>
                 </td>
                 </tr>";
             }
         } else {
             echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
         }
         ?>
        </tbody>
      </table>
      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group add-form">
        <select class="form-control">
        <?php
          
          $sql2 = "SELECT * from cashier";
          $result = $connect->query($sql2);
          $no = 1;

          if($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               echo "<option>".$row['name']."</option>";
           }
       }

       ?>
          
        </select>
        <hr>
        <select class="form-control">
        <?php
          
          $sql = "SELECT * FROM product";
          $result = $connect->query($sql);
          $no = 1;

          if($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               echo "<option>".$row['name']."</option>";
           }
          }
        ?>
        </select>
        <hr>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Drink">
        <hr>
        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rp. 10.000">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
