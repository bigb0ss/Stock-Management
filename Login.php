
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Control Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <style>
  input{
    color:black;
    border-radius: 12px;
  }
  </style>
    <body>
    <h1>Control Panel</h1>
    <br>
    <form action="Login.php" class="jumbotron-fluid bg-success" method="post">
      <fieldset>
        <br>
        <h1 align="center"><u> Add New Stock </u></h1><br>
        <?php include('server.php'); ?>
    <table align="center">
    <tbody>
    <tr>
    <td><input type="text" name="bname" placeholder="name" required></td>
  </tr><tr><td><br></td></tr>
    <tr>
    <td><input type="text" name="btype" placeholder="type" list="types" required>
      <datalist id="types">
        <option value="Educational">
        <option value="Comics">
        <option value="Encyclopedia">
        <option value="Magazine">
      </datalist>

    </td>
    </tr><tr><td><br></td></tr>
    <tr>
    <td><input type="text" name="bprice" placeholder="price" required></td>
    </tr><tr><td><br></td></tr>
    <tr>
    <td><input type="text" name="bstock" placeholder="stock" required></td>
    </tr><tr><td><br></td></tr>
    <tr align="center">
      <td><input type="submit" name="loginbtn" class="btn btn-warning" value="add"></td>
    </tr><tr><td><br></td></tr>
    </tbody>
    </table>
  </fieldset>
  </form>
  <br/><br/>
  <form method="post" action="Login.php" class="jumbotron-fluid bg-success">
    <h1 align="center"><u> Update Existing Stock</u></h1>
    <table align="center">
      <tbody>
        <tr><td><br></td></tr>
      <tr>
        <td><input type="text" placeholder="Book Name" name="u_bname"></td>
      </tr><tr><td><br></td></tr>
      <tr>
        <td><input type="text" placeholder="New Stock" name="u_bstock"></td>
      </tr><tr><td><br></td></tr>
      <tr>
        <td align="center"><input type="submit" class="btn btn-warning" value="Update Stock" name="update"></td>
      </tr><tr><td><br></td></tr>
    </tbody>
  </table>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
