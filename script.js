
function targetReset() {

  var target = $("#container");
  target.html('');
}


function printAllConfig(data) {

  targetReset();

  var target = $("#container");

  var template = $("#box3-template").html();
  var compiled = Handlebars.compile(template);

  for (var i=0;i<data.length;i++) {

    var configurazione = data[i];

    var configurazioneHTML = compiled(configurazione);

    target.append(configurazioneHTML);
  }
}


function getAllConfig() {

  $.ajax({

    url: 'getAllConfig.php',
    method: 'GET',
    success: function(data) {

      printAllConfig(data);
    },
    error: function(error) {

      console.log("error", error);
    }
  });
}


function putNewConfig() {
  
  var me = $(this);
  $.ajax({

    url: "putNewConfig.php",
    method: "POST",
    data: me.serialize(),
    success: function(data) {

      console.log(data)

      if(data) {

        getAllConfig();
      }
    },
    error: function(error) {

      console.log("error", error);
    }
  });

  return false;

}


function init() {

  getAllConfig();
  
  $("#addConfig").submit(putNewConfig);
}

$(window).ready(init);
