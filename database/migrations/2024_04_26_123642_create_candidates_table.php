<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('candidates', function (Blueprint $table) {
        $table->id();
        $table->string('img')->nullable();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone')->unique();
        $table->string('cv')->nullable();
        $table->unsignedBigInteger('company_id')->nullable();
        $table->foreign('company_id')->references('id')->on('companies');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
