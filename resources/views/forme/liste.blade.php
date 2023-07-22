@extends('../layouts/template')
@section('page-content')
  
  <section class="page-section about-heading">
 
    <div class="container image-arriere content-wrapper">
        <a href="{{ URL('nouveau-enregistrement') }}" type="button" class="btn btn-primary ajoutproduit">Ajouter un etudiant</a>
        <div class="table-responsive table">
            <table id="etudiant" class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matricule</th>
                        <th>Sexe</th>
                        <th>date de naissance</th>
                        <th>Cycle</th>
                        <th>Niveau</th>
                        <th>Filiere</th>
                        <th>Email</th>
                        <th>Numero</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($etudiant as $etudiant)
                        <tr >
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom}}</td>
                            <td>{{ $etudiant->matricule}}</td>
                            <td>{{ $etudiant->genre}}</td>
                            <td>{{ $etudiant->datenaissance}}</td>
                            <td>{{ $etudiant->cycle}}</td>
                            <td>{{ $etudiant->niveau}}</td>
                            <td>{{ $etudiant->filiere}}</td>
                            <td>{{ $etudiant->email}}</td>
                            <td>{{ $etudiant->numero}}</td>
                            <td d-flex>
                            <a href="/modifier/{{$etudiant->id}}/edit" class="btn btn-info">Edite</a>
                            <form action="{{ route('effacer', ['id' => $etudiant->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                             <button type="submit" class="btn btn-danger">Supp</button>
                            </form>

                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection
