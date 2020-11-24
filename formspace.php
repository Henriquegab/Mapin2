<?php include("header.php");?>
<?php include ("conection.php")?>
<?php include ("buildbanc.php");
$build = listbuild($conect);
?>
<h1 align="center">CADASTRO DE ESPAÇO</h1>
	<form action="resultspace.php" method="post">
		<table class="table table-borderless">
			<tr>
				<td>PREFIXO</td>
				<td>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="LABORATÓRIO" checked>
  						<label class="form-check-label" for="exampleRadios1">LABORATÓRIO</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="SALA DE AULA" checked>
  						<label class="form-check-label" for="exampleRadios1">SALA DE AULA</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="ANFITEATRO" checked>
  						<label class="form-check-label" for="exampleRadios1">ANFITEATRO</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="COORDENAÇÃO" checked>
  						<label class="form-check-label" for="exampleRadios1">COORDENAÇÃO</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="SALA DE ESTUDO" checked>
  						<label class="form-check-label" for="exampleRadios1">SALA DE ESTUDO</label>
					</div>					
				</td>
			</tr>
			<tr>
				<td>NÚMERO</td>
				<td><input class="form-control form-control-lg" type="number" name="nome"></td>
			</tr>
			<tr>
				<td>PREDIO</td>
				<td>
					<?php
						foreach($build as $predios) : 
					?>
					<input type="radio" name="predio" value = "<?=$predios['id']?>"> <?=$predios['nome_predio']?> <br/>
				<?php endforeach?>
				</td>
			</tr>			
			<tr>
				<td>TAMANHO</td>
				<td><input class="form-control form-control-lg" type="number" step="0.010" name="tamanho"></td>
			</tr>
			<tr>
				<td>CAPACIDADE</td>
				<td><input class="form-control form-control-lg" type="number" name="capacidade"></td>
			</tr>
			<tr>
				<td>ANDAR</td>
				<td></select><input class="form-control form-control-lg" type="number" name="andar"></td>
			</tr>	
					
				
			<tr>
				<td><button class="btn btn-lg btn-primary" type="submit">  CADASTRAR  </button></td>	
			</tr>

		</table>
	</form>
<?php include("footer.php");?>