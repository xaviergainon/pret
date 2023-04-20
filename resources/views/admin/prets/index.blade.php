@extends('admin.admin')


@section('title', 'Tous les prêt')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>@yield('title')</h1>

    <a href="{{ route('admin.pret.create') }}" class="btn btn-primary"> Ajouter un prêt</a>
</div>
    <table class="table table-striped">
        <thead>
            <tr>    
                <th>Type Prêt</th>
                <th>Montant</th>
                <th>Duréé Année</th>
                <th>Duréé Mois</th>
                <th>Taux</th>
                <th class="text-end"> Actions </th>

            </tr>
        </thead>
        <tbody>
            @foreach($prets as $pret)
                <tr>
                    <td>{{ $pret->typepret }}</td>
                    <td>{{ number_format($pret->montant,thousands_separator: ' ') }} €</td>
                    <td>{{ $pret->dureeaa }}</td>
                    <td>{{ $pret->dureemm }}</td>
                    <td>{{ $pret->taux }}</td>
                    <td> </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    {{  $prets->links() }}

@endsection
