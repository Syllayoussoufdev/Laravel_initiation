<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/blog')->name('blogues.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');

    Route::get('/{slug}-{id}', [BlogController::class, 'show'])->where([
        'id'=> '[0-9]+',
        'slug' => '[a-z0-9\-]+',
    ]) ->name('show');
    //Route::get('/', function (Request $request) {
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


        //modifier un article
        /* $post = App\Models\Poste::find(1);
        $post->title = "Article modifié";
        $post->save(); delete()*/

    //     return \App\Models\Poste::paginate(10) /* 'Bienvenue sur la page principale du blog !' */;
    // })->name('index');

    // Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
    //     //recuperation d'un article par son id et son slug
    //     $post = App\Models\Poste::findOrFail($id);
    //     if ($post->slug !== $slug) {
    //         return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
    //     }
    //     return $post;
    // })->where([
    //     'id'=> '[0-9]+',
    //     'slug' => '[a-z0-9\-]+',
    // ])->name('show');
});



/* Route::prefix('/blug')->name('bloguesia')->group(function () {
    Route::get('/', function () {
        return 'Bienvenue sur la page principale du blog !';
    })->name('index');

    Route::get('/{id}', function ($id) {
        return "Vous consultez l'article avec l'ID : $id";
    })->where('id', '[0-9]+')->name('show');
});

route::get('/home', function () {
    return 'Bienvenue sur la page d\'accueil !';
})->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    })->name('admin.dashboard');
}); */
