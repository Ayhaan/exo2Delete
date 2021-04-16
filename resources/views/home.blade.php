@extends('layouts.index')

@section('content')
    <h1>Page home | Site vente de voiture</h1>
    <a href="{{route('voitures.index')}}" class="btn btn-primary">Go Backoffice | Dashboard</a>

    <div class="row my-4">
        @foreach ($voitures as $voiture)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Marque : {{$voiture->marque}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">année : {{$voiture->annee}}</h6>
                      <hr>
                        <div>
                            <p class="font-weight-bold">Description : </p>
                            {{-- Condition simple pour add la prix avec reduction --}}
                            @if ($voiture->reduction == null)
                                <p class="my-0">prix : {{$voiture->prix}} €</p>
                            @else
                                <p class="my-0">prix : <strike>{{$voiture->prix}} €</strike> <span class="text-success">{{$voiture->prix-($voiture->prix*$voiture->reduction/100)}} €</span></p>
                            @endif
                            {{-- Conditon pour verifier si il ya une reduction --}}
                            @if ($voiture->reduction == null)
                                <p class="my-0">reduction : /</p>
                            @else
                                <p class="my-0">reduction : {{$voiture->reduction}} %</p>     
                            @endif

                            <p class="my-0"> couleur: <span class="px-4" style="background-color:{{$voiture->couleur}}"></span></p>
                            <p class="my-0">date d'ajout : {{$voiture->created_at->format('d/m/Y')}}</p>
                        </div>
                        <hr>
                        <div class="mt-4">
                            <a href="" class="btn btn-success">Plus de détails</a>
                        </div>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@endsection
