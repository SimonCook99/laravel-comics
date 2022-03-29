<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $fumetti = config("comics");
    

    $lists = [
        "listaHeader" => ["Characters", "Comics", "Movies", "Tv", "Games", "Collectibles", "Videos", "Fans", "News", "Shop"],

        "listeFooter" => [
            "lista1" => ["Characters", "Comics", "Movies", "Tv", "Games", "Videos", "News"],
            "lista2" => ["Shop DC", "Shop DC Collectibles"],
            "lista3" => ["Terms of use", "Privacy policy (New)","Ad Choices","Advertising","Jobs","Subscriptions","Talent workshops","CPSC certificates","Ratings","Shop helps","contact us"],
            "lista4" => ["DC", "Mad Magazine", "DC Kids", "DC Universe", "DC Power visa"]
        ]
    ];
    return view('home', ["fumetti" => $fumetti]);
});


//La sezione del link chiusa tra {} indica una parte del link variabile, che possiamo recuperare tramite la funzione anonima (purchè con lo stesso nome)
Route::get("/fumetto/{comicID}", function($comicID){
    $fumetti = config("comics");

    if(is_numeric($comicID) && $comicID >= 0 && $comicID < count($fumetti)){
        $fumetto = $fumetti[$comicID];

        return view("comicDetails", ["fumetto" => $fumetto]);
    }else{
        abort(404, "Risorsa non trovata");
    }
});
