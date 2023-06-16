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
        Schema::disableForeignKeyConstraints();
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->enum('status',['comfirmed','refused']);
            $table->foreignId('experts_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade')
                  ;
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade')
                  ;

            $table->enum('sentBy',['admin','client','expert']);
            $table->enum('sentTo',['admin','client','expert']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
