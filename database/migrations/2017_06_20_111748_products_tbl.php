<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productsTbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->text('description');
            //$table->string('email',55)->unique();
            $table->string('photo',255)->nullable();
            $table->decimal('price',11,2);
            $table->integer('home_office')->default('0');
            //$table->tinyInteger('home_office')->default('0');
            $table->string('type',10);
            $table->integer('status');
            //$table->rememberToken();
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
        //
        Schema::dropIfExists('productsTbl');
    }
}
