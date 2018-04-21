<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('clients', function(Blueprint $table){
        // $table->foreign('country_id')->references('id')->on('countries');
        // $table->foreign('state_id')->references('id')->on('clients');
        $table->foreign('created_user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('clients', function(Blueprint $table){
        // $table->dropForeign('clients_country_id_foreign');
        // $table->dropForeign('clients_state_id_foreign');
        $table->dropForeign('clients_created_user_id_foreign');
      });
    }
}
