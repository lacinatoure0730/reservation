<x-app-layout>
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>
                UPB
              </h1>
            </div>
            <div class="col-sm-6">
              
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">INFOS</h3>


          <div class="card-body m-2">
            <div class="m-2"></div>
            </div>
              <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    @php
                    $latestUser = \App\Models\User::latest()->first();
                @endphp

                <div class="inner">
                    <h3>{{ $latestUser ? $latestUser->id : '0' }}</h3>

                      <p>Utilisateurs</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{url('users')}}" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    @php
                        $latestEtudiant = \App\Models\Etudiant::latest()->first();
                    @endphp

                    <div class="inner">
                        <h3>{{ $latestEtudiant ? $latestEtudiant->id : '0' }}</h3>
                        <p>Etudiants</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{url('etudiants')}}" class="small-box-footer">Plus d'infos  <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>44</h3>

                      <p>Chambre disponible</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>

                      <p>Demande</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
            </div>

          </div>

          <!-- /.card-footer-->

      </section>
      <!-- /.content -->
</x-app-layout>
