<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->increments('id_Eta');
            $table-> string('Nom');
            $table-> text('Desc_eta');
            $table-> string('local_eta' ,50);
            $table-> string('mail_eta',50);
            $table-> string('lien_web_eta',100);
            $table-> string('images');
            $table-> string('Note_eta',50);
            $table-> integer('Montant_par_jour');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissements');
    }
}
