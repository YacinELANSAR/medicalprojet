<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<title>MY CARDS</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
<style>@import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');

body {
    font-family: 'Maven Pro', sans-serif
}

body {
    background-color: #F0FFF0;
    color:#1f4456;
     font-style:italic;
      font-weight: bold;
}

.add {
    border-radius: 20px
}

.card {
    border: none;
    border-radius: 10px;
    transition: all 1s;
    cursor: pointer
}

.card:hover {
    -webkit-box-shadow: 3px 5px 17px -4px #777777;
    box-shadow: 3px 5px 17px -4px #777777
}

.ratings i {
    color: green
}

.apointment button {
    border-radius: 20px;
    background-color: #eee;
    color: #000;
    border-color: #eee;
    font-size: 13px
}
a{
    text-decoration: none;
    color:black;
}
.btnback{
    background-color:#87a8ae;
}
#BUTTONBOOK ,#follow, #profile,#comment{
      border-radius:20px;
      border:2px solid black;
      background-color:rgba(240, 240, 240, 0.7);
    }
#back{
    margin-left:30%;
    margin-top:30px;
    font-size:-1px;
    height: 30px;
}
a{
    color:black;
}
a:hover{
    color:white;
} 
#BUTTONBOOK:hover{
      background-color:rgba(240, 240, 240, 0.7);;
      color:#609078
      
      ;
} #follow, #profile,#comment{
      margin:5px;
    }
    #follow:hover{
        color:olive;
      
    }
    #profile:hover{
        color:olive;
       
    }
    #comment:hover{
        color:olive;
       


    }

#BUTTONBOOK ,#follow, #profile,#comment{
      border-radius:20px;
      border:2px solid black;
      background-color:rgba(240, 240, 240, 0.7);
    
    }
   
    
#BUTTONBOOK:hover{
      background-color:rgba(240, 240, 240, 0.7);
      color:olive;
      
      
      
    }
#etoiles{
      margin-left: 90px;
    }
#doc{
    margin-left: 42%;
    font-size: 50px;





    }
  
  
  

</style>
 <script type='text/javascript' src=''></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
 </head>
<body oncontextmenu='return false' class='snippet-body'>
    <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-between mb-3"> <span id="doc">Doctors</span> <button class="btnback" id="back"><a id="a" href="afficherdoctor">BACK</a></button> </div>
    <div class="row g-2">
    @foreach($doctordepart as $doc)
        <div class="col-md-3">
            <div class="card p-2 py-3 text-center">
                <div class="img mb-2"> <img src="{{ asset('import/assets/img/doctors/doctors-4.jpg') }}" width="70" class="rounded-circle"> </div>
                <h5 class="mb-0">{{$doc->nom}} {{$doc->prenom}}</h5> <small>{{$doc->departement_id}}</small>
                <h6 class="mb-0">{{$doc->adresse}} </h6>
                <div>
                  <button type="button" class="btn btn-outline-dark btn-rounded btn-sm"
                    data-mdb-ripple-color="dark" id="follow">+ Follow</button>
                  <button type="button" class="btn btn-outline-dark btn-rounded btn-sm"
                    data-mdb-ripple-color="dark" id="profile">See profile</button>
                  <button type="button" class="btn btn-outline-dark btn-floating btn-sm"
                    data-mdb-ripple-color="dark" id="comment"><i class="fas fa-comment"></i></button>
                </div> 
                <div class="d-flex flex-row align-items-center mb-2">
                 
                  <ul class="mb-0 list-unstyled d-flex flex-row" style="color: black; " id="etoiles">
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-xs"></i>
                    </li>
                  </ul>
                </div>
                <button type="button" class="btn btn-outline-dark btn-floating  btn-rounded btn-block btn-md" id="BUTTONBOOK" data-mdb-ripple-color="dark"><i
                class="far fa-clock me-2"></i>Book now</button>
            </div>
            
        </div>
        @endforeach
        
        </div>
    </div>
</div>
 <script type='text/javascript'></script>
 </body>
</html>