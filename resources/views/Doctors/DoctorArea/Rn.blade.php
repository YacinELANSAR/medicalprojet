<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>Liste</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  <style>
    .custom-width {
        width: 120px; 
    }
    #f {
    position: absolute;
    top: 30px;
    right: 480px;
}

</style>
</head>

<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-9">
        <h1>Liste des Rendez-vous</h1>
        @if(session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif
        <form class="form-inline mb-3" method="post" action="{{ route('reservation.filtrer') }}"  id="f" >
    @csrf
    <div class="input-group">
        <input type="date" class="custom-width" id="datePicker" name="date" >
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>
    </div>
</form>

        <table class="table table-bordered">
          <thead>
            <tr style="text-align:center;">
              <th>Nom et Prénom</th>
              <th>Email</th>
              <th>Téléphone</th>
              <th>Date</th>
              <th>Heure</th>
              <th>Etat</th>
            </tr>
          </thead>
          <tbody>
            @foreach($reservations as $reservation)
            <tr style="text-align:center;">
              <td>{{ $reservation->nom }}  {{ $reservation->prenom }}</td>
              <td>{{ $reservation->email }} </td>
              <td>{{ $reservation->telephone }} </td>
              <td>{{ $reservation->date }}</td>
              <td>{{ $reservation->heure }}</td>
              <td>{{ $reservation->status }} <a href="{{ route('reservation.edit', $reservation->id) }}">
        <i class="fa fa-pencil" aria-hidden="true"></i>
    </a>
</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
