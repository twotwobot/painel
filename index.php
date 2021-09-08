<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesse sua conta | Index</title>
    <link rel="stylesheet" href="css/style.css"></script>
</head>
<body>

</body>
 
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <div class="container" id="container">
	<div class="form-container sign-up-container">
      <div class="card-title">Faça seu login</div>
      <form action="login.php" method="POST">

<input name="email" name="email" class="form-control" placeholder="example@gmail.com"></input>
<input type="password" name="senha" id="senha" class="form-control" placeholder="insira sua senha"></input>
</div>
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" onclick="show()" >Mostrar senha
      </label>
    
</div> </br>
<input type="submit" class="btn btn-dark">
<a href="registro.php" class="btn btn-warning">Registrar-se</button></a>
</input>
<br></br>
<footer>
	<p>
		<code>HTML5, CSS3 e Bootstrap 4.</code>
	</p>
</footer>
			
<?php
					if(isset($_SESSION['nao_autenticado'])):
					?>
					<br>
					</br>
                  <div class="alert alert-danger">
    <strong>Alerta!</strong> Seus dados estão incorretos nome/senha.
  </div>
				
					<?php					
					endif;
					unset($_SESSION['nao_autenticado']);
					?>
					
                      
                        </form>
                    </div>
				
            </div>
			<script>
  function show() {
  var senha = document.getElementById("senha");
  if (senha.type === "password") {
    senha.type = "text";
  } else {
    senha.type = "password";
  }
}
</script>
        </div>
    </section>
</body>

</html>