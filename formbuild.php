<?php include("header.php");?>
<h1 align="center">CADASTRO DE PRÉDIO</h1>
	<form action="resultbuild.php" method="post">
		<table class="table table-borderless">
			<tr>
				<td>NOME</td>
				<td><input class="form-control form-control-lg" type="text" name="nome"></td>
			</tr>
			<tr>
				<td>PREDIO</td>
				<td><input class="form-control form-control-lg" type="number" name="predio"></td>
			</tr>				
			<tr>
				<td>QUANTIDADE DE ESPAÇOS</td>
				<td><input class="form-control form-control-lg" type="number" name="quantidade"></td>
			</tr>				
			<tr>
				<td><button class="btn btn-lg btn-primary" type="submit">  CADASTRAR  </button></td>	
			</tr>
		</table>
	</form>
<?php include("footer.php");?>