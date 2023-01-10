<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            // Azienda
            // Stazione di partenza
            // Stazione di arrivo
            // Orario di partenza
            // Orario di arrivo
            // Codice Treno
            // Numero Carrozze
            // In orario
            // Cancellato
            $table->string('azienda',50);
            $table->string('stazione_di_partenza',100);
            $table->string('stazione_di_arrivo',100);
            $table->date('orario_di_partenza');
            $table->date('orario_di_arrivo');
            $table->smallInteger('codice_treno');
            $table->smallInteger('numero_carrozza');
            $table->tinyInteger('in_orario')->unsigned()->default(1);
            $table->tinyInteger('cancellato')->unsigned()->default(1);
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
        Schema::dropIfExists('train');
    }
};
