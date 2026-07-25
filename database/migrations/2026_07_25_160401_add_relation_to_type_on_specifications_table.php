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
        Schema::table('specifications', function (Blueprint $table) {
            if (Schema::hasColumn("specifications", "type")) {
                $table->dropColumn("type");
            }
            $table->unsignedBigInteger("type")
                ->nullable();
            $table->foreign("type", "type_specs_type_units")
                ->references("id")
                ->on("type_units")
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('specifications', function (Blueprint $table) {
            //
        });
    }
};
