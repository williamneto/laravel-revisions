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
        Schema::create('veicles', function (Blueprint $table) {
            $table->id();
            $table->integer('peopleId')->unsigned()->after('id');
            $table->foreign('peopleId')
                ->references('id')
                ->on('people')
                ->onDelete('CASCADE');
            $table->string('brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veicles');
    }
};
