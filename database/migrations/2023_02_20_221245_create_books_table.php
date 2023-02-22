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
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->foreignIdFor(\App\Models\Author::class)->constrained();
            $table->string('isbn');
            $table->foreignIdFor(\App\Models\Publisher::class)->constrained();
            $table->date('published_date');
            $table->integer('pages');
            $table->string('description');
            $table->string('language');
            $table->string('country');
            $table->foreignIdFor(\App\Models\Series::class)->nullable()->constrained();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
