<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
     function index() {

         //APRES AVOIR CRER LA TABLE AVEC UNE MIGRATION
         //ET LE MODEL AVEC LA COMMANDE : php artisan make:model Poste
         //ON PEUT MAINTENANT INTERAGIR AVEC LA BASE DE DONNE

         //ajout d'un article avec Eloquent
        /*  $post = new App\Models\Poste();
         $post->title = "Troisieme articles";
         $post->slug = "article-3";
         $post->content = "Contenu du Troisieme article";
         $post->save(); */

         /* recuperation de tous les articles
         $post = App\Models\Poste::all(); */

         //recuperation d'un article par son id
         // $post = App\Models\Poste::find(2);

         // utilisation de where pour recuperer un article par son slug
         //query builder
         //$post = App\Models\Poste::where('slug', 'article-2')->first();
}
}
