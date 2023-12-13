<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('movies', function(Blueprint $table){
            $table->dropColumn('directors');
            $table->dropColumn('producers');
            $table->dropColumn('actors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('movies', function(Blueprint $table){
        $table->type('directors');
        $table->type('producers');
        $table->type('actors');
        });
    }
};
