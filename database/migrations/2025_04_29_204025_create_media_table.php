<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file_name'); // stored path
            $table->string('mime_type');
            $table->string('disk')->default('public');
            $table->unsignedBigInteger('size');
            $table->string('collection')->default('default');
            // Polymorphic relation (model_type + model_id)
            $table->nullableMorphs('model');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
