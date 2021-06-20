<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            // one to one
            $table->unsignedBigInteger('user_id')->unique();// ->nullable() para set null
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade') // set null
                ->onUpdate('cascade');
            $table->string('title', 45);
            $table->text('biography');
            $table->string('website', 45);
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
        Schema::dropIfExists('profiles');
    }
}
