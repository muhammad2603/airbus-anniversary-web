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
        Schema::create('engine_specs', function (Blueprint $table) {
            $table->id();
            $table->string("label", 100);
            $table->string("thrust", 30);
            $table->string("bypass_ratio", 30);
            $table->string("dry_weight", 30);
            $table->unsignedInteger("type")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engine_specs');
    }
};
