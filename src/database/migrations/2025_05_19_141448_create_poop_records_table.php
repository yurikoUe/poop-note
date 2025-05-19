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
        Schema::create('poop_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('child_id')->constrained()->onDelete('cascade');
            $table->dateTime('datetime');
            $table->unsignedTinyInteger('hardness'); // 1〜7（ブリストルスケール）
            $table->string('medicine')->nullable();
            $table->json('symptoms')->nullable(); // ["blood", "pain"]
            $table->text('note')->nullable(); // メモ
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poop_records');
    }
};
