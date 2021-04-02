<x-master-layout >
    <br>
    <div class="container">
        <div class="row">
        <h1 class="text-center">Supprimer un livre<h1>
        </div>
        @if (session('statut'))
            
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                {{session('statut')}} 
            </div>
               
        @endif
        <div class="row">
            <form action="{{route('livre.supprimer', $livre->id)}}" method="post">
                @method("POST")<!--permet à laravel d'utiliser la méthode post -->
                @csrf<!--permet de securiser les données envoyées par le formulaire -->
                <div class="form-group">
                  <label for="">Titre</label>
                  <input value="{{ $livre->titre}}" type="text" name="titre" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('titre')
                    <small class="text-danger"> {{ $message  }}</small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Auteur</label>
                    <input value="{{ $livre->auteur}}" type="text" name="auteur" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('auteur')
                     <small class="text-danger"> {{ $message  }}</small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input value="{{ $livre->prix}}" type="number" name="prix" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('descritpion')
                    <small class="text-danger"> {{ $message  }}</small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Quantite</label>
                    <input  value="{{$livre->quantite}}" type="number" name="quantite" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('quantite')
                    <small class="text-danger"> {{ $message  }}</small>
                @enderror
                </div>

                <button type="submit" class="btn btn-danger btn-block btn-lg">Supprimer</button>
            </form>
        </div>
    </div>
    
    </x-master-layout>