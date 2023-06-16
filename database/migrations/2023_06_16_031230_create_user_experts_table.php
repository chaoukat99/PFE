<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new Class extends Migration
{
    public function up()
    {
        Schema::create('expert_user', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('expert_id');
            $table->enum('status', ['completed', 'onHold', 'canceled']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('expert_id')->references('id')->on('experts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('expert_user');
    }
};
