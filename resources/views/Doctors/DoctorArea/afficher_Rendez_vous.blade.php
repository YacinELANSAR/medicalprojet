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
<style>
    html,
    body {
      height: 100%;
      font-family: 'Ubuntu', sans-serif;
    }

    /* Cacher la liste déroulante par défaut */
    #dropdown {
      display: none;
      position: absolute;
      background-color: white;
      padding: 5px 10px;
      list-style: none;
    }

    #bdSidebar {
      background: linear-gradient(-45deg, #04323B, #0A758A);
    }

    .mynav {
      color: #fff;
    }

    .mynav li a {
      color: #fff;
      text-decoration: none;
      width: 100%;
      display: block;
      border-radius: 5px;
      padding: 8px 5px;
    }



    .mynav li a:hover {
      background: rgba(255, 255, 255, 0.2);
    }

    .mynav li a i {
      width: 25px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container-fluid p-0 d-flex h-100">
    <div id="bdSidebar" class="d-flex flex-column flex-shrink-0 p-3  text-white offcanvas-md offcanvas-start" style="width: 280px;height:100%">
      <a href="#" class="navbar-brand">
      <h5><i class="fas fa-user me-2"></i>{{ auth()->user()->nom }} {{ auth()->user()->prenom }}</h5>
      </a>
      <hr>
      <ul class="mynav nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-1">
          <a href="{{route('doctors.index')}}" >
            <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
              <path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
            </svg>
            Dashboard
          </a>
        </li>
        <li class="nav-item mb-1">
          <a href="{{route('Rendez_vous')}}" class="">
            <svg style="fill:white" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
              <path d="M128 0c13.3 0 24 10.7 24 24V64H296V24c0-13.3 10.7-24 24-24s24 10.7 24 24V64h40c35.3 0 64 28.7 64 64v16 48V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192 144 128C0 92.7 28.7 64 64 64h40V24c0-13.3 10.7-24 24-24zM400 192H48V448c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V192zM329 297L217 409c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47 95-95c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            Rendez-vous
          </a>
        </li>
        <li class="nav-item mb-1" id="drop-menu">
          <a href="#" class="">
            <svg style="fill:white" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
              <path d="M48 0C21.5 0 0 21.5 0 48V256H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v64H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v80c0 26.5 21.5 48 48 48H265.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM152 64h16c8.8 0 16 7.2 16 16v24h24c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H184v24c0 8.8-7.2 16-16 16H152c-8.8 0-16-7.2-16-16V152H112c-8.8 0-16-7.2-16-16V120c0-8.8 7.2-16 16-16h24V80c0-8.8 7.2-16 16-16zM512 272a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM288 477.1c0 19.3 15.6 34.9 34.9 34.9H541.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H381.1c-51.4 0-93.1 41.7-93.1 93.1z" />
            </svg>
            Patients
          </a>
          <ul>
            <li id="drop-item1" style="display: none;">
              <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
              </svg>
              Tous
            </li>
            <li id="drop-item2" style="display: none;">
              <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
              </svg>
              L'historique
            </li>
          </ul>
        </li>
        <li class="nav-item mb-1">
          <a href="{{route('calendries.create')}}" class="">
            <svg style="fill:white" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
              <path d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z" />
            </svg>
            Calendrier
          </a>
        </li>
        <li class="nav-item mb-1">
          <a href="{{route('doctor.profile')}}" class="">
            <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
              <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
            Profile
          </a>
        </li>
        <li class="nav-item mb-1">
          <a href="{{route('updatePassword.show')}}" class="">
            <svg style="fill:white" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
              <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
            </svg> changer mot de passe
          </a>
        </li>
        <li class="nav-item mb-1">
          <a href="#" class="">
            
            <form action="{{route('logout')}}" method="post" >
              <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V256c0 17.7 14.3 32 32 32s32-14.3 32-32V32zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z" />
              </svg>
              @csrf
              @method('delete')
              <input type="submit" value="Logout" class=" text-white fw-bold" style="background: none;border:none">
            </form>
          </a>
        </li>
      </ul>
    </div>

<div class="container mt-5 text-capitalize">
  <form action="{{ route('Rendez_vous') }}" method="get">
    <select class="form-select" aria-label="Default select example" name="filter" onchange="this.form.submit()">
        <option value="3" {{ request('filter') == 3 ? 'selected' : '' }}>De plus proche</option>
        <option value="1" {{ request('filter') == 1 ? 'selected' : '' }}>Demain</option>
        <option value="2" {{ request('filter') == 2 ? 'selected' : '' }}>non_valider</option>
    </select>
</form>
<br>

    {{ $demandes->links('pagination::bootstrap-5') }}
  
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
                             <th scope="col">email</th>
                             <th scope="col">codeclient</th>
                             <th scope="col">heure</th>
                             <th scope="col">montant_paye</th>
                             <th scope="col">Action</th>
                         </tr>
                         </thead>
                    @foreach ($demandes as $user)
                        <tr class="user-row">
                            <td>{{ $user->nom ?? 'None' }}</td>
                            <td>{{ $user->prenom ?? 'None'}}</td>
                            <td>{{ $user->email ?? 'None'}}</td>
                            <td>{{ $user->codeclient ?? 'None'}}</td>
                            <td>{{ $user->heure ?? 'None'}}</td>
                            <td>{{ $user->montant_paye ?? 'None'}}</td>
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
        var availableTags = @json($demandes);

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