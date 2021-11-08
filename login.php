<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9" />
    <link
      rel="icon"
      type="image/jpg"
      href="https://arms-cse3001.42web.io/account/img/logo.ico"
    />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <link rel="stylesheet" href="css/style.css" />
    <script>
      $(document).bind("contextmenu", function (e) {
        e.preventDefault();
      });
      $(document).keydown(function (e) {
        if (e.which === 123) {
          return false;
        }
      });
    </script>
    <script language="text/javascript">
                    document.onmousedown=disableclick;
      		  status="Right Click Disabled";
      		  function disableclick(event){
      			  if(event.button==2) {
      				  alert(status);
      				  return false; }
      		  }
      .
    </script>
    <script>
      document.addEventListener("contextmenu", (event) =>
        event.preventDefault()
      );
      document.onkeydown = function (e) {
        if (event.keyCode == 123) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
          return false;
        }
      };
    </script>
