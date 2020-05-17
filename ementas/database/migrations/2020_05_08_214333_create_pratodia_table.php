<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePratodiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prato_dias', function (Blueprint $table) {
           // $table->id();
            $table->increments('id');
            
            $table->string('sopa1', 200)->nullable(); 
            $table->string('sopa2', 200)->nullable();
            $table->string('peixe1', 200)->nullable(); 
            $table->string('peixe2', 200)->nullable();
            $table->string('carne1', 200)->nullable(); 
            $table->string('carne2', 200)->nullable();
            $table->string('sobremesa1', 200)->nullable(); 
            $table->string('sobremesa2', 200)->nullable();

            $table->string('sopa1preco', 5)->nullable(); 
            $table->string('sopa2preco', 5)->nullable();
            $table->string('peixe1preco', 5)->nullable(); 
            $table->string('peixe2preco', 5)->nullable();
            $table->string('carne1preco', 5)->nullable(); 
            $table->string('carne2preco', 5)->nullable();
            $table->string('sobremesa1preco', 5)->nullable(); 
            $table->string('sobremesa2preco', 5)->nullable();

            $table->text('obs')->nullable(); 

            $table->string('dia', 10)->nullable();
            
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
        Schema::dropIfExists('pratodia');
    }
}
