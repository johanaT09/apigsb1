<?php

namespace App\Providers;

use App\Models\ServiceFrais;
use Illuminate\Support\ServiceProvider;

class FraisService extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    function verifie($idFrais)
    {
        $service= new ServiceFrais();
        $frais= $service->getFrais($idFrais);
        $visiteur=Auth::user();
        if ($frais->id_visiteur!=$visiteur->id_visiteur)
            return redirect(route('login'));

        return json_encode($frais);
    }
}
