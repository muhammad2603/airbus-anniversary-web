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
        Schema::create('global_operators', function (Blueprint $table) {
            $table->id();
            $table->foreignId("airline_id")
                ->constrained(
                    table: "airlines",
                    indexName: "glob_opr_airline_id"
                )
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->unsignedSmallInteger("orders_count")
                ->default(0)
                ->nullable();
            $table->date("operating_since")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_operators');
    }
};
