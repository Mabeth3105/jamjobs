<main>
    <form action="?pg=contacto" method="POST" class="register">
        <div class="container center-align">
            <div class="row">
                <h1>Crea tu cuenta</h1>
                <br>
                <h4>
                    <p>¿Eres reclutador?<a href="?pg=reclutador"> Creala aquí</a></p>
                </h4>
            </div>

            <div class="row">
                <div class="input-field col s6">
                <input type="text" id="nombre" name="nombre" class="validate">
                <label for="nombre">Nombre</label>
                </div>
            </div>
            

            <div class="row">
                <div class="input-field col s6">
                    <input  id="apePat" type="text" class="validate" name="apePat">
                    <label for="apePat">Apellido Paterno</label>
                </div>

                <div class="input-field col s6">
                    <input id="apeMat" type="text" class="validate" name="apeMat">
                    <label for="apeMat">Apellido Materno</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="email" class="validate" id="email" name="email">
                    <label for="email">Correo</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="password" class="validate" id="password" name="password">
                    <label for="password">Contraseña</label>
                </div>

                <div class="col s6 left-align">
                    <ul>
                        <li>Entre 6 y 12 caracteres.</li>
                        <li>Al menos una letra.</li>
                        <li>Al menos un número.</li>
                    </ul>
                </div>
            </div>

            <input type="submit" class="btn" value="Registrarse">
        </div>
        <br><br><br><br>
        <footer class="footer">
        <div class="container">
            <img class="logo" src="img/LogoJAMJobs.svg" alt="Logo de JAMJobs del footer">
        </div>
        </footer>
    </form>
</main>