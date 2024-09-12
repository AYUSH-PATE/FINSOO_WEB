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
        Schema::create('leads', function (Blueprint $table) {
            $table->id('leads_id');
            $table->string('advisor_id');
            $table->string('name');
            $table->string('name_slug');
            $table->string('dob');
            $table->string('mobile1');
            $table->string('mobile2');
            $table->string('reference_by');
            $table->string('interested_product');
            $table->string('attended_by');
            $table->string('status');
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
