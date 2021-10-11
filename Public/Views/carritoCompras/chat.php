<?php 
include "./modules/headerCliente.php";
?>
<title>Sistema de chat en vivo con Ajax, PHP y MySQL</title>
<link href="assets/css/chatUser.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="chat.js"></script>
<style>
.modal-dialog {
    width: 400px;
    margin: 30px auto;	
}
</style>
<div class="container">		
	<?php if(isset($_SESSION['idUsuario']) && $_SESSION['idUsuario']) { ?> 	
		<div class="chat">	
			<div id="frame">		
				<div id="sidepanel">
					<div id="profile">
					<?php
					$loggedUser = $chat->getUserDetails($_SESSION['idUsuario']);
					echo '<div class="wrap">';
					$currentSession = '';
					foreach ($loggedUser as $user) {
						$currentSession = $user['current_session'];
						echo '<img id="profile-img" src="../perfiladmin/administrador/'.$user['imgUsuario'].'" class="online" alt="" />';
						echo  '<h5 style="padding-left: 70px; padding-top: 11px;">'.$user['nombreUsuario'].'</h5>';
							echo '<div id="status-options">';
							echo '<ul>';
								echo '<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>';
								echo '<li id="status-away"><span class="status-circle"></span> <p>Ausente</p></li>';
								echo '<li id="status-busy"><span class="status-circle"></span> <p>Ocupado</p></li>';
								echo '<li id="status-offline"><span class="status-circle"></span> <p>Desconectado</p></li>';
							echo '</ul>';
							echo '</div>';
					}
					echo '</div>';
					?>
					</div>

					<div id="contacts">	
					<?php
					echo '<ul>';
					$chatUsers = $chat->chatUsers($_SESSION['idUsuario']);
					foreach ($chatUsers as $user) {
						$status = 'offline';						
						if($user['onlineUsuario']) {
							$status = 'online';
						}
						$activeUser = '';
						if($user['idUsuario'] == $currentSession) {
							$activeUser = "active";
						}
						echo '<li id="'.$user['idUsuario'].'" class="contact '.$activeUser.'" data-touserid="'.$user['idUsuario'].'" data-tousername="'.$user['nombreUsuario'].'">';
						echo '<div class="wrap">';
						echo '<span id="status_'.$user['idUsuario'].'" class="contact-status '.$status.'"></span>';
						echo '<img src="../perfiladmin/administrador/'.$user['imgUsuario'].'" alt="" />';
						echo '<div class="meta">';
						echo '<p class="name">'.$user['nombreUsuario'].'<span id="unread_'.$user['idUsuario'].'" class="unread">'.$chat->getUnreadMessageCount($user['idUsuario'], $_SESSION['idUsuario']).'</span></p>';
						echo '<p class="preview"><span id="isTyping_'.$user['idUsuario'].'" class="isTyping"></span></p>';
						echo '</div>';
						echo '</div>';
						echo '</li>'; 
					}
					echo '</ul>';
					?>
					</div>
				</div>			
				<div class="content" id="content"> 
					<div class="contact-profile" id="userSection">	
					<?php
					$userDetails = $chat->getUserDetails($currentSession);
					foreach ($userDetails as $user) {										
						echo '<img src="../perfiladmin/administrador/'.$user['imgUsuario'].'" alt="" />';
							echo '<h5 style="padding-left: 50px; padding-top: 16px;">'.$user['nombreUsuario'].'</h5>';
							echo '<div class="social-media">';
								echo '<i class="fa fa-facebook" aria-hidden="true"></i>';
								echo '<i class="fa fa-twitter" aria-hidden="true"></i>';
								 echo '<i class="fa fa-instagram" aria-hidden="true"></i>';
							echo '</div>';
					}	
					?>						
					</div>
					<div class="messages" id="conversation">		
					<?php
					echo $chat->getUserChat($_SESSION['idUsuario'], $currentSession);						
					?>
					</div>
					<div class="message-input" id="replySection">				
						<div class="message-input" id="replyContainer">
							<div class="wrap">
								<input type="text" class="chatMessage" id="chatMessage<?php echo $currentSession; ?>" placeholder="Escribe un mensaje..." />
								<button class="submit chatButton" id="chatButton<?php echo $currentSession; ?>"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>	
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	<?php } else { ?>
	<?php } ?>
</div>	
