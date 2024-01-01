<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link href="{{ asset('import/assets/css/DoctorArea/doctor-area-sign-in.css')}}" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container" id="main">
        <div class="row">
            <div class="col-md-6" style="border-radius: 2px;">
                <div class="logo">
                    <h3>Doctor Reservation</h3>
                  
                </div>
              
                <div>
                    <form class="form-horizontal" method="POST" action="{{route('login.post')}}">
                        @csrf
                        <div class="inputs-container">
                            <!-- -----1----- -->
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                                </svg>
                                <input required type="email" name="email" class="form-control " id="border-input" placeholder="Email Address*" value="{{old('email')}}">
                            </div>
                            <!-- ------2----- -->
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-input" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                </svg>
                                <input required type="password" name="password" class="form-control" placeholder="Password*" id="border-input">
                            </div>   
                            <!-- ------3----- -->
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember" id="remember">
                                Se souvenir de moi
                                </label>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" id="btn-responsive" class="btn btn-success" style="
                                  width: 150px;
                               height: 40px;
                               border: none;
                               border-radius: 50px;
                               background: #0A758A;
                               color: #fff !important; /* Ensure text color is set to white */
                               text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
                               font-weight: 600;
                               cursor: pointer;
                               /* position: relative; */
                               /* top: 101px; */
                               margin-left:10rem;
                               margin-top:113px;
                                ">Sign in</button>

                                </div>
                            </div>
                            
                        
                    </form>
                <!-- form-container -->
                </div>
            </div>
            
            <div class="col-md-6" id="right-content">
                <div class="content">
                    <h3>Nouveau sur notre plateforme de réservation de médecins?</h3>
                    <p>Inscrivez-vous dès maintenant pour découvrir des médecins qualifiés
                    <p>et planifiez facilement des rendez-vous!</p>
                    </p>
                    <a href="{{route('register.show')}}"><input type="button" value="Sign up" class="btn-s" style="margin-top: 3px;"></a>
                </div>

                <div>
                    <img src="{{ asset('import/assets/img/login-doctors/doctors2.jpg')}}" alt="" class="img-fluid" id="img-doctors">
                </div>
            </div>
        </div>
    </div>
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
    <!-- errors -->

    <!-- end errors -->
    <!-- success -->
    @if (Session::has('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Inscription réussie',
            text: '{{ Session::get('
            success ')}}',
            confirmButtonColor: '#0A758A'
        });
    </script>
    @endif

    <!-- end success -->
</body>

</html>