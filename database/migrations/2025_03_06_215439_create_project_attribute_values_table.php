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
        Schema::create('project_attribute_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entity_id')->constrained('projects')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('attribute_id')->constrained('project_attributes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_attribute_values');
    }
};
