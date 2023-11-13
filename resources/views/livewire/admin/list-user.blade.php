<div>

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1> UPB - Etudiants </h1>
            </div>
            <div class="col-sm-6">
             </div>
            <button type="button" wire:click.prevent='addNewUser' class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus"></i> Ajouter un Utilisateur
              </button>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card m-2">
          <div class="card-header">
            <h3 class="card-title">Utilisateurs</h3>
          </div>
          <div class="card-body">
            <div class="m-2"></div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $serial = ($users->currentpage() - 1) * $users->perpage()+1;
                    @endphp

                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $serial++ }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="" wire:click.prevent='editUser({{$user}})'><i class="fas fa-edit"></i></a>
                            <a href="" wire:click.prevent='deleteUser({{$user->id}})' class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="float-right">
                {{$users->links()}}
              </div>
          </div>
        </div>
        <!-- /.card -->

      </section>

      <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="addNewUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            @if ($isEditData == true)
               Modifier Utilisateur
            @else
                Nouveau Utilisateur
            @endif
           </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="{{ $isEditData == true ? 'updateUser' : 'saveUser'}}">
                <div class="form-group">
                  <label for="name">Nom</label>
                  <input type="text" class="form-control" wire:model.defar='form.name' id="name"  placeholder="Toure...">
                    @error('name')
                        <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastname">Prenom</label>
                    <input type="text" class="form-control" wire:model.defar='form.lastname' id="lastname"  placeholder="Lacina junior...">
                      @error('lastname')
                          <span class="text-danger"> {{$message}}</span>
                      @enderror
                  </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" wire:model.defar='form.email' id="email"  placeholder="Lacina@gmail.com">
                    @error('email')
                        <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" wire:model.defar='form.password' id="password" placeholder="*****">
                    @error('password')
                        <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmation du Mot de passe</label>
                    <input type="password" class="form-control" wire:model.defar='form.password_confirmation' id="password_confirmation" placeholder="*****">
                    @error('password')
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
                        Confirmer la Suppression
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
