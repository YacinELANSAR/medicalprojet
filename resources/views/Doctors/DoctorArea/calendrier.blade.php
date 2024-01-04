<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendrier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
          <a href="#" class="">
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

    <div class="bg-light flcex-fill">
      <div class="p-2 d-md-none d-flex text-white " style="background: linear-gradient(-45deg, #04323B,#0A758A);">
        <a href="#" class="text-white" data-bs-toggle="offcanvas" data-bs-target="#bdSidebar">
          <i class="fa-solid fa-bars"></i>
        </a>
        <span class="ms-3">Doctor Reservation</span>
      </div>
      <div class="p-4">

        <div class="row">
          <div class="col">
            <!-- form -->
            <div class="container bg-light rounded">
  <form action="{{ route('calendries.store') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <label class="form-label">Sélectionner un jour</label>
        <input type="date" name="jour" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Sélectionner un décalage</label>
        <select class="form-select" name="decalage" required>
          <option value="décalage1">décalage 1</option>
          <option value="décalage2">décalage2</option>
        </select>
      </div>
      <div class="col-md-6">
        <label class="form-label">Heure de départ</label>
        <input class="form-control" name="hdepart" type="time" required />
      </div>
      <div class="col-md-6">
        <label class="form-label">Heure de fin</label>
        <input class="form-control" name="hfin" type="time" required />
      </div>
      <div class="col-md-12">
        <label class="form-label">Délai moyen de consultation</label>
        <select class="form-select" name="delaiconsultation" required>
          <option value="10 Minutes">10 Minutes</option>
          <option value="15 Minutes">15 Minutes</option>
          <option value="20 Minutes">20 Minutes</option>
          <option value="25 Minutes">25 Minutes</option>
          <option value="30 Minutes">30 Minutes</option>
          <option value="35 Minutes">35 Minutes</option>
          <option value="40 Minutes">40 Minutes</option>
          <option value="45 Minutes">45 Minutes</option>
          <option value="50 Minutes">50 Minutes</option>
          <option value="60 Minutes">60 Minutes</option>
        </select>
      </div>
      <div class="col-md-12">
        <input type="submit" value="Ajouter Calendrier" class="form-control  mt-3"  style="    background: #0A758A;color:white"  />
      </div>
    </div>
  </form>
</div>

            <!-- form -->
            <!-- affichage -->
            <div class="container bg-light rounded ">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th data-th="Le jour">Le jour</th>
                      <th data-th="Le décalage">Le décalage</th>
                      <th data-th="Départ">Départ</th>
                      <th data-th="Fin">Fin</th>
                      <th data-th="Délai">Délai </th>
                      <th data-th="Actions">Actions</th>
                      <th colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($doctorConnecteCalendrier as $calendrie)
                    <tr>
                      <td data-th="Le jour">{{ \Carbon\Carbon::parse($calendrie->jour)->locale('fr_FR')->isoFormat('dddd') }}</td>
                      <td data-th="Le décalage">{{ $calendrie->decalage }}</td>
                      <td data-th="Départ">{{ $calendrie->hdepart }}</td>
                      <td data-th="Fin">{{ $calendrie->hfin }}</td>
                      <td data-th="Délai">{{ $calendrie->delaiConsultation}}</td>
                      <td data-th="Actions">
                        <form id="delete-form-{{$calendrie->id}}" action="{{route('calendries.destroy',$calendrie->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <a style="fill: green;" href="{{route('calendries.edit',$calendrie->id)}}"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                              <path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                            </svg></a>
                          <a style="fill: red;" href="#" onclick="event.preventDefault();if(confirm('voulez vous vraiment supprimer ce calendrier')) document.getElementById('delete-form-{{$calendrie->id}}').submit();"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" style="margin-left: 0px;"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                              <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg></a>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    
                    
                  </tbody>
                </table>
                <!-- pagination -->
                <div class="container mt-3 pagination">
                  {{$doctorConnecteCalendrier->links()}}
                </div>
                <!-- pagination -->
              </div>
            </div>

            <!-- affichage -->
          </div>
        </div>
      </div>

    </div>


  </div>
  <!-- dropmenu -->
  <script>
    let dropMenu = document.getElementById('drop-menu')
    let dropItems1 = document.getElementById('drop-item1')
    let dropItems2 = document.getElementById('drop-item2')
    dropMenu.addEventListener('click', function() {
      if (dropItems1.style.display === 'none' || dropItems2.style.display === 'none') {
        dropItems1.style.display = 'block'
        dropItems2.style.display = 'block'

      } else {
        dropItems1.style.display = 'none'
        dropItems2.style.display = 'none'
      }
    })
  </script>
  <!-- dropmenu -->
  <!-- errors -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
  @if ($errors->any())
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    let errorMessage = "";
    @foreach($errors -> all() as $error)
    errorMessage += "- {{ $error }}<br>";
    @endforeach

    Swal.fire({
      icon: 'error',
      title: 'Tu dois verifier les valeurs des champs...',
      html: errorMessage,
      confirmButtonColor: '#0A758A'
    });
  </script>
  @endif


  <!-- enderrors -->
  <!-- start succes modification -->
  @if (Session::has('success'))
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'congratulations',
      text: '{{ Session::get('success')}}',
      confirmButtonColor: '#0A758A'
    });
  </script>
  @endif
  <!-- end succes modification -->
</body>
</body>

</html>