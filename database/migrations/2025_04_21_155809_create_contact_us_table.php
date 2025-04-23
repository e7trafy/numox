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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();

            $table->foreignId('page_id')->index()->constrained('pages');

            $table->text('name');

            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();

            $table->string('client_name')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_phone')->nullable();
            $table->string('city')->nullable();
            $table->string('company')->nullable();

            $table->enum('status', ['seen', 'unseen'])->default('unseen');

            $table->enum('type', ['afq', 'contact'])->default('contact');

            $table->longText('content')->nullable();

            $table->json('extra_data')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
