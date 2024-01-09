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
        Schema::create('transfert_historiques', function (Blueprint $table) {
            $table->id();
            $table->string('montant');
            $table->string('reference')->unique();
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->unsignedBigInteger('recevier_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('sender_id')->references('id')->on('clients')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('recevier_id')->references('id')->on('clients')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfert_historiques');
    }
};
