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
        Schema::table("airlines", function (Blueprint $table) {
            $table->foreignId("city_id")
                ->nullable()
                ->constrained("cities")
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId("globe_id")
                ->nullable()
            ->constrained("globes")
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("airlines", function (Blueprint $table) {
            if (Schema::hasForeignKey("airlines", "city_id")) {
                $table->dropConstrainedForeignId("city_id");
            }
            if (Schema::hasForeignKey("airlines", "globe_id")) {
                $table->dropConstrainedForeignId("globe_id");
            }
        });
    }
};
