<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('member');
            $table->string('name');
            $table->string('street');
            $table->string('postcode');
            $table->string('city');
            $table->string('canton')->nullable();
            $table->string('country')->default('BiH');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('is_email_verified')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_dijaspora')->nullable();
            $table->string('password')->nullable();
            $table->string('message')->nullable();
            $table->string('ip')->default('0.0.0.0');
            $table->tinyInteger('active')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->string('deleted_reason')->nullable();
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
        Schema::dropIfExists('members');
    }
};
