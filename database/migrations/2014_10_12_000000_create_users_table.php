<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string("dni",9)->nullable();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->string("names")->nullable();
            $table->string("state")->nullable();
            $table->string("description")->nullable();
            $table->string("title")->nullable();
            $table->date("date_end")->nullable();
            
            
            
            $table->string("password")->nullable();
            $table->date("datebirth")->nullable();
            $table->string("cellphone",20)->nullable();
            $table->longText("photo")->nullable();
            $table->string("sex",1)->nullable();
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
