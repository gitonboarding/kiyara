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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');                  // Name of the tour
            $table->string('image');                 // Image URL or file path
            $table->string('duration');              // Duration of the tour (e.g., '3 days', '5 hours')
            $table->integer('parson_no');            // Number of persons
            $table->string('category');              // Category of the tour (e.g., 'Adventure', 'Sightseeing')
            $table->decimal('price', 10, 2);         // Price of the tour
            $table->text('dec')->nullable();         // Description of the tour (nullable)
            $table->softDeletes();                   // Soft delete column
            $table->timestamps();                    // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
