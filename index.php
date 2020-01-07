<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>

    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box3-template" type="text/x-handlebars-template">
      <div class="box">
        <h2>[{{ id }}] {{ title }}</h2>
        <p> {{ description }}<p>
        <br>
      </div>
    </script>


    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

  </head>
  <body>
    
    <div class="formContainer">
      <div class="newConfigCont">
        <h1>Inserisci nuova configurazione</h1>
        <form id="addConfig">
          <label for="title">Titolo:</label>
          <input type="text" name="title" placeholder="titolo"><br>
          <label for="description">Descrizione:</label>
          <input type="text" name="description" placeholder="descrizione"><br>
          <input id="button" type="submit" name="submit" value="nuova configurazione">
        </form>
      </div>
      <div class="updateConfigCont">
      <h1>Modifica una configurazione</h1>
        <form id="updateConfig">
          <label for="title">Titolo:</label>
          <input type="text" name="title" placeholder="titolo"><br>
          <label for="description">Descrizione:</label>
          <input type="text" name="description" placeholder="descrizione"><br>
          <label for="id">Id:</label>
          <input type="text" name="id" placeholder="id"><br>
          <input id="button" type="submit" name="submit" value="aggiorna configurazione">
        </form>
      </div>
      <div class="deleteConfigCont">
      <h1>Elimina una configurazione</h1>
        <form id="deleteConfig">
          <label for="id">Id:</label>
          <input type="text" name="id" placeholder="id"><br>
          <input id="button" type="submit" name="submit" value="elimina configurazione">
        </form>
      </div>
    </div>

    <div id="container" class="container">
    </div>
  </body>
</html>
