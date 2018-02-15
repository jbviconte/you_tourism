<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('lieux', function (Blueprint $table) {
          $table->increments('id');
          $table->string('lieu', 150);
          $table->text('content');
          // $table->enum('status', ['actif', 'inactif']);
          // $table->integer('user_id')->unsigned();
          // $table->foreign('user_id')->references('id')->on('users')
          //       ->onDelete('restrict')->onUpdate('restrict');
          $table->string('name_image')->nullable();
          $table->string('new_name_image')->nullable();
          $table->string('path_image')->nullable();
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
        Schema::dropIfExists('lieux');
    }
}
