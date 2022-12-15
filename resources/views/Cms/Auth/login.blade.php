<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    @stack('styles')
		<link rel="stylesheet" href="{{asset('Cms/Auth/login.css')}}">
    <script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
    <title>CentroCultural</title>
  </head>
  <body>
    <div class="general-container">
      <div class="form">
        <form class="" action="/login" method="POST">
          @csrf
          <img class="icon"src="" alt="">
          <input type="email" name="correo" placeholder="Email">
          <input type="password" name="contraseña" placeholder="Contraseña">
          <button type="submit" name="button"><b>Iniciar Sesion</b></button>
        </form>
      </div>
		</div>
  </body>
</html>
