<?php
    // function execute select statement
  function query($sql){
      $con = mysqli_connect('db4free.net','sovann1234','sovann1234','awesome');
      //$con = mysqli_connect('localhost', 'root', '', 'awesomeshop');
      $result = mysqli_query($con, $sql);
      mysqli_close($con);
      return $result;
      
  }

?>