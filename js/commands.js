var voices;
let datos = new Array();
    
    window.speechSynthesis.onvoiceschanged = function () {
        voices = window.speechSynthesis.getVoices();
        console.log(voices);
    };
    //Inicializamos utter.
    var utter = new SpeechSynthesisUtterance();
    utter.rate = 1;
    utter.pitch = 0.8;
    utter.lang = 'es-AR';
   
    if (annyang) {
        // Let's define a command.
        const commands = {
            'Inicio': () => { //alert("Ta bien");
            utter.text = 'Bienvenido a LLIAMLLIOBS, trabajo para todos, yo soy tu guia y asistente, te gustaría que te ayude? Si quieres que te ayude di Ayuda, si no quieres que te ayude di No gracias. También puedes seleccionar las opciones en pantalla.';
            //Setea la voz que queremos usar en base a nuestra lista.
            utter.voice = voices[0];
            window.speechSynthesis.speak(utter);
            console.log("Ta bien");
            openStartModal();
            //setTimeout(() => {
              //  window.location.href="http://localhost/assets"
            //}, 2000);
        },
            'Ayuda': () => { //alert("Ta bien");
            utter.text = 'Muy bien, qué te gustaría hacer? Para crear cuenta di Crear y para Iniciar sesión di Iniciar. Recuerda que puedes decir lo que quieres hacer o seleccionar la opción.';
            //Setea la voz que queremos usar en base a nuestra lista.
            utter.voice = voices[0];
            window.speechSynthesis.speak(utter);
            closeStartModal();
            openSecundaryModal();
        },
            'Crear': () => { //alert("Ta bien");
            utter.text = 'Vamos a crear tu cuenta, Di empezar para mostrar las instrucciones.';
            //Setea la voz que queremos usar en base a nuestra lista.
            utter.voice = voices[0];
            window.speechSynthesis.speak(utter);
            window.location.href="http://localhost/PrototipoJamJob/?pg=singUp";
        },
            'Empezar': () => { //alert("Ta bien");
                utter.text = 'Para llenar el formulario di el dato y luego di la respuesta. Los datos de este formulario son: Nombre, Apellido Paterno, Apellido Materno, Correo, Contraseña. Cuando termines de llenar los datos, di Listo .Tambien puedes llenarlo manualmente';
                //Setea la voz que queremos usar en base a nuestra lista.
                utter.voice = voices[0];
                window.speechSynthesis.speak(utter);
                openRegisterModal();
                setTimeout(() => {
                      closeRegisterModal();
                  }, 15000);
        },
            'Nombre': () => { //alert("Ta bien");
                nombre.focus();
                annyang.addCallback('result', function (phrases) {
                    //Imprime el nombre por consola.
                    console.log("Nombre: ", phrases[0]);
                    datos[0] = phrases[0];
                    nombre.value = phrases[0];
                    
                    //Para el evento result.
                    annyang.removeCallback('result');
                    utter.text = 'Hola, ' + phrases[0];
                    window.speechSynthesis.speak(utter);
                });
        },
            'Apellido Paterno': () => { 
                apePat.focus();
                annyang.addCallback('result', function (phrases) {
                    //Imprime el nombre por consola.
                    console.log("Nombre: ", phrases[0]);
                    datos[1] = phrases[0];
                    apePat.value = phrases[0];
                    //Para el evento result.
                    annyang.removeCallback('result');
                });
        },
            'Apellido Materno': () => {
                apeMat.focus();
                annyang.addCallback('result', function (phrases) {
                    //Imprime el nombre por consola.
                    console.log("Nombre: ", phrases[0]);
                    datos[2] = phrases[0];
                    apeMat.value = phrases[0];
                    
                    //Para el evento result.
                    annyang.removeCallback('result');
                });
        },
            'Correo': () => { 
                email.focus();
                annyang.addCallback('result', function (phrases) {
                    //Imprime el nombre por consola.
                    console.log("Nombre: ", phrases[0]);
                    datos[3] = phrases[0];
                    email.value = phrases[0];
                    
                    //Para el evento result.
                    annyang.removeCallback('result');
                });
        },
            'Contraseña': () => {
                password.focus(); 
                annyang.addCallback('result', function (phrases) {
                    //Imprime el nombre por consola.
                    console.log("Nombre: ", phrases[0]);
                    datos[4] = phrases[0];
                    password.value = phrases[0];
                    
                    //Para el evento result.
                    annyang.removeCallback('result');
                });
        },
            'Listo': () => {
                utter.text = 'Tus datos son: Nombre:'+datos[0]+'. Apellido Paterno:'+datos[1]+'. Apellido Materno:'+datos[2]+'. Correo: mariordm16@gmail.com Contraseña:'+datos[4]+'Si tus datos son correctos di Enviar, en caso de que alguno sea incorrecto di el dato y luego la respuesta.';
                //Setea la voz que queremos usar en base a nuestra lista.
                utter.voice = voices[0];
                window.speechSynthesis.speak(utter);
                
        },
            'Enviar': () => {
                utter.text = 'Cuenta creada exitosamente';
                window.location.href="http://localhost/PrototipoJamJob/?pg=aspirante";
                //Setea la voz que queremos usar en base a nuestra lista.
                utter.voice = voices[0];
                window.speechSynthesis.speak(utter);
                
        },
            'Iniciar': () => { //alert("Ta bien");
                utter.text = 'Vamos a iniciar sesión, di tu correo y la respuesta, di la contraseña y la respuesta.';
                //Setea la voz que queremos usar en base a nuestra lista.
                utter.voice = voices[0];
                window.speechSynthesis.speak(utter);
                window.location.href="http://localhost/PrototipoJamJob/?pg=singUp";
        },
            'Cerrar': () => { //alert("Ta bien");
                utter.text = 'Hasta la próxima, te esperamos aquí en LLIAMLLIOBS';
                //Setea la voz que queremos usar en base a nuestra lista.
                utter.voice = voices[0];
                window.speechSynthesis.speak(utter);
                window.location.href="http://localhost/PrototipoJamJob";
        }

        };
      
        // Add our commands to annyang
        annyang.addCommands(commands);
      
        // Start listening.
        annyang.setLanguage("es");
        annyang.start();
      }