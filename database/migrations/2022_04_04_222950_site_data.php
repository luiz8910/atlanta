<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SiteData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->text('roteiros')->nullable();
            $table->string('img_roteiros')->nullable();
            $table->text('texto_viajar')->nullable();
            $table->text('texto_lazer')->nullable();
            $table->string('img_viajar_1')->nullable();
            $table->string('img_viajar_2')->nullable();
            $table->string('img_viajar_3')->nullable();
            $table->string('img_viajar_4')->nullable();
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
        Schema::drop('sites');
    }
}
