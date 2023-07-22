<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3-dist\css\bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/modifier/{{$etudiant->id}}/update" method="post">
 
                  
                    @method('put')
                       @csrf
                    <input type="text" name="nom" value="{{$etudiant->nom}}" required><br/><br/>
                    <input type="text" name="prenom" value="{{$etudiant->prenom}}" required><br/><br/>
                    <input type="email" name="email" value="{{$etudiant->email}}" required><br/><br/>
                    <input type="text" name="numero" value="{{$etudiant->numero}}" required><br/><br/>
                    <input type="file" name="photo" value="{{$etudiant->photo}}" required><br/><br/>

                    <button type="submit">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>