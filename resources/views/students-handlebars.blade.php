<div id="students-list"></div>

{{-- Template handlebars --}}
<script id="student-template" type="text/x-handlebars-template">
  <div>
    <ul>
      <li>Name: @{{ nome }}</li>
      <li>Surname: @{{ cognome }}</li>
      <li>Average grade: @{{ media }}</li>
    </ul>
  </div>
</script>

<script src="{{ asset('js/app.js') }}"></script>
