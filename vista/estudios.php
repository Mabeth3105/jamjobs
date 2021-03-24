<main>
    <form action="?pg=aspirante" method="POST" class="register">
        <div class="container center-align">
            <div class="row">
                <h1>Para saber más de tus estudios</h1>
            </div>

            <div class="row">
                <div class="input-field col s12">
                <input type="text" id="nombre" name="nombre" class="validate">
                <label for="nombre">Institución Academica</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <select >
                        <option value="1">Primaria</option>
                        <option value="2">Secundaria</option>
                        <option value="3">Bachillerato</option>
                        <option value="">Licenciatura</option>
                        <option value="">Maestría</option>
                        <option value="">Posgrado</option>
                        <option value="">Doctorado</option>
                    </select>
                    <label for="email">Nivel Academico</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                <input type="text" id="carrera" name="nombre" class="validate">
                <label for="carrera">Carrera o área de conocimiento</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <select >
                        <option value="1">En progreso</option>
                        <option value="2">Truncado</option>
                        <option value="3">Finalizado</option>
                    </select>
                    <label for="email">Estatus Estudio</label>
                </div>
            </div>

            <div class="row">
                <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Documento Academico">
                </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="date" class="validate" id="fecha" name="email">
                    <label for="fecha">Fecha obtención</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" id="info"></textarea>
                    <label for="info">Información adicional</label>
                </div>
            </div>


            <input type="submit" value="Continuar">
        </div>
    </form>
</main>

<script>
    

    function inputC(){
        let empleo = document.getElementById("empleo");
        let resto = document.getElementById("resto");
        if(empleo.checked==1){
        console.log("tas bien");
        resto.style.display="none";
        }else{
            console.log("tas mal");
            resto.style.display="block";
        }
    }

    function inputFec(){
        let trabajo = document.getElementById("trabajo");
        let fecFin = document.getElementById("fecFin");
        if(trabajo.checked==1){
            fecFin.disabled=true;
        }else{
            fecFin.disabled=false;
        }
    }

    
</script>