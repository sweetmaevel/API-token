<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomizedcake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customizedcake', function (Blueprint $table) {
            $table->id();
            $table->string ("design");
            $table->string("flavor");
            $table->string("details");
            $table->string("size");
            $table->integer("prize");
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
        Schema::dropIfExists('customizedcake');
    }
}
