@extends('../layouts/template')
@section('page-content')
  
  <section class="page-section about-heading">

    <div class="container content-wrapper image-arriere">
        <a href="{{ URL('nouveau-enregistrement') }}" type="button" class="btn btn-primary ajoutproduit">Ajouter un etudiant</a>
        <div class="table-responsive table">
            <table id="etudiant" class="table table-hover">
                <thead>
                    <tr>
                    
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matricule</th>
                        <th>date de naissance</th>
                        <th>Cycle</th>
                        <th>Niveau</th>
                        <th>Filiere</th>
                        <th>Annee Univ</th>
                        <th>Nationalite</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($etudiant as $etudiant)
                        <tr >
                    
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom}}</td>
                            <td>{{ $etudiant->matricule}}</td>
                            <td>{{ $etudiant->datenaissance}}</td>
                            <td>{{ $etudiant->cycle }}</td>
                            <td>{{ $etudiant->niveau }}</td>
                            <td>{{ $etudiant->filiere }}</td>
                            <td>{{ $etudiant->anneeuniversitaire }}</td>
                            <td>{{ $etudiant->nationalite }}</td>
                            <td>
                            <a href="{{url('vue',$etudiant->id)}}" class="btn btn-am btn-primary">voir</a>
                            
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection
