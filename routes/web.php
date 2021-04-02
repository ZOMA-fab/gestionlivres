<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/',                      [MainController::class, 'afficheAcceuil'] )->name('accueil');

Route::get('ajouter_livre',          [MainController::class, 'ajouterLivre'])->name('ajouter.livre')  ;

Route::get("livre/enregistrer",      [MainController::class, "enregistrerLivre"])->name('livre.enregistrer');

Route::get('livre/liste',            [MainController::class, 'getList'])->name('livre.liste');

Route::get('afficher/livre/{livre}', [MainController::class, 'editLivre'])->name('ph');

Route::post('modifier/{id}',         [MainController::class, 'updateLivre'])->name('livre.modifier');

Route::get('afficher/deletelivre/{livre}', [MainController::class, 'editdeleteLivre'])->name('livre.deleteafficher');

Route::post('supprimer/livre/{id}',        [MainController::class, 'deleteLivre'])->name('livre.supprimer');

Route::get("test-mail",                    [MainController::class, "sendMail"]);