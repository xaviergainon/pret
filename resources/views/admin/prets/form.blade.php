@extends('admin.admin')


@section('title', $pret->exists ? "Editer un prêt" : "Créer un prêt")

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($pret->exists ? 'admin.pret.update' : 'admin.pret.store' , $pret) }}"  method="post" >

        @csrf
        @method($pret->exists ? 'put' : 'post')
    <div class="row">
            @include('shared.input', ['label' => 'Type de prêt', 'type' => 'select' , 'name' => 'type_pret_id', 'items' => $typePretItems, 'selectedID' => $typePretselectedID])
        <div class="col row">
            @include('shared.input', ['label' => 'Montant du prêt', 'name' => 'montant', 'value' => $pret->montant])
            @include('shared.input', ['label' => 'Nombre d année', 'name' => 'dureeaa', 'value' => $pret->dureeaa])
            @include('shared.input', ['label' => 'Nombre de mois', 'name' => 'dureemm', 'value' => $pret->dureemm])
            @include('shared.input', ['label' => 'Taux sans assurance', 'name' => 'taux', 'value' => $pret->taux])
        </div>
    </div>

    <div>
        <button class="btn btn-primary">
            @if($pret->exists)
                modifier
            @else
                Créer
            @endif
        </button>
    </div>

</form>


@endsection
