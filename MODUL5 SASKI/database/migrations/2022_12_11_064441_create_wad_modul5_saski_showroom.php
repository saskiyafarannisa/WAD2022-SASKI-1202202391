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
        Schema::create('wad_modul5_saski_showroom', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('owner');
            $table->string('brand');
            $table->date('purchase_date');
            $table->string('description');
            $table->string('image');
            $table->string('status');
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
        Schema::dropIfExists('wad_modul5_saski_showroom');
    }
};
