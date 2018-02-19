<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('commentaire', function (Blueprint $table) {
          $table->increments('id');
          $table->string('commentaire', 255);
          $table->text('content');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')->onUpdate('restrict');
          $table->integer('lieu_id')->unsigned();
          $table->foreign('lieu_id')->references('id')->on('lieux')
                ->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('commentaire');
    }
}
