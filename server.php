<html>
<body>
<?php
    $con= mysqli_connect("sql305.playhosting.cf","lltyl_21334311","k.s.charan","lltyl_21334311_books");

    if(isset($_POST['loginbtn'])){
      $price=$_POST['bprice'];
      $type=$_POST['btype'];
      $stock=$_POST['bstock'];
      $name=$_POST["bname"];

      $query="insert into books(Name,Type,Stock,Price) values('$name','$type','$stock','$price');";
      if(mysqli_query($con,$query)){
        $error="Book already present, kindy use Update";
      }
      mysqli_close($con);
    }
    if(isset($_POST['update'])){
        $name=$_POST['u_bname'];
        $stock=$_POST['u_bstock'];

        $query="update books set Stock='$stock' where Name='$name'";
        if(!mysqli_query($con,$query)){
          echo "<p class='container bg-danger'>Book Already present , Try updating using the book name</p>";
        }
        mysqli_close($con);

    }
?>
</body>
</html>
