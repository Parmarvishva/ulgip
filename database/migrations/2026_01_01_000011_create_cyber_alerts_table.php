<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cyber_alerts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('severity'); // critical, high, medium, low
            $table->string('category'); // phishing, malware, ransomware, fraud, advisory
            $table->string('source')->nullable();
            $table->string('reference_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->date('alert_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cyber_alerts');
    }
};
