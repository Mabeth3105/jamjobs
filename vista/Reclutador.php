<center><h3>Crear perfil reclutador</h3></center>
<form action= "?pg=MenuReclutador" method="POST" >
	        <div class="container center-align">
            <div class="row">
                <br>
                <h4>¿Eres Aspirante?<a href="?pg=singUp"> Creala aquí</a></h4>
                <br>
	            <h4>Datos Personales</h4>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <input type="text" name="Nombre" id="Nombre">
                    <label for="email">Nombre</label>
                </div>
                    
                <div class="input-field col s4">
                    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
                    <label for="email">Paterno</label>
                </div>
                    
                <div class="input-field col s4">
                    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
                    <label for="email">Materno</label>
                </div> 
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="CURP" id="CURP">
                    <label for="email">CURP</label>
                </div>
            
                <div class="input-field col s6">
                    <input type="text" name="NumeroTelefono" id="NumeroTelefono">
                    <label for="email">Teléfono</label>
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="Correo" id="Correo">
                    <label for="email">Correo</label>
                </div>
            
                <div class="input-field col s6">
                    <input type="text" name="Direccion" id="Direccion">
                    <label for="email">Dirección</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <select name="EstadoID" id="EstadoID">
                        <option value="0">Selecciona un estado</option>
                        <option value="1">Veracruz</option>
                        <option value="2">Yucatan</option>
                        <option value="3">Oaxaca</option>
                    </select>
                    <label for="email">BLBLAL</label>
                </div>
            
                <div class="input-field col s6">
                    <input type="text" name="Direccion" id="Direccion">
                    <label for="email">Dirección</label>
                </div>
            </div>

        <br><br>

        <h4>Municipio:</h4>
        <select name="MunicipioID" id="MunicipioID">
            <option value="0">Selecciona un municipio</option>
            <option value="1">Veracruz</option>
            <option value="2">Merida</option>
            <option value="3">Casa Azul</option>
        </select>
        <br><br>

        <h4>Localidad:</h4>
        <select name="LocalidadID" id="LocalidadID">
            <option value="0">Selecciona un municipio</option>
            <option value="1">Veracruz</option>
            <option value="2">Merida</option>
            <option value="3">Casa Azul</option>
        </select>
        <br><br>
        
        <h4>Empresa:</h4>
        <h5>Empresa Residente:</h5>
        <select name="LocalidadID" id="LocalidadID">
            <option value="0">Selecciona una empresa</option>
            <option value="1">Empresa 1</option>
            <option value="2">Empresa 2</option>
            <option value="3">Empresa 3</option>
        </select>
        <br><br>
        <input type="submit" style="font-size: 2rem;margin-top: 1rem;" class="btn" value="Crear Perfil" >
        <br><br><br><br>
        <br><br>
    </div>
    <footer class="footer">
        <div class="container">
            <img class="logo" src="img/LogoJAMJobs.svg" alt="Logo de JAMJobs del footer">
        </div>
    </footer>
</form>


