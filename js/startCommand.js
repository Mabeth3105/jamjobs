var voices;
    
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
            'inicio': () => { 
            utter.text = 'Bienvenido a LLIAMLLIOBS, trabajo para todos, yo soy tu guia y asistente, te gustaría que te ayude? Si quieres que te ayude di Ayuda, si no quieres que te ayude di No gracias';
            //Setea la voz que queremos usar en base a nuestra lista.
            utter.voice = voices[0];
            window.speechSynthesis.speak(utter);
            console.log("Ta bien");
            //setTimeout(() => {
              //  window.location.href="http://localhost/assets"
            //}, 2000);
            //window.location.href="http://localhost/JAMJobs";
        },
            'Ayuda': () => { //alert("Ta bien");
            utter.text = 'Muy bien, qué te gustaría hacer? Para crear cuenta di Crear y para Iniciar sesión di Iniciar';
            //Setea la voz que queremos usar en base a nuestra lista.
            utter.voice = voices[0];
            window.speechSynthesis.speak(utter);
        },
            'Crear': () => { //alert("Ta bien");
            utter.text = 'Vamos a crear tu cuenta';
            //Setea la voz que queremos usar en base a nuestra lista.
            utter.voice = voices[0];
            window.speechSynthesis.speak(utter);
        },
            'Iniciar': () => { //alert("Ta bien");
                utter.text = 'Vamos a iniciar sesión';
                //Setea la voz que queremos usar en base a nuestra lista.
                utter.voice = voices[0];
                window.speechSynthesis.speak(utter);
        }

        };
      
        // Add our commands to annyang
        annyang.addCommands(commands);
      
        // Start listening.
        annyang.setLanguage("es");
        annyang.start();
      }