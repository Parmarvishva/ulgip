<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->string('site_name')->default('ULGIP');
            $table->string('site_logo')->nullable();
            $table->string('favicon')->nullable();

            $table->string('hero_title');
            $table->text('hero_subtitle')->nullable();
            $table->string('hero_image')->nullable();

            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();

            $table->text('address')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};