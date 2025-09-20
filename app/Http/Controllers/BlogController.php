<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\View\View;

class BlogController extends Controller
{
     public function index():  view {
        $post = \App\Models\Poste::paginate(10);
        return view('blog.index');

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
public function show(string $slug, string $id, Request $request): RedirectResponse | \App\Models\Poste
{
         //recuperation d'un article par son id et son slug
         $post = \App\Models\Poste::findorFail($id);
         if ($post->slug !== $slug) {
             return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
         }
         return $post;
    }
}
