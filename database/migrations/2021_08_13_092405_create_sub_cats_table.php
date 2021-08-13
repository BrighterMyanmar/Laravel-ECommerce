<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCatsTable extends Migration
{
    public function up()
    {
        Schema::create('sub_cats', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->string('name');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_cats');
    }
}
