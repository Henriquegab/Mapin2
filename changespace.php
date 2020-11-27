<?php include("header.php");?>
<?php include ("conection.php")?>
<?php include ("buildbanc.php");?>
<?php include("functionlist.php");?>
<?php
require_once("logado.php");
session_start();
$token = md5(session_id());
Logado();?>
<?php
	$id = $_GET['id'];
	$space = changespace($conect, $id);
	$build = listbuild($conect);
	$uslaboratorio = $space['prefixo_id']=='LABORATÓRIO' ? "checked='checked'" : "";#pra comparar a checkbox de prefixo
	$ussaladeaula = $space['prefixo_id']=='SALA DE AULA' ? "checked='checked'" : "";
	$usanfiteatro = $space['prefixo_id']=='ANFITEATRO' ? "checked='checked'" : "";
	$uscoordenacao = $space['prefixo_id']=='COORDENAÇÃO' ? "checked='checked'" : "";
	$ussaladeestudo = $space['prefixo_id']=='SALA DE ESTUDO' ? "checked='checked'" : "";
?>	
<h1 align="center">ALTERAÇÃO DE ESPAÇO</h1>
	<form action="resultchange.php" method="post">
		<input type="hidden" name="id" value="<?=$space['id']?>">
		<table class="table table-borderless">
			<tr>
				<td>PREFIXO</td>
				<td>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="LABORATÓRIO" <?=$uslaboratorio?>
  						<label class="form-check-label" for="exampleRadios1">LABORATÓRIO</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="SALA DE AULA" <?=$ussaladeaula?>>
  						<label class="form-check-label" for="exampleRadios1">SALA DE AULA</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="ANFITEATRO" <?=$usanfiteatro?>>
  						<label class="form-check-label" for="exampleRadios1">ANFITEATRO</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="COORDENAÇÃO" <?=$uscoordenacao?>>
  						<label class="form-check-label" for="exampleRadios1">COORDENAÇÃO</label>
					</div>
					<div class="form-check">
  						<input class="form-check-input" type="radio" name="prefixo" id="radio" value="SALA DE ESTUDO" <?=$ussaladeestudo?>>
  						<label class="form-check-label" for="exampleRadios1">SALA DE ESTUDO</label>
					</div>					
				</td>
			</tr>
			<tr>
				<td>NÚMERO</td>
				<td><input class="form-control form-control-lg" type="number" name="nome" value="<?=$space['nome_espaco']?>"></td>
			</tr>
			<tr>
				<td>PREDIO</td>
				<td>

					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="predio">

					<?php foreach($build as $predios) :
						$check = $space['predio_id']== $predios['id'];
						$selected = $check ? "selected='selected'" : "";
						?>

					<option value = "<?=$predios['id']?>" <?=$selected?> ><?=$predios['nome_predio']?>
					</option>
					<?php endforeach?>
					</select>
				


				</td>
			</tr>			
			<tr>
				<td>TAMANHO</td>
				<td><input class="form-control form-control-lg" type="number" step="0.010" name="tamanho" value="<?=$space['tamanho']?>"></td>
			</tr>
			<tr>
				<td>CAPACIDADE</td>
				<td><input class="form-control form-control-lg" type="number" name="capacidade" value="<?=$space['capacidade']?>"></td>
			</tr>
			<tr>
				<td>ANDAR</td>
				<td></select><input class="form-control form-control-lg" type="number" name="andar" value="<?=$space['andar']?>"></td>
			</tr>	
					
				
			<tr>
				<td><button class="btn btn-lg btn-primary" type="submit">  ALTERAR  </button></td>	
			</tr>

		</table>
	</form>
<?php include("footer.php");?>