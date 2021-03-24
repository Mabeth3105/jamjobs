<main>
    <form action="?pg=estudios" method="POST" class="register">
        <div class="container center-align">
            <div class="row">
                <h1>Describe tus experiencias</h1>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <label>
                        <input type="checkbox" id="empleo" onclick="inputC();"/>
                        <span>Busco mi primer empleo</span>
                    </label>
                </div>
            </div>

            <div id="resto">
            <div class="row">
                <div class="input-field col s6">
                    <input  id="apePat" type="text" class="validate" name="apePat">
                    <label for="apePat">Nombre Empresa</label>
                </div>

                <div class="input-field col s6">
                    <input  id="apeMat" type="text" class="validate" name="apeMat">
                    <label for="apeMat">Puesto</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <label>
                        <input type="checkbox" id="trabajo" onclick="inputFec();"/>
                        <span>Aún trabajo aquí</span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input type="date" class="validate" id="email" name="email">
                    <label for="email">Fecha Inicio</label>
                </div>

                <div class="input-field col s6">
                    <input  type="date" class="validate" id="fecFin" name="password">
                    <label for="password">Fecha Fin</label>
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