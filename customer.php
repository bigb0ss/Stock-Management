<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DataBase</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <style>
  tr{
    text-align: center;
  }
  td{
    padding: 20px;
  }
  .t_table{
    padding: 0.5px;
  }
  .tabl{
    overflow-y:auto;
  }
  input{
    border-radius: 12px;
  }
  </style>
  <body>

      <h1 align="center">Available Books</h1>
      <div class="tabl">
    <?php
        $con= mysql_connect("sql305.playhosting.cf","lltyl_21334311","k.s.charan");
        $db=mysql_select_db("lltyl_21334311_books");

        $qry=mysql_query("select * from books");
        echo "<table class='table-bordered container bg-success'  align='center'><tbody>";
        while($row=mysql_fetch_array($qry))
        {
          $id=$row['ID'];
          $name=$row['Name'];
          $price=$row['Price'];
          $stock=$row['Stock'];
          $type=$row['Type'];

          echo "<tr><td>ID : </td><td>".$id."</td><td>Name : </td><td>".$name."</td><td>Type : </td><td>".$type."</td><td>Price : </td><td>".$price."</td><td>Stock : </td><td>".$stock."</td></tr>";
        }
        echo "</tbody></table>";
     ?>
   </div>
   <p class="container bg-danger"><br></p>
     <br>
     <br>
     <form method="post" action="customer.php">
       <fieldset align="center">
         <label>Enter book to search </label>
         <input type="text" name="s_name" placeholder="Book Name">
         <input type="submit" class="btn btn-warning"  name="search1" value="search" >
       </fieldset>
     </form>
     <?php
     if(isset($_POST['search1'])){
       $name=$_POST['s_name'];
       $qry=mysql_query("select * from books where Name='$name' ");
       //echo $name;
       echo "<table class='table-bordered container bg-success'  align='center'><tbody>";
       while($row=mysql_fetch_array($qry))
       {
         $id=$row['ID'];
         $name=$row['Name'];
         $price=$row['Price'];
         $stock=$row['Stock'];
         $type=$row['Type'];

         echo "<tr><td>ID : </td><td>".$id."</td><td>Name : </td><td>".$name."</td><td>Type : </td><td>".$type."</td><td>Price : </td><td>".$price."</td><td>Stock : </td><td>".$stock."</td></tr>";
       }
       echo "</tbody></table>";
     }
      ?><br><br>
      <p class="container bg-danger"><br></p><br>
     <form method="post" action="customer.php">
       <fieldset align="center">
         <table align="center" class="t_table"><tbody>
         <tr><td aling="center"><input type="radio" name="r1" value="Educational">Educational</td>
         <td aling="center"><input type="radio" name="r1" value="Comics">Comics</td></tr>
         <tr><td aling="center"><input type="radio" name="r1" value="Encyclopedia">Encyclopedia</td>
         <td aling="center"><input type="radio" name="r1" value="Magazine">Magazine</td></tr>
         <tr ><td colspan="2" aling="center"><input type="submit" name="filter" class="btn btn-warning btn-block" value="filter"></td></tr>
       </fieldset>
     </form>
     <?php
     if(isset($_POST['filter'])){
       if(isset($_POST['r1'])){
        $name=$_POST['r1'];
       $qry=mysql_query("select * from books where Type='$name' ");
       echo "<table class='table-bordered container bg-success'  align='center'><tbody>";
       while($row=mysql_fetch_array($qry))
       {
         $id=$row['ID'];
         $name=$row['Name'];
         $price=$row['Price'];
         $stock=$row['Stock'];
         $type=$row['Type'];

         echo "<tr><td>ID : </td><td>".$id."</td><td>Name : </td><td>".$name."</td><td>Type : </td><td>".$type."</td><td>Price : </td><td>".$price."</td><td>Stock : </td><td>".$stock."</td></tr>";
       }
       echo "</tbody></table>";
     }
     }

      ?><br><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
