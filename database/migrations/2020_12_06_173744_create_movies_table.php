<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nome do filme');
            $table->longText('description')->comment('Descrição do filme');
            $table->foreignId('classification_id')->constrained('classifications')->onUpdate('cascade')->onDelete('cascade');
            $table->date('release')->comment('Data de lançamento do filme')->nullable();
            $table->foreignId('director_id')->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('movies');
    }
}
