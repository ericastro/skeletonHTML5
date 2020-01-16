<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

	<title>CRUD</title>

	<script type="text/javascript">
		function IsEmail(email) {
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				return regex.test(email);
		}

		function EscondeAlerta() {
			$("#email-alert").css("visibility","hidden");
		}

		function MostraAlerta() {
			$("#email-alert").css("visibility","visible");
		}

		$(document).ready(function(){
			let email = document.getElementById("email");

			$('#email[type="email"]').keyup(function(){
				if(IsEmail(email.value))
				{
					EscondeAlerta();
				}
				else
				{
					MostraAlerta();
				}
			});
			

			email.onblur = function(){
				if ( IsEmail( email.value ) )
				{
					EscondeAlerta();
				}
				else
				{
					MostraAlerta();
				}
			}

		});
	</script>

</head>
<body>
	<div class="col-sm-12">
		<h1>CRUD</h1>
		<form>
			<div class="form-group">
				<label for="Email">Endereço de email</label>
				<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Seu email">
				<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
				<div id="email-alert" class="alert alert-danger" role="alert" style="visibility: hidden;">este não é um email válido</div>
			</div>
			<div class="form-group">
				<label for="Senha">Senha</label>
				<input type="password" class="form-control" id="Senha" placeholder="Senha">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Clique em mim</label>
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
</body>

	<!-- JavaScript (Opcional) -->
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
