<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category'); // legal, circular, sop, act, rule
            $table->string('sub_category')->nullable();
            $table->text('description')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file_size')->nullable();
            $table->string('file_type')->default('PDF');
            $table->string('issued_by')->nullable();
            $table->date('published_date')->nullable();
            $table->string('reference_number')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('download_count')->default(0);
            $table->enum('status', ['draft', 'published', 'archived'])->default('published');
            $table->boolean('is_public')->default(true);
            $table->foreignId('uploaded_by')->nullable()->constrained('users')->nullOnDelete();
            $table->json('tags')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
