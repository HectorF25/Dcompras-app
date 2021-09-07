<!DOCTYPE html> html>
    <html>
    <head>
        <meta charset="UTF-8"/>
        <title>Dcompras | Adminsitrador</title>
    <link rel="apple-touch-icon" href="../../../../App/assets/img/Recurso 1LogoD.png"> 
    <link rel="shortcut icon" href="../../../../App/assets/img/Recurso 1LogoD.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-10">
        <a class="nav-link" href="../perfiladmin/administrador/AjustesPerfil.phps"><i class="fa fa- user"></i>Mi Perfil! <?php echo  ' ' .strtoupper($_SESSION[ 'correo']); ?></a>
            <h1><?php echo  ' ' .strtoupper($_SESSION[ 'correo']); ?></h1>   
      <h3>Perfil</h3>
      <hr width="100%" color="black">
      
      <div class ="card-header">
          <label class="form-control">Nombres</label>
          <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control">

      </div>
      <div class ="card-header">
          <label class="form-control">Apellidos</label>
          <input type="text" name="apellidoUsuario" id="apellidoUsuario" class="form-control">   
      </div>
      <div class ="card-header">
          <label class="form-control">Contraseña</label>
          <input type="password" name="contraseñaUsuario" id="contraseñaUsuario" class="form-control">   
      </div>
      <div class ="card-header">
          <label class="form-control">Correo Electronico</label>
          <input type="password" name="correoUsuario" id="correoUsuario" class="form-control">   
      </div>
      <div class ="card-header">
          <label class="form-control">Fecha Nacimiento</label>
          <input type="date" name="fechaNac" id="apellidoUsuario" class="form-control">   
      </div>
      <div class ="card-header">
          <label class="form-control">Documento de Identidad</label>
          <input type="number" name="documentoUsuario" id="documentoUsuario" class="form-control">   
      </div>
      <div class ="card-header">
          <label class="form-control">Estado</label>
          <input type="readonly" name="documentoUsuario" id="documentoUsuario" class="form-control">   
      </div>
      <div class ="card-header">
          <label class="form-control">Dirección</label>
          <input type="text" name="documentoUsuario" id="documentoUsuario" class="form-control">   
      </div>
      <div class ="card-header">
          <label class="form-control">Tipo Documento</label>
          <input type="text" name="documentoUsuario" id="documentoUsuario" class="form-control">   
      </div>
      <div class ="card-header">
          <label class="form-control">Perfil</label>
          <input type="readonly" name="documentoUsuario" id="documentoUsuario" class="form-control">   
      </div>