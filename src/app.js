// require('./bootstrap');
// var $ = require('jquery');
//
// var Handlebars = require("handlebars");
//
// $(document).ready(function() {
//   $.ajax(
//     {
//       url: 'http://127.0.0.1:8000/students-handlebars',
//       method: 'GET',
//       success: function(dataResponse) {
//         var students = dataResponse.students;
//
//         var source = $('#student-template').html();
//         var template = Handlebars.compile(source);
//
//         for (var i = 0; i < students.length; i++) {
//           var thisStudent = students[i];
//           var html = template(thisStudents);
//           $('#students-list').append(html);
//         }
//       },
//       error: function() {
//         alert('error');
//       }
//     }
//   );
// });
