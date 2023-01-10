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
        Schema::create('trains', function (Blueprint $table) {
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
            $table->string('company',50);
            $table->string('station_departure',100);
            $table->string('station_arrive',100);
            $table->dateTime('date_departure');
            $table->dateTime('date_arrive');
            $table->int('train_code')->nullable();
            $table->smallInteger('carriage_number')->nullable();
            $table->boolean('in_time')->unsigned()->default(1);
            $table->boolean('cancelled')->unsigned()->default(1);
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

