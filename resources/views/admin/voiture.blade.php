@extends('layouts.index')

@section('content')
    <div class="my-4">
        <h1>Backoffice | Liste voiture</h1>
        <a href="{{route('voitures.create')}}" class="btn btn-success">Ajout d'une nouvelle voiture</a>
        <a href="{{route('home')}}" class="btn btn-secondary">Retour au site</a>
    </div>



    <!-- Button MODAL -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAll">
    All voiture
  </button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-">
    - 4000
  </button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalplus">
    + 4000
  </button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalredu">
    Reduction
  </button>
  
@include('partials.modal')
@endsection 