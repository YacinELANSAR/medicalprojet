<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
</head>
<div class="container mt-5 text-capitalize">
    {{ $users->links('pagination::bootstrap-5') }}
    
    <div class="mb-3">
        <label for="searchInput" class="form-label">Search for patients:</label>
        <input type="search" class="form-control" id="searchInput" placeholder="Enter name, telephone, age, or sexe..." minlength="2" name="searche">
    </div>

    <div class="d-flex justify-content-sm-between mt-4">
        <div class="table">
            <table class="table table-striped table-hover">
                <thead>
                   
                </thead>
                <tbody id="patientsTable">
                    <thead>
                         <tr>
                             <th scope="col">Nom</th>
                             <th scope="col">Prenom</th>
                             <th scope="col">Tel</th>
                             <th scope="col">Age</th>
                             <th scope="col">Action</th>
                         </tr>
                         </thead>
                    @foreach ($users as $user)
                        <tr class="user-row">
                            <td>{{ $user->nom ?? 'None' }}</td>
                            <td>{{ $user->prenom ?? 'None'}}</td>
                            <td>{{ $user->telephone ?? 'None'}}</td>
                            <td>{{ $user->age ?? 'None'}}</td>
                            <td>{{ $user->sexe ?? 'None'}}</td>
                            <td> <button class="btn btn-danger"> Rendez Vous </button> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var availableTags = @json($users);

        $("#searchInput").autocomplete({
            source: availableTags,
            minLength: 2,
            select: function(event, ui) {
                filterTable(ui.item.value);
            }
        });

        $("#searchInput").on('input', function() {
            filterTable($(this).val());
        });

        function filterTable(keyword) {
            // Show only rows that match the search keyword
            $(".user-row").each(function() {
                var rowText = $(this).text().toLowerCase();
                var keywordLower = keyword.toLowerCase();
                if (rowText.includes(keywordLower)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });
</script>