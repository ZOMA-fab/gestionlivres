<?php

namespace App\Http\Controllers;



use App\Models\User;
use App\Models\Livre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\NouveauLivreAjoutee;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\LivreFormRequest;


class MainController extends Controller
{
    public function afficheAcceuil()
    {
       // Fonction retournant la page d'accueil
        return view('pages.front-office.welcome', 
        [
           'nomSite'      => 'Service en ligne de mon Ministère',   
           'nomMinistere' => 'Ministere de Laravel au Burkina Faso',   
        ]
        );
    }
    
    // Fonction pour afficher le formulaire de saisie d'un livre
    public function ajouterLivre()
    {
        
            return  view('pages.front-office.saisie-livre');     
    }
    //Fonction pour enregistrer(avec validation des données a travers une forme request LivreFormRequest ) un livre à partir du formulaire
    public function enregistrerLivre(LivreFormRequest $request)
    {


        $produit= Livre::create([
            "uuid" => Str::uuid(),
            "titre" => $request->titre,
            "auteur" => $request->auteur,
            "prix" => $request->prix,
            "quantite" => $request->quantite,
            
            $user = User::first();
            Mail::to($user)->send(new NouveauLivreAjoutee($produit));
                 
        ]);
        return redirect()->back()->with('statut', 'Livre ajouté avec succès');
    }
    // Fonction pour afficher la liste des livres
    	   public function getList()
    	    {
             //dd('listeOk');
             $leslivres = Livre::paginate(5);
             return view('pages.front-office.list-livre',[
                'leslivres' => $leslivres
             ]);
     
    	    }
    //Fonction pour afficher les details d'un livre dans un formulaire
            public function editLivre(Livre $livre)
            {
              
               return view("pages.front-office.edit-livre", [
                      'livre' => $livre,
               ]);
                
            }

   //Fonction pour modifier (avec validation des données a travers une forme request LivreFormRequest ) un livre après avoir afficher le livre concerné
   public function updateLivre(LivreFormRequest $request, $id)

     {
         
      Livre::where('id', $id)->update([
             'titre'=> $request->titre,
             'auteur'=> $request->auteur,
             'prix'=> $request->prix,
             'quantite'=> $request->quantite,
            
         ]);
         return redirect()->back()->with('statut', 'Livre modifier avec succès');
     }
     //Fonction pour afficher le livre a supprimer
     public function editdeleteLivre(Livre $livre)
     {
      
        return view("pages.front-office.delete-livre", [
               'livre' => $livre,
        ]);
         
     }
    //Fonction pour supprimer un livre
    public function deleteLivre($id)
    {
      $livre = Livre::find($id);
      $livre ->destroy($id);
      return redirect()->route('livre.liste')->with('statut', 'Livre supprimer avec succès');
    }
    //fonction pour envoyer un mail
    public function sendMail()
	     {
	         $user = User::first();
	         Mail::to($user)->send(new NouveauLivreAjoutee());
	         dd("Le mail a bien été envoyé");
	         
	     }

}
