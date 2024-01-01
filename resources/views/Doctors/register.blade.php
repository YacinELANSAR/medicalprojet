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
                    <a href="{{route('login.show')}}"><input type="button" value="Sign in" class="btn-s"></a>
                </div>

                <div>
                    <img src="{{ asset('import/assets/img/login-doctors/doctors.jpg')}}" alt="" class="img-fluid" id="img-doctors">
                </div>
            </div>
            <!-- Column for the form -->
            <div class="col-md-6">
                <div class="form-container">

                    <form class="form-horizontal" method="post" action="{{route('register.post')}}" enctype="multipart/form-data">
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
                            <label class="label-input">Ville</label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-input-select" height="16" width="12" viewBox="0 0 384 512">
                                    <path d="M64 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16h80V400c0-26.5 21.5-48 48-48s48 21.5 48 48v64h80c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64zM0 64C0 28.7 28.7 0 64 0H320c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm88 40c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V104zM232 88h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V104c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V232zm144-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V232c0-8.8 7.2-16 16-16z" />
                                </svg>
                                <select name="city" id="departements" class="form-control" style="padding-left:21px;">
                                    <option value="" disabled selected>Sélectionner une ville</option>
                                    @foreach($villes as $ville)
                                    <option value="{{$ville->id}}">{{$ville->libelle}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-input">Spécialité</label>
                            <div class="input-with-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-input-select" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path d="M228.3 469.1L47.6 300.4c-4.2-3.9-8.2-8.1-11.9-12.4h87c22.6 0 43-13.6 51.7-34.5l10.5-25.2 49.3 109.5c3.8 8.5 12.1 14 21.4 14.1s17.8-5 22-13.3L320 253.7l1.7 3.4c9.5 19 28.9 31 50.1 31H476.3c-3.7 4.3-7.7 8.5-11.9 12.4L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9zM503.7 240h-132c-3 0-5.8-1.7-7.2-4.4l-23.2-46.3c-4.1-8.1-12.4-13.3-21.5-13.3s-17.4 5.1-21.5 13.3l-41.4 82.8L205.9 158.2c-3.9-8.7-12.7-14.3-22.2-14.1s-18.1 5.9-21.8 14.8l-31.8 76.3c-1.2 3-4.2 4.9-7.4 4.9H16c-2.6 0-5 .4-7.3 1.1C3 225.2 0 208.2 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141C165 36.5 211.4 51.4 244 84l12 12 12-12c32.6-32.6 79-47.5 124.6-39.9C461.5 55.6 512 115.2 512 185.1v5.8c0 16.9-2.8 33.5-8.3 49.1z" />
                                </svg>
                                <select name="speciality" id="Specialities" class="form-control" style="padding-left:23px;">
                                    <option value="" disabled selected>Sélectionner une Spécialité</option>
                                    @foreach($departements as $departement)
                                    <option value="{{$departement->id}}">{{$departement->libelle}}</option>
                                    @endforeach
                                </select>

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
                        <div class="form-group" style="position:relative;top:14px">
                            <label class="label-input">Description</label>
                            <textarea name="description" class="form-control" rows="3" id="description" placeholder="se décrire *" style="border-radius:50px;"></textarea>

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