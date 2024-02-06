<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link href="{{ asset('import/assets/css/DoctorArea/doctor-area-sign-up.css')}}" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <div class="container" id="main">
        <div class="row">

            <div class="col-md-6">
                <div class="content">
                    <h3>Bienvenue sur notre plateforme </h3>
                    <p>Inscrivez-vous maintenant pour prendre rendez-vous avec nos médecins qualifiés.</p>
                    <a href="{{route('Signin')}}"><input type="button" value="Sign in" class="btn-s"></a>
                </div>

                <div>
                    <img src="{{ asset('import/assets/img/login-doctors/doctors.jpg')}}" alt="" class="img-fluid" id="img-doctors">
                </div>
            </div>
            <!-- Column for the form -->
            <div class="col-md-6">
                <div class="form-container">

                    <form class="form-horizontal" method="post" action="{{route('store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

                            <label class="label-input">Prénom</label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                                <input type="text" name="firstname" class="form-control " placeholder="Prénom*" value="{{old('firstname')}}" style="border: 2px solid #0A758A;border-radius: 50px; padding-left: 33px;">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-input">Nom</label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                                <input type="text" name="lastname" class="form-control" id="border-input" placeholder="Nom*" value="{{old('lastname')}}">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-input">Email </label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                                </svg>
                                <input type="email" name="email" class="form-control " id="border-input" placeholder="Email Adresse*" value="{{old('email')}}">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-input">Téléphone </label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg>
                                <input type="tel" name="phonenumber" id="border-input" class="form-control" placeholder="Téléphone*" value="{{old('phonenumber')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-input">Adresse </label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg>
                                <input type="text" name="adresse" id="border-input" class="form-control" placeholder="adresse*" value="{{old('adresse')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-input">Age </label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg>
                                <input type="number" name="age" id="border-input" class="form-control" placeholder="age*" value="{{old('age')}}">
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <label class="label-input">Profile image</label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M384 64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64l0-384zM128 192a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM80 356.6c0-37.9 30.7-68.6 68.6-68.6h86.9c37.9 0 68.6 30.7 68.6 68.6c0 15.1-12.3 27.4-27.4 27.4H107.4C92.3 384 80 371.7 80 356.6z" />
                                </svg>
                                <input name="profileimage" class="form-control" type="file" id="border-input" multiple>

                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="label-input">Mot de passe</label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-input" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                </svg>
                                <input type="password" name="password" class="form-control" placeholder="Password*" id="border-input">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-input">Confirmer le mot de passe</label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-input" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                </svg>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password*" id="border-input">


                            </div>
                        </div>


                        <input id="btn-responsive" type="submit" value="Sign up" class="btn btn-success" style="
                               width: 150px;
                               height: 40px;
                               border: none;
                               border-radius: 50px;
                               background: #0A758A;
                               color: #fff !important; /* Ensure text color is set to white */
                               text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
                               font-weight: 600;
                               cursor: pointer;
                               position: relative;
                               top: -9px;
                               margin-left:10rem;
                               margin-top:10px;
                               " />

                    </form>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
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

</body>

</html>