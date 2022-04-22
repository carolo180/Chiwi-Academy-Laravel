<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ReorganizeFieldsToEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    
    {
     
        Schema::table('eventos', function (Blueprint $table) {
            $table->date('event_date')->before('created_at')->change();
                     
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
            Schema::dropColumn("event_date");
          
        });
    }
}
