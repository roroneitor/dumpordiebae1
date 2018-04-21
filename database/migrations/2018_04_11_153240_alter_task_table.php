<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tasks', function(Blueprint $table){
        $table->foreign('proyect_id')->references('id')->on('projects');
        $table->foreign('assigned_user_id')->references('id')->on('users');
        $table->foreign('status_id')->references('id')->on('task_status');
        $table->foreign('priority_id')->references('id')->on('task_priority');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('tasks', function(Blueprint $table){
        $table->dropForeign('tasks_proyect_id_foreign');
        $table->dropForeign('tasks_assigned_user_id_foreign');
        $table->dropForeign('tasks_status_id_foreign');
        $table->dropForeign('tasks_priority_id_foreign');
      });
    }
}
