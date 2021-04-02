<x-master-layout >
    <br>
    <div class="container">
        <div class="row">
        <h1 class="text-center">Ajout d'un nouveau livre<h1>
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
            <form action="{{ route('livre.enregistrer')}}" method="get">
                <!--@method("POST")-->
                @csrf
                <div class="form-group">
                  <label for="">Titre</label>
                  <input value="{{ old('titre')}}" type="text" name="titre" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('titre')
                    <small class="text-danger"> {{ $message  }}</small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Auteur</label>
                    <input value="{{ old('auteur')}}" type="text" name="auteur" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('auteur')
                     <small class="text-danger"> {{ $message  }}</small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input value="{{ old('prix')}}" type="number" name="prix" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('prix')
                    <small class="text-danger"> {{ $message  }}</small>
                @enderror
                </div>
                <div class="form-group">
                    <label for="">Quantité</label>
                    <input  value="{{ old('quantite')}}" type="number" name="quantite" id="" class="form-control" placeholder="" aria-describedby="helpId">
                @error('quantite')
                    <small class="text-danger"> {{ $message  }}</small>
                @enderror
                </div>               
                    <!--<div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="like" id="" value="1">1
                        <input class="form-check-input" type="checkbox" name="like" id="" value="2">2
                    </label>
                </div>-->
                <button type="submit" class="btn btn-success btn-block btn-lg">Valider</button>
            </form>
        </div>
    </div>
    
    </x-master-layout>