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
     * create_employment_table::class,
     * create_status_table::class,
     * })
     * 
     */
    public function up(): void
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->date('date_init');
            $table->date('date_finish');
            $table->double('coust');
            $table->string('image')->nullable();
            $table->string('description');
            $table->integer('employment_id');
            $table->foreign('employment_id')
                ->references('id')
                ->on('employment')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('status_id');
            $table->foreign('status_id')
                ->references('id')
                ->on('status')
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
        Schema::dropIfExists('service');
    }
};
