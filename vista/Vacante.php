<main>
	<div class="container center-align">
	
		<div class="row">
			<h1>Ingresar Vacante</h1>
			<h2>Datos iniciales de la vacante:</h2>
		</div>
		

		<form action="?pg=perfilVacante" method="POST" class="vacante">
		<div class="container">
		<div class="row">
				<div class="input-field">
					<input type="text" name="NombreVacante" id="NombreVacante">
					<label>Nombre de la Vacante:</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<input type="text" name="TipoVacante" id="TipoVacante">
					<label>Tipo de vacante:</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<input type="text" name="Salario" id="Salario">
					<label>Salario Solicitado:</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">				
					<input type="text" name="PorcentajeVariacionSalarial" id="PorcentajeVariacionSalarial">
					<label>Porcentaje de Variacion Salarial:</label>
				</div>
			</div>

			<input type="submit" class="btn" value="Siguiente">
			<br><br><br><br>
		</div>
			
		</form>
	</div>
	<footer class="footer">
        <div class="container">
            <img class="logo" src="img/LogoJAMJobs.svg" alt="Logo de JAMJobs del footer">
        </div>
    </footer>
</main>

