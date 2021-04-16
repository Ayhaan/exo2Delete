@extends('layouts.index')

@section('content')
<h1>Formulaire d'ajout</h1>
<form action="{{route('voitures.store')}}" method="POST" class="w-75 mx-auto">
    @csrf
    <div class="form-group">
      <label for="marque">Marque de la voiture</label>
      <input type="text" class="form-control" id="marque"  name="marque" placeholder="Enter marque">
    </div>
    <div class="form-group">
      <label for="annee">Année de la voiture</label>
      <input type="text" class="form-control" id="annee" name="annee" placeholder="Entrer annee">
    </div>
    <div class="form-group">
      <label for="couleur">Entrer la couleur de la voiture</label>
      <input type="color" class="form-control" id="couleur" name="couleur" placeholder="Entrer couleur">
    </div>
    <div class="form-group">
      <label for="prix">Entrer le prix de la voiture</label>
      <input type="number" class="form-control" id="prix" name="prix" placeholder="Entrer prix">
    </div>
    <div class="form-group">
      <label for="reduction">Entrer la reduction de la voiture (caclulé en %)</label>
      <input type="number" class="form-control" id="reduction" name="reduction" placeholder="Entrer reduction">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection