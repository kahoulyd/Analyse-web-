<?php

use App\Http\Controllers\AnalysisController;
use Illuminate\Http\Request;

require './vendor/autoload.php';
echo "bonjour";
$req = Request::createFromGlobals();
$array = [
    'url' => 'http://site.com/',
    'Profondeur' => '1', //Profondeur 0-5
    'liensx' => '1', //Liens externes 0 = non / 1 = oui
    'analyse_synt' => '1', //Analyse syntaxique 0 = non / 1 = oui
    'TempsRep' => '200',  //Temps accepté
    'op_images' => '1' // Analyse d'images 0 = non / 1 = oui
] ;
$req2 = $req->duplicate($array);
echo "-----------------------------------------";
var_dump($req2->all());
echo "-----------------------------------------";
$cont = new AnalysisController();
var_dump($cont->loading_time($req2));
?>
