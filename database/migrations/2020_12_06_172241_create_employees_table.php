<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nome do funcionário');
            $table->enum('office', ['actor', 'director', 'both'])->comment('Cargo do funcionário [ator, diretor, ou ambas funções]')->default('actor');
            $table->date('birthday')->comment('Data de nascimento funcionário')->nullable();
            $table->float('height')->comment('Altura do funcionário')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
