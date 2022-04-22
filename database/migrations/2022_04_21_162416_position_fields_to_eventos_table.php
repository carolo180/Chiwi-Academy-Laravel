<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PositionFieldsToEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    
    {
        Schema::table('eventos', function(Blueprint $table)
        {
            $table->dropColumn("created_at");
        });
    
        Schema::table('eventos', function(Blueprint $table)
        {
            $table->string('created_at')->after("description");
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->dropColumn('created_at');
          
        });
    }
}

