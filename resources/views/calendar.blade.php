@extends('master')

@section('content')
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="dist/img/AdminLTELogo.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
                // Aquí es donde puedes agregar tus eventos
            ]
        });
    });
</script>
@endsection
