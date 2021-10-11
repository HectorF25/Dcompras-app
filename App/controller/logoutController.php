

<?php 
  session_start();
  include '../../Config/appConfig.php';
  include ('../model/chatModel.php');
  $chat = new Chat();
  $chat->updateUserOnline($_SESSION['idUsuario'], 0);
  
  $DIR_PUBLIC = APP_PUBLIC_DIR;
  
  session_destroy();
  echo "<script>location.href = '${DIR_PUBLIC}Views/index';  </script>";

     exit();

?>
