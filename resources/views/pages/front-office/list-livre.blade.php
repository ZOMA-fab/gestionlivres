<x-master-layout >

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Liste des livres</h3>
            <br>
            @if (session('statut'))
            
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                {{session('statut')}} 
            </div>
               
            @endif
    
            @if ($leslivres->count() > 0)
            <div class="row">
                <a href="{{ route ('ajouter.livre')}}" class="btn btn-success mr-2"> Ajouter un nouveau livre
                </a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Titre</td>
                        <td>Auteur</td>
                        <td>Prix</td>
                        <td>Quantite</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($leslivres as $livre)           
                    <tr>
                        <td>{{ $livre->titre }}</td>
                        <td>{{ $livre->auteur }}</td>
                        <td>{{ $livre->prix }}</td>
                        <td>{{ $livre->quantite }}</td>
                        <td class="d-flex">

                          <a href="{{route('livre.afficher', $livre)}}" class="btn btn-success ml-2"><svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg></a>
                          <a href="{{route('livre.deleteafficher', $livre)}}" class="btn btn-danger ml-2"><svg svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                          </svg></a>
                        </td>
                          
    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$leslivres->links()}}
            @else
                <p> 
                    Aucun livre n'a été retrouvé
                </p>
            @endif
            </div>
    
        </div>
    </div>
 </x-master-layout>