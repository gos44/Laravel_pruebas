<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCousinsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cousins', function (Blueprint $table) {
            $table->id();
            $table->integer("a");
            $table->string('primo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('cousins', function (Blueprint $table) {
            $table->dropColumn('primo');
        });
    }
}
