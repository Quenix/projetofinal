    <?php
      if($_SESSION['nivel'] == 1)
      {
        include('navbar_admin.php');
      }else{
        if($_SESSION['nivel'] == 2)
        {
          include('navbar.php');
        }else{
          header("location:index.php");
        }
      }
    ?>