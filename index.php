<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="styles/materialize.css">
    <!-- Compiled and minified JavaScript -->
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    
  
    <title>JAMJobs</title>
</head>
<body>
    <header>
    <?php include_once("vista/navbar.php"); ?>
    </header>

    <?php include_once("control/controller.php"); ?>

    <?php include("modals/modalInicio.php"); ?>
    <?php include("modals/registroModal.php"); ?>
    
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.1/annyang.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SpeechKITT/0.3.0/speechkitt.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://kit.fontawesome.com/28633d0b0c.js" crossorigin="anonymous"></script>
<script src="js/materialize.js"></script>
<script src="js/modalFunctions.js"></script>
<script src="js/commands.js"></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
    }); 
  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  })
</script>