require('./bootstrap');
var $ = require('jquery');
var Handlebars = require("handlebars");

// Inizio del documento
$(document).ready(function() {

  $.ajax(
    {
      url: "http://127.0.0.1:8000/api/api-students",
      method: "GET",
      success: function (data) {

        var arrayStudents = data.students;

        var source = $('#students-template').html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < arrayStudents.length; i++) {

          var oneStudent = arrayStudents[i];

          var html = template(oneStudent);

          $('#students-list').append(html);
        }
      },
      error: function (richiesta, stato, errore) {
        alert('Errore' errore);
      }
    }
  );

});
