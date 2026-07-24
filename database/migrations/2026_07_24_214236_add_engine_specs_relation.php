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
        Schema::table("engine_specs", function (Blueprint $table) {
            $table->unsignedBigInteger("engine_id")->unique();
            $table->foreign("engine_id")
                ->references("id")
                ->on("engines")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn("engine_specs", "engine_id")) {
            Schema::dropColumns("engine_specs", "engine_id");
        }
    }
};
