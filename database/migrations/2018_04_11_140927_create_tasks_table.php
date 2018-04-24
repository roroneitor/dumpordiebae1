<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rif', 12);
            $table->integer('module_id')->unsigned();
            $table->integer('assigned_user_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned();
            $table->integer('priority_id')->unsigned();
            $table->timestamp('date_init')->nullable();
            $table->timestamp('date_end')->nullable();
            $table->text('description');
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
        Schema::dropIfExists('tasks');
    }
}
