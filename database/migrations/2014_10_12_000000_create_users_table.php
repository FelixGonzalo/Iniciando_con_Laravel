<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Integer Unsigned Increment
            // $table->string('name', 100);  // varchar(100)
            // $table->text('name');  // texto con mas caracteres
            $table->string('name');  // varchar(245)
            $table->string('email')->unique(); //unique para no repetir dato
            $table->timestamp('email_verified_at')->nullable(); // nullable indica que puede quedar vacio
            $table->string('password');
            $table->rememberToken(); // columna varchar(100) para token que perminte mantener sesion
            $table->timestamps(); // created_at y pdated_at para el control de cambios
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // elimina tabla
        Schema::dropIfExists('users');
    }
}
