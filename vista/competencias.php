<main>
    <form action="?pg=experiencias" method="POST" class="register">
        <div class="container center-align">
            <div class="row">
                <h1>Competencias laborales</h1>
            </div>

            <div class="row">
                <div class="input-field col s12">
                <input type="text" id="nombre" name="nombre" class="validate">
                <label for="nombre">Nombre competencia</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="apePat">Descripción</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <select multiple>
                        <option value="1">Español</option>
                        <option value="2">Inglés</option>
                        <option value="3">Fránces</option>
                    </select>
                    <label for="email">Idiomas</label>
                </div>
            </div>


            <input type="submit" value="Continuar">
        </div>
    </form>
</main>