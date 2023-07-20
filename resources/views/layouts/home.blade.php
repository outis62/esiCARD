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
            <h6>NOMBRE DE CARTE PAR ANNEE DE LICENCE</h6>
                  <ul>
                  <li>LICENCE I :   </li>
                  <li>LICENCE II :   </li>
                  <li>LICENCE III :   </li></li>
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
          <h6>NOMBRE DE CARTE PAR FILLIERE</h6>
                  <ul>
                  <li>RESEAU :   </li>
                  <li>SECURITE :   </li>
                  <li>ANNALYSE ET PROGRAMATION :   </li>
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
          <h6>NOMBRE DE CARTE PAR NATIONALITE</h6>
                    <ul>
                    <li>BURKINABE</li>
                    <li>TCHADIEN</li>
                    <li>MALIEN</li>
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
          <h6>NOMBRE DE CARTE PAR PROMOTION</h6>
                      <ul>
                      <li>2020-2021</li>
                      <li>2021-2022</li>
                      <li>2022-2023</li>
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


