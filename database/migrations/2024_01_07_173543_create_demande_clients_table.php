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
        Schema::create('demande_clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->default('user');
            $table->string('prenom')->default('user');
            $table->string('email')->default('user_email');
            $table->string('codeclient')->default('none');
            $table->date('jour');
            $table->string('heure');
            $table->string('montant_paye')->default('0');
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
        Schema::dropIfExists('demande_clients');
    }
};
