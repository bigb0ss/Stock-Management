<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sales Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
<style>
input{
  border-radius: 12px;
}
</style>
  <body>
    <h1>Sales Admin Page</h1>
    <form action="post" method="Login.php">
    <table align="center">
      <tbody>
        <tr>
          <td><input type="text" name="user" placeholder="UserName" value="stockadmin"></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
          <td><input type="password" name="pass" placeholder="Password" value="admin1234"></a></td>
        </tr>
      </tbody>
    </table>
    <hr>
    <table align="center">
      <tbody>
        <tr>
          <td align="center"><a type="submit" onclick="click1()" class="btn btn-success">Login In</a></td>
        </tr>
      </tbody>
    <table>
    </form>
    <!--  <?php
        $user=mysql_real_escape_string($_POST['user'])
        echo  $user;
      ?>-->
      <script type="text/javascript">
      function click1()
      {
        var s="stockadmin";
        var p="admin1234";
        if(s.equals("stockadmin"))
          window.alert("true")
        if(p.equals("admin1234"))
          window.alert("pass true");
      }
      </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>

</html>
