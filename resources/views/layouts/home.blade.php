@extends('./layouts/template')

                    @section('page-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper image-arriere">
 <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class=" col-lg-6 col-xs-6 ">
        <!-- small box -->
        <div class="small-box bg-aqua cadre-accueil">
          <div class="inner">
            <h6>NOMBRE D'ETUDIANT.S PAR CYCLE</h6>
                  <ul>
                  <li>LICENCE :   [{{$licence}}]</li>
                  <li>MASTER :   [{{$master}}]</li>
                  <li>DOCTORAT :   [{{$doctorat}}]</li></li>
                  </ul>
          </div>
          
          <a href="{{url('etudiant')}}" class="small-box-footer">voir plus <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!--php ./col -->
      <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green cadre-accueil">
          <div class="inner">
          <h6>NOMBRE D'ETUDIANT.S PAR FILLIERE.S</h6>
                  <ul>
                  <li>ANNALYSE ET PROGRAMATION :   [{{$Programmation}}]</li>
                  <li>RESEAU :   [{{$Reseau}}]</li>
                  <li>SECURITE :   [{{$Securite}}]</li>
                  </ul>
          </div>
         
          <a href="{{url('etudiant')}}" class="small-box-footer">voir plus <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow cadre-accueil">
          <div class="inner">
          <h6>NOMBRE D'ETUDIANT.S PAR NATIONALITE</h6>
                    <ul>
                    <li>BURKINABE : [{{$burkinabe}}]</li>
                    <li>TCHADIEN : [{{$tchadien}}]</li>
                    <li>MALIEN : [{{$malienne}}]</li>
                    </ul>
          </div>
         
          <a href="{{url('etudiant')}}" class="small-box-footer">voir plus <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red cadre-accueil">
          <div class="inner">
          <h6>NOMBRE D'ETUDIANT.S PAR ANNEE UNIVERSITAIRE</h6>
                      <ul>
                      <li>2022-2023 : [{{$annee2022_2023}}]</li>
                      <li>2023-2024 : [{{$annee2023_2024}}]</li>
                      <li>2024-2025 : [{{$annee2024_2025}}]</li>
                      </ul>
          </div>
          <a href="#" class="small-box-footer">voir plus  <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
</section>
      <!-- right col -->
    </div>
@endsection


