<div>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <input type="text" wire:model="searchTerm" class="form-control"/>
              <br />
              <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                  <tr>
                      <th>ID de l'utilisateur</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Adresse</th>
                      <th>Ville</th>
                      <th>Code postal</th>
                  </tr>
                  @foreach($clients as $client)
                  <tr>
                      <td>{{$client->guid}} </td>
                      <td>{{$client->first}}</td>
                      <td>{{$client->last}}</td>
                      <td>{{$client->street}}</td>
                      <td>{{$client->city}}</td>
                      <td>{{$client->zip}}</td>
                  </tr>
                      @endforeach
              </table>
              {{$clients->links()}}
          </div>
      </div>
  </div>
</div>
