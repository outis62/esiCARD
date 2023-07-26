@extends('../layouts/template')


 @section('page-content')
 <section>
 <div class=" generale">
               <div class="  row ">
                        <div class="col-md-12">
                            <h4 class="pays">BURKINA FASO            <span class="titre-universite">Universite Nazi Boni/ESI</span></h4> 
                              <div class="row">
                                         <div class="col-md-4">
                                         <img src="{{ asset($etudiant->photo) }}" alt="Photo de l'étudiant" class="img-rounded photoetudiant" width="130px" height="150px" />
                                         <span class="reference maticule">Matricule: </span> <span class="mise-en-forme">{{$etudiant->matricule}}</span>
                                         </div>
                                         <div class="col-md-8 traitement-reference">
                                             <ul>
                        
                                                 <li class=" reference">Nom: <span class="mise-en-forme">{{$etudiant->nom}}</span></li>
                                                 <li  class=" reference">Prenom: <span class="mise-en-forme"> {{$etudiant->prenom}}</span></li>
                                                 <li  class=" reference">Cycle de: <span class="mise-en-forme">{{$etudiant->cycle}}</span></li>
                                                 <li  class=" reference">Niveau: <span class="mise-en-forme">{{$etudiant->niveau}}</span></li>
                                                 <li  class=" reference">Filiere: <span class="mise-en-forme">{{$etudiant->filiere}}</span></li>
                                                 <li  class=" reference">Annee universitaire: <span class="mise-en-forme">{{$etudiant->anneeuniversitaire}}</span></li>
                                             </ul>
                                                          
                                        </div>    
                                </div>
                        </div>     

                </div> 
                
                <a href="{{url('etudiant',$etudiant->email)}}" style="color: #941B0C;">ENVOYER UN EMAIL A </a><input type="text" style="border: none; outline: none;" value="{{ old('etudiant', $etudiant->nom . ' ' . $etudiant->prenom) }}" readonly><br/>
                <a href="" style="color: #941B0C;">IMPRIMER LA CARTE</a>

</div>
@endsection