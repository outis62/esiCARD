@extends('../layouts/template')


 @section('page-content')

 <div class="content-wrapper image-arriere">
<br>
 <!-- <h4 class="text-center text-black">ENREGISTRER </h4> -->

 <form class="form-horizontal "action=" {{url('ajouter-cycle')}}" method="post">
 @method('post')
 @csrf
<div class="page-sectio d-flex">

<div class="form-group" >
  <label class="col-md-4 control-label" style="color: #941B0C;" for="">Cycle</label>  
  <div class="col-md-4">
  <input id="" name="cycle" type="text" class="form-control input-md" required>
    
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

<form class="form-horizontal "action=" {{url('ajouter-niveau')}}" method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group" >
  <label class="col-md-4 control-label" style="color: #941B0C;" >Niveau etude</label>  
  <div class="col-md-4">
  <input id="" name="niveau" type="text" class="form-control input-md" required>
    
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

<form class="form-horizontal "action=" {{url('ajouter-filiere')}}" method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group" >
  <label class="col-md-4 control-label" style="color: #941B0C;" >Filiere</label>  
  <div class="col-md-4">
  <input id="" name="filiere" type="text" class="form-control input-md" required>
    
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

<form class="form-horizontal "action=" {{url('ajouter-nationalite')}}" method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group" >
  <label class="col-md-4 control-label" style="color: #941B0C;" for="">Nationalite</label>  
  <div class="col-md-4">
  <input id="" name="nationalite" type="text"  class="form-control input-md" required>
    
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

<form class="form-horizontal "action=" {{url('ajouter-anneeuniversitaire')}}" method="post">

<div class="page-sectio d-flex">
@csrf
<div class="form-group" >
  <label class="col-md-4 control-label" style="color: #941B0C;" for="">AnneeUniversitaire</label>  
  <div class="col-md-4">
  <input id="" name="anneeuniversitaire" type="text"  class="form-control input-md" required>
    
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
@endsection