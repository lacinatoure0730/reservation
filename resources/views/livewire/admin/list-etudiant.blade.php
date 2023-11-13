<div>

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> UPB - Etudiants </h1>
            </div>
            <div class="col-sm-6">
           </div>
            <button type="button" wire:click.prevent='addEtudiant' class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus"></i> Ajouter un etudiant
              </button>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card m-2">
          <div class="card-header">
            <h3 class="card-title">Etudiants</h3>
          </div>
          <div class="card-body">
            <div class="m-2"></div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Chambre</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                    $serial = ($etudiants->currentpage() - 1) * $etudiants->perpage()+1;
                     @endphp
                    @foreach($etudiants as $etudiant)
                    <tr>
                        <th scope="row">{{ $serial++ }}</th>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->chambre }}</td>
                        <td>
                            <a href="" wire:click.prevent='editEtudiant({{$etudiant}})'><i class="fas fa-edit"></i></a>
                            <a href=""  wire:click.prevent='deleteEtudiant({{$etudiant->id}})' class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    {{ $etudiants->links() }}
                </tbody>
              </table>

          </div>
        </div>
        <!-- /.card -->

      </section>

      <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="addEtudiant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            @if ($isEditData == true)
               Modifier Etudiant
            @else
                Nouveau Etudiant
            @endif
           </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="{{ $isEditData == true ? 'update' : 'save'}}">
                <div class="form-group">
                  <label for="nom">Nom</label>
                  <input type="text" class="form-control" wire:model.defar='form.nom' id="nom"  placeholder="Toure...">
                    @error('nom')
                        <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control" wire:model.defar='form.prenom' id="prenom"  placeholder="Lacina...">
                    @error('prenom')
                        <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="chambre">Numero de chambre</label>
                    <input type="number" class="form-control" wire:model.defar='form.chambre' id="chambre" placeholder="80">
                    @error('chambre')
                        <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">
                        @if ($isEditData == true)
                            Mettre a jour
                        @else
                            Soumettre
                        @endif
                    </button>
                  </div>
              </form>
        </div>

      </div>
    </div>
  </div>


   <!-- Modal delete -->
   <div class="modal fade" id="deleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
           Confirmer la suppression
           </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Voulez-vous supprimer ?
        </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" wire:click.prevent='confirmDelete' class="btn btn-danger">
                        Supprimer
                    </button>
                  </div>



      </div>
    </div>
  </div>
</div>
