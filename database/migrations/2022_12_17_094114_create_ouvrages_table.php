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
        Schema::create('ouvrages', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->unique();
            $table->string('description')->unique();
            $table->unsignedBigInteger('domain_id');
            $table->enum('type_ouvrage',['Livre', 'Article', 'Document', 'Autre']);
            $table->string('pages');
            $table->string('auteur');
            $table->date('datepublication');
            $table->string('maisoneditor');
            $table->string('image')->nullable();
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ouvrages');
    }
};
