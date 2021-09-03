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
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('pseudo')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('telephone')->nullable();
            $table->integer('cin')->nullable();
            $table->string('adress');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('profilPhoto')->nullable();
            $table->string('password');
            $table->decimal('salaire')->nullable();
            $table->enum('fonction',['pdg','livreur','admin','comptable','promoteur'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
