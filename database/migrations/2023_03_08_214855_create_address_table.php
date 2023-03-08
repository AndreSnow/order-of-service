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
        Schema::create('address', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('zip_code');
            $table->string('country');
            $table->char('state', 2);
            $table->string('city');
            $table->string('street');
            $table->integer('employment_id')->nullable();
            $table->foreign('employment_id')
                ->references('id')
                ->on('employment')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('client_id')->nullable();
            $table->foreign('client_id')
                ->references('id')
                ->on('client')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
