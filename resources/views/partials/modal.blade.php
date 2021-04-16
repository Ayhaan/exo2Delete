  <!-- Modal ALL -->
  <div class="modal fade" id="modalAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <h2>ALL voiture</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Marque</th>
                        <th scope="col">Année</th>
                        <th scope="col">Couleur</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Réduction</th>
                        <th scope="col">Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($voitures as $voiture)
                            <tr>
                                <th scope="row">{{$voiture->marque}}</th>
                                <td>{{$voiture->annee}}</td>
                                <td>{{$voiture->couleur}}</td>
                                <td>{{$voiture->prix}}€</td>  
                                @if ($voiture->reduction == null)
                                    <td>NULL</td>
                                @else
                                <td>{{$voiture->reduction}}%</td>
                                @endif
                                <td>
                                    <form action="{{route('voitures.delete', $voiture->id )}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal -4000 -->
  <div class="modal fade" id="modal-" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <h2>Voiture -4000€</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Marque</th>
                        <th scope="col">Année</th>
                        <th scope="col">Couleur</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Réduction</th>
                        <th scope="col">Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($moins as $voiture)
                            <tr>
                                <th scope="row">{{$voiture->marque}}</th>
                                <td>{{$voiture->annee}}</td>
                                <td>{{$voiture->couleur}}</td>
                                <td>{{$voiture->prix}}€</td>  
                                @if ($voiture->reduction == null)
                                    <td>NULL</td>
                                @else
                                <td>{{$voiture->reduction}}%</td>
                                @endif
                                <td>
                                    <form action="{{route('voitures.delete', $voiture->id )}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal +4000 -->
    <div class="modal fade" id="modalplus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <h2>Voiture +4000€</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Marque</th>
                            <th scope="col">Année</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Réduction</th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plus as $voiture)
                                <tr>
                                    <th scope="row">{{$voiture->marque}}</th>
                                    <td>{{$voiture->annee}}</td>
                                    <td>{{$voiture->couleur}}</td>
                                    <td>{{$voiture->prix}}€</td>  
                                    @if ($voiture->reduction == null)
                                        <td>NULL</td>
                                    @else
                                    <td>{{$voiture->reduction}}%</td>
                                    @endif
                                    <td>
                                        <form action="{{route('voitures.delete', $voiture->id )}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal reduction -->
    <div class="modal fade" id="modalredu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <h2>Voiture avec reduciton</h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Marque</th>
                            <th scope="col">Année</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Réduction</th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reductions as $voiture)
                                <tr>
                                    <th scope="row">{{$voiture->marque}}</th>
                                    <td>{{$voiture->annee}}</td>
                                    <td>{{$voiture->couleur}}</td>
                                    <td>{{$voiture->prix}}€</td>  
                                    <td><strike>{{$voiture->prix}}€</strike><p class="text-danger">{{$voiture->prix-($voiture->prix*$voiture->reduction/100)}}</p></td>
                                    <td>
                                        <form action="{{route('voitures.delete', $voiture->id )}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>