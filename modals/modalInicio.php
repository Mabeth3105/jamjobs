<div id="assistant--true" class="modal">
    <div class="modal-content">
              <h2>Asistente de voz</h2>
              <p>¿Qué te gustaría hacer?</p>
              <p>Para Crear cuenta di: Crear</p>
              <p>Para Iniciar sesión di: Iniciar</p>
              <p><span class="span--assistant">Nota:</span>Recuerda que puedes decir lo que quieres hacer o seleccionar la opción.</p>
        <div class="modal__centrar--opcion">
            <a href="#" class="modal--opcion">Crear cuenta</a>
            <a href="#" class="modal--opcion">Iniciar sesión</a>
        </div>
    </div>
</div>

<div id="assistant" class="modal">
        <div class="modal-content">
        <h2>Asistente de voz</h2>
        <p>Bienvenido a JAMJobs, trabajo para todos, yo soy tu guia y asistente.</p>
        <p>Si quieres que te ayude di <span class="span--assistant">Ayuda</span> si no quieres que te ayude di <span class="span--assistant">No gracias</span>. También puedes seleccionar las opciones en pantalla.</p>
        <div class="modal__centrar--opcion">
            <button data-target="assistant--true" id="btnHelp" class="modal--opcion modal-trigger">Ayuda</button>
            <button id="" class="modal--opcion">No</button>
        </div>
        </div>
</div>

<button data-target="assistant" class="btn modal-trigger" id="btn-assistant">Asistente<i class="fas fa-hands-helping"></i></button>