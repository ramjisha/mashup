<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // creates a new notifications table
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id'); //creates integer autoincrementing id column which is th primary key
            $table->integer('user_id'); // creates an integer user_id column
            $table->string('title'); // creates a varchar column of size 256
            $table->string('content',1000); // creates a varchar column of size 1000
            $table->timestamps(); // creates created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
