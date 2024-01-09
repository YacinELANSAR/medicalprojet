<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .searche{
            margin-top: 10%;
        }
        
    </style>
   <center>
  <div class="searche">
    <select name="departements" id="">
        @foreach ($departements as $departement)
            <option value="{{$departement->id}}">{{$departement->libelle}}</option>
        @endforeach
   </select>
   
    <select name="villes" id="">
        @foreach ($villes as $ville)
        <option value="{{$ville->id}}">{{$ville->libelle}}</option>
    @endforeach
  </div>
   </center>
</select>
</body>
</html>