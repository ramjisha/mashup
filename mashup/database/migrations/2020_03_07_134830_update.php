<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // edits notifications table
        Schema::table('notifications', function (Blueprint $table) {
            $table->timestamp('read_at')->nullable(); // creates a nullable timestamp column
            $table->string('content',1000)->nullable()->change(); // changes the content field to allow null values
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // edits notifications table
        Schema::table('notifications', function (Blueprint $table) {
            $table->timestamp('read_at')->nullable(); // creates a nullable timestamp column
            $table->string('content',1000)->nullable()->change(); // changes the content field to allow null values
        });
    }
}
