<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * DependsOn(create_address_table::class)
     * 
     */
    public function up(): void
    {
        Schema::create('employment', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('last_name');
            $table->char('cpf', 11);
            $table->date('date_birth');
            $table->char('phone', 11);
            $table->string('email');
            $table->date('hiring_date');
            $table->string('specialist');
            $table->string('address_id');
            $table->foreign('address_id')
                ->references('id')
                ->on('address')
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
        Schema::dropIfExists('employment');
    }
};
