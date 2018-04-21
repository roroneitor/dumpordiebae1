<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 12)->unique();
            $table->string('business_name')->unique();
            $table->string('email')->unique();
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->bigInteger('phone')->unsigned()->unique();
            $table->integer('created_user_id')->unsigned();
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
        Schema::dropIfExists('clients');
    }
}
