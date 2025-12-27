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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->enum('project_type', ['personal', 'company'])->default('personal');
            $table->enum('status', ['completed', 'ongoing', 'modifying'])->default('ongoing');
            $table->text('description');
            $table->string('primary_image');
            $table->string('live_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('video_link')->nullable();
            $table->string('technologies')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
