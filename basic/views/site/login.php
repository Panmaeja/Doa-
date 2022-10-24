<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>


    <link href="css/login.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="auxiliar.php?login=1" method="POST" >
      <img class="mb-4" src="images/marca.png" alt="" width="300" height="300">
      <h1 class="h3 mb-3 font-weight-normal">Entrar</h1>
      <label for="email" class="sr-only">Email</label>
      <input type="email" id="email" class="form-control" name="email" required autofocus>
      <label for="senha" class="sr-only">Senha</label>
      <input type="password" id="senha" class="form-control" name="senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar senha
        </label>
		<div class="form-group">
			<input name="enviar" id="enviar" type="submit" value="Enviar"  class="btn btn-primary " />
			<input name="limpar" id="limpar" type="reset"  value="Limpar"  class="btn btn-info " />
		</div>
    </form>
  </body>
</html>