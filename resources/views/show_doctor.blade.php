<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  i{
    font-size: 15px;
    padding: 5px;
}
.colc{
    background-image: url('https://hips.hearstapps.com/hmg-prod/images/types-of-doctors-1600114658.jpg?crop=1xw:0.8425829875518672xh;center,top&resize=1200:*');
    background-size: cover;
}

</style>
<body >
 <div class="colc">
  <x-navbar></x-navbar>
  <div class="container mt-5 " style="border-radius: 5px; border: 2px solid rgba(0, 0, 0, 0.163);">
   
      <div class="row " style=" backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(8px); z-index: 2;">
          <div class="col-md-7">
              <div class="container m-5">
                  <div class="row row-cols-auto  ">
                      <div class="col p-0 ">
                        <img src="{{ asset($doctor->profileimage) }}" alt="Image Alt Text"
                          width="150px" height="150px" id="img" alt="" class="img-thumbnail"">
                      </div>
                      <div class="col-8 mt-1">
                          <div style="display: flex; gap: 10px; ">
                              <span class="text text-dark text-capitalize text-bold"><h5>{{$doctor->nom	}}</h5></span>
                              <span class="text text-dark text-capitalize text-bold"><h5>{{$doctor->prenom	}}</h5></span>
                            </div>
                            <div style="display: flex; gap: 10px; ">
                              <span class="text text-dark text-capitalize "><i class="fa-solid fa-star" ></i></span>
                              <span class="text text-light text-capitalize text-bold"><p>(110)</p></span>
                              <span class="text text-light text-capitalize text-bold"><p class="bg-success text text-light p-1" style="font-size: 10px; border-radius: 3px;">Top rated</p></span>
                            </div>
                            <p>{{$doctor->description}}</p>
                            <div style="display: flex; gap: 10px; ">
                              <span class="text text-light text-capitalize ">{{$doctor->ville->libelle}}</span>
                              <span class="text text-light text-capitalize "><i class="fa-solid fa-tree-city"></i></span>
                              <span class="text text-light text-capitalize ">{{$doctor->departement->libelle}}</span>
                              <span class="text text-light text-capitalize "><i class="fa-solid fa-user-nurse"></i></span>
                              
                            </div>

                            
                      </div>
                      <div class="col-11 mt-5">
                          <div style="display: flex; gap: 10px; ">
                              <span class="text text-light text-capitalize "><i class="fa-solid fa-circle-check"></i></span>
                              <span class="text text-light text-capitalize ">Lorem ipsum dolor sit amet consectetur adipisicing</i></span>

                             
                            </div>


                      </div>
                      <div class="col-11 mt-2">
                          <div style="display: flex; gap: 10px; ">
                              <span class="text text-light text-capitalize "><i class="fa-solid fa-building"></i></i></span>
                              <span class="text text-light text-capitalize ">{{$doctor->adresse}}</i></span>

                              
                            </div>


                      </div>
                      
                      <div class="col-11 mt-5">
                          <h5>Expert in:</h5>
                          <div style="display: flex; gap: 10px;  " class="mt-3">
                              <span class="text text-light text-capitalize "><i class="fa-solid fa-building"></i></i></span>
                              <span class="text text-light text-capitalize ">{{$departement->libelle}}</i></span>

                              
                            </div>


                      </div>
                      <div class="col-11 mt-5">
                          <h5>About me</h5>
                          <div style="display: flex; gap: 10px;  " class="mt-3">
                              <span class="text text-light text-capitalize ">Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet consectetur adipisicing
                                  Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet consectetur adipisicingLorem ipsum dolor sit amet consectetur adipisicing
                              </i></span>

                              
                            </div>


                      </div>
                      
                      
                      
                 </div>
                 </div>
              </div>
          
          <div class="col-md-5">
              <div class="container mt-5 d-flex justify-content-center">

                  <div class="card p-3">
      
                      <div class="d-flex align-items-center">
      
                          <div class="image">
                            <img src="{{ asset($doctor->profileimage) }}" alt="Image Alt Text"
                            width="150px" height="150px" id="img" alt="" class="img-thumbnail"">
                      </div>
      
                      <div class="ml-3 w-100">
                          
                         <h4 class="mb-0 mt-0">Alex HMorrision</h4>
                         <span>Senior Journalist</span>
      
                         @forelse ($online as $last_seen)
                         <div>
                             <span>{{ $last_seen >= now() ? 'Online' : 'Offline' }}</span>
                             @if ($last_seen < now())
                                 <span>Last seen: {{ Carbon\Carbon::parse($last_seen)->diffForHumans() }}</span>
                             @endif
                         </div>
                     @empty
                         <p>No doctors online.</p>
                     @endforelse
                     
                     

                          <div>Valable entre : </div>
                          <span class="btn btn-sm btn-outline-danger" id="info">{{ $datedepart ?? 'non disponible' }}</span>
                          <span class="btn btn-sm btn-outline-danger">{{ $datefin ?? 'non disponible' }}</span>
                          
                          {{-- <script>
                              document.addEventListener('DOMContentLoaded', function () {
                                  var inf = document.getElementById('info').innerHTML;
                                  var f = document.getElementById('form');
                          
                                  // Use a regular expression to check if inf is in the format 'hh:mm'
                                  var regex = /^\d{2}:\d{2}$/;
                          
                                  if (inf === 'non disponible' || !regex.test(inf)) {
                                      f.style.display = 'none';
                                  } else {
                                      f.style.display = 'block';
                                  }
                              });
                          </script>
                           --}}
      
                         <div class="button mt-2 d-flex flex-row align-items-center">
      
                          <button class="btn btn-sm btn-outline-primary w-100" id="btn">contact me</button>
      
                             
                         </div><hr><br>
                          
      
                      </div>
      
                          
                      </div>
                      {{-- <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var button = document.getElementById('btn');
                            var form = document.getElementById('form');
                    
                            button.addEventListener('click', function () {
                                if (form.style.display === 'none' || form.style.display === '') {
                                    form.style.display = 'block';
                                } else {
                                    form.style.display = 'none';
                                }
                            });
                        });
                    </script> --}}
                    
                    <form action="{{ route('demande_reservation') }}" method="POST" id="form">
                      @csrf
                      <div class="card-footer py-3 border-0" style="background-color: ;">
                          <div class="container bg-light p-1">
                              <div class="row row-cols-2">
                                  <div class="col">
                                      <select name="jours" id="" class="form-select" onchange="location = this.value;">
                                          @foreach($jours as $jourOption)
                                              <option value="/show_doctor/{{ $jourOption }}" {{ $jourselected == $jourOption ? 'selected' : '' }}>
                                                  {{ $jourOption }}
                                              </option>
                                          @endforeach
                                      </select>
                                  </div>
                                  <div class="col">
                                      <select name="time" id="" class="form-select">
                                          @foreach($timeIntervals as $timeInterval)
                                              <option value="{{ $timeInterval }}">{{ $timeInterval }}</option>
                                          @endforeach
                                      </select>
                                  </div><br><br>
                              </div><br>
                              <div class="row row-cols-2">
                                  <div class="col">
                                      <p class="bg bg-body text-center">300 DH</p>
                                  </div>
                                  <div class="col">
                                      <button class="btn btn-outline-primary" type="submit">Confirmer</button>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col">
                                      <div class="alert-info">
                                          @if(session('msg'))
                                              {{ session('msg') }}
                                          @endif
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
                  
                   
               </div>
               
               
          </div>
          
          
      </div>
      
      
       <br>


        <div class="d-flex flex-start w-100">
          
          <img class="rounded-circle shadow-1-strong me-3 p-1"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
            height="40" />
          <div class="form-outline w-100">
            <textarea class="form-control" id="textAreaExample" rows="1"
              style="background: ;" placeholder="Add Comment"></textarea>
          </div>
        </div>
        <div class="float-end mt-2 pt-1">
          <button type="button" class="btn btn-primary btn-sm">Post comment</button>
          <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
        </div><br>
      </div>
      <script>
        var textAreaExample = document.getElementById('textAreaExample');
        textAreaExample.addEventListener('focus',function(){
          textAreaExample.rows = 4;
          
        })
      </script>
      
    
