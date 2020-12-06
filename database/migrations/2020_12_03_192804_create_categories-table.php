<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('categories'); /* sur $table je souhaite mettre une clétrangère sur parent_id
             qui référence l'Id sur la table catégories*/ 
        });

        

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('users');
    }
}
