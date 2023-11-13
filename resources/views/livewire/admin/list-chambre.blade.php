<div>

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Liste des chambres</h1>
            </div>
            <div class="col-sm-6">
              <!-- Button to add student -->
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-plus"></i> Affecter une chambre
              </button>
            </div>
          </div>
        </div>
    </section>

    <section class="content">

      <!-- Display list of rooms -->
      <div class="card m-2">
        <div class="card-header">
          <h3 class="card-title">Chambres disponibles</h3>
        </div>
        <div class="card-body">
          <div class="m-2"></div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Chambre</th>
                <th scope="col">Statut</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $serial = ($chambres->currentpage() - 1) * $chambres->perpage()+1;
                @endphp
                @foreach($chambres as $chambre)
                <tr>
                    <th scope="row">{{ $serial++ }}</th>
                  <td>$chambre->libtable</td>
                  @if($chambre->statut == 1)
                    <td><i class="fas fa-check text-success"></i></td> <!-- chambre disponible avec l'icône de coche -->
                  @else
                    <td><i class="fas fa-times text-danger"></i></td> <!-- chambre non disponible avec l'icône de croix -->
                  @endif
                </tr>
              @endfor
              {{ $chambre->links() }}
            </tbody>
          </table>
        </div>
      </div>

    </section>

     <!-- Modal -->
  <div class="modal fade" id="addChambre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Chambre
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
