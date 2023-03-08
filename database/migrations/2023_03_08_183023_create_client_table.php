<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @DependsOn({
     * create_product_table::class
     * create_service_table::class
     * create_address_table::class
     * })
     * 
     */
    public function up(): void
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('last_name');
            $table->char('cpf', 11);
            $table->date('date_birth');
            $table->char('phone', 11);
            $table->string('email')->nullable();
            $table->string('address_id');
            $table->foreign('address_id')
                ->references('id')
                ->on('address')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('product_id');
            $table->foreign('product_id')
                ->references('id')
                ->on('product')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('service_id');
            $table->foreign('service_id')
                ->references('id')
                ->on('service')
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
        Schema::dropIfExists('client');
    }
};
