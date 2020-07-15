$(document).ready(function() {
    setInterval(
      function(){
        $('#tabla_de_user').load('../table/index.php');
  
      },2000
    );
  });