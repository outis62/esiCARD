@extends('../layouts/template')


 @section('page-content')


</head> 

<body >
<div class="content-wrapper image-arriere">
<br>
 <!-- <h4 class="text-center text-color">ENREGISTRER UN ETUDIANT</h4> -->

 <form class="form-horizontal  text-couleur active "action=" {{url('ajouter-etudiant')}}"enctype="multipart/form-data"  method="post">
 @method('post')
 @csrf
<div class="page-sectio d-flex">
<div class="form-group">
               <div>
                    <label  class="col-md-4 control-label" style="color: #941B0C;">Cycle</label>
                    <div class="col-md-4">
                    <select name="cycle" class="form-control input-md" required>
                    @foreach($cycles as $cycle)
                            <option value="{{$cycle->cycle}}">{{$cycle->cycle}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                <br><br>
                <div>
                    <label  class="col-md-4 control-label" style="color: #941B0C;">Niveauetu</label>
                    <div class="col-md-4">
                    <select name="niveau" class="form-control input-md" required>
                    @foreach($niveaux as $niveau)
                            <option value="{{$niveau->niveau}}">{{$niveau->niveau}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                <br><br>
                <div>
                    <label  class="col-md-4 control-label" style="color: #941B0C;">Filiere</label>
                    <div class="col-md-4">
                    <select name="filiere" class="form-control input-md" required>
                    @foreach($filieres as $filiere)
                            <option value="{{$filiere->filiere}}">{{$filiere->filiere}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                <div>
                    <label  class="col-md-4 control-label" style="color: #941B0C;">Nationalite</label>
                    <div class="col-md-4">
                    <select name="nationalite" class="form-control input-md" required>
                    @foreach($nationalites as $nationalite)
                            <option value="{{$nationalite->nationalite}}">{{$nationalite->nationalite}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                <br><br>
                <div>
                    <label  class="col-md-4 control-label" style="color: #941B0C;">AnneUniv</label>
                    <div class="col-md-4">
                    <select name="anneeuniversitaire" class="form-control input-md" required>
                    @foreach($annee_universitaires as $anneeuniversitaire)
                            <option value="{{$anneeuniversitaire->anneeuniversitaire}}">{{$anneeuniversitaire->anneeuniversitaire}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                <br><br>
                 </div>
                 
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" style="color: #941B0C;">Matricule</label>  
  <div class="col-md-4">
  <input  name="matricule" type="text"  class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label"  for="" style="color: #941B0C;">Nom</label>  
  <div class="col-md-4">
  <input id="" name="nom" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom" style="color: #941B0C;">Prenom</label>  
  <div class="col-md-4">
  <input name="prenom" type="texte"  class="form-control input-md" required>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="prenom" style="color: #941B0C;">DateNaissance</label>  
  <div class="col-md-4">
  <input name="datenaissance" type="date"  class="form-control input-md" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="" style="color: #941B0C;">Genre</label>
    <div class="col-md-4">
    <select name="genre" class="form-control input-md" required>
        <option value="">Sélectionner le sexe</option>
        <option value="masculin" {{ old('sexe') == 'masculin' ? 'selected' : '' }}>Masculin</option>
        <option value="féminin" {{ old('sexe') == 'féminin' ? 'selected' : '' }}>Féminin</option>
        <option value="autre" {{ old('sexe') == 'autre' ? 'selected' : '' }}>Autre</option>
    </select>
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="prenom" style="color: #941B0C;">Email</label>  
  <div class="col-md-4">
  <input name="email" type="text"  class="form-control input-md" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" style="color: #941B0C;">Numero</label>  
  <div class="col-md-4">
  <input  name="numero" type="text"  class="form-control input-md" required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" style="color: #941B0C;">Photo</label>  
  <div class="col-md-4">
  <input  name="photo" type="file"  class="form-control input-md" required>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-4">
    <button id="button1id" name="button1id" class="btn btn-primary"  type="submit">Ajouter</button>
    <button id="button2id" name="button2id" class="btn btn-danger"  type="reset">Annuler</button>
  </div>
</div>
</div>

</form>
  </div>
</body>
              @endsection