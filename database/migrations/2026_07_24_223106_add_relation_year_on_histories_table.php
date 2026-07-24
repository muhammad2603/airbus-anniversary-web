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
        Schema::table("histories", function (Blueprint $table) {
            $table->foreign("year_ref")
                ->references("id")
                ->on("years_history")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("histories", function(Blueprint $table) {
            $table->dropForeign(["year_ref"]);
        });
    }
};