</section><br>
<section style="background-color: #f7f6f6; border-radius: 5px">
<div class="container my-5 py-5 text-dark">
<div class="row d-flex justify-content-center">
  <div class="col-md-12 col-lg-10 col-xl-8">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="text-dark mb-0">Unread comments (4)</h4>
      <div class="card">
        <div class="card-body p-2 d-flex align-items-center">
          <h6 class="text-primary fw-bold small mb-0 me-1">Comments "ON"</h6>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex flex-start">
          <img class="rounded-circle shadow-1-strong me-3"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="40"
            height="40" />
          <div class="w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-primary fw-bold mb-0">
                lara_stewart
                <span class="text-dark ms-2">Hmm, This poster looks cool</span>
              </h6>
              <p class="mb-0">2 days ago</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <p class="small mb-0" style="color: #aaa;">
                <a href="#!" class="link-grey">Remove</a> •
                <a href="#!" class="link-grey">Reply</a> •
                <a href="#!" class="link-grey">Translate</a>
              </p>
              <div class="d-flex flex-row">
                <i class="fas fa-star text-warning me-2"></i>
                <i class="far fa-check-circle" style="color: #aaa;"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex flex-start">
          <img class="rounded-circle shadow-1-strong me-3"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="40"
            height="40" />
          <div class="w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-primary fw-bold mb-0">
                the_sylvester_cat
                <span class="text-dark ms-2">Loving your work and profile! </span>
              </h6>
              <p class="mb-0">3 days ago</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <p class="small mb-0" style="color: #aaa;">
                <a href="#!" class="link-grey">Remove</a> •
                <a href="#!" class="link-grey">Reply</a> •
                <a href="#!" class="link-grey">Translate</a>
              </p>
              <div class="d-flex flex-row">
                <i class="far fa-check-circle text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex flex-start">
          <img class="rounded-circle shadow-1-strong me-3"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(20).webp" alt="avatar" width="40"
            height="40" />
          <div class="w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-primary fw-bold mb-0">
                mindyy_def
                <span class="text-dark ms-2">Really cool Which filter are you using?
                </span>
              </h6>
              <p class="mb-0">3 days ago</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <p class="small mb-0" style="color: #aaa;">
                <a href="#!" class="link-grey">Remove</a> •
                <a href="#!" class="link-grey">Reply</a> •
                <a href="#!" class="link-grey">Translate</a>
              </p>
              <div class="d-flex flex-row">
                <i class="fas fa-user-plus" style="color: #aaa;"></i>
                <i class="far fa-star mx-2" style="color: #aaa;"></i>
                <i class="far fa-check-circle text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <div class="d-flex flex-start">
          <img class="rounded-circle shadow-1-strong me-3"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(14).webp" alt="avatar" width="40"
            height="40" />
          <div class="w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="text-primary fw-bold mb-0">
                t_anya
                <span class="text-dark ms-2"><span class="text-primary">@macky_lones</span>
                  <span class="text-primary">@rashida_jones</span> Thanks
                </span>
              </h6>
              <p class="mb-0">4 days ago</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <p class="small mb-0" style="color: #aaa;">
                <a href="#!" class="link-grey">Remove</a> •
                <a href="#!" class="link-grey">Reply</a> •
                <a href="#!" class="link-grey">Translate</a>
              </p>
              <div class="d-flex flex-row">
                <i class="far fa-check-circle text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
     </div>
              
  </div>
 </div>
</body>
</html>