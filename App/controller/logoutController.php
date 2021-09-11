

<?php 
  session_start();
  include '../../Config/appConfig.php';
  $DIR_PUBLIC = APP_PUBLIC_DIR;
  session_destroy();
  echo "<script>location.href = '${DIR_PUBLIC}Views/index';  </script>";

     exit();

?>
