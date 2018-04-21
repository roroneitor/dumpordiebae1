<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTaskCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('task_comment', function(Blueprint $table){
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('task_id')->references('id')->on('tasks');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('task_comment', function(Blueprint $table){
        $table->dropForeign('task_comment_user_id_foreign');
        $table->dropForeign('task_comment_task_id_foreign');
      });
    }
}
