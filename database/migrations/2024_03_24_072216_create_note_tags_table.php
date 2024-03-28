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
        Schema::create('note_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('note_id');
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->timestamps();

            // IDX
            $table->index('note_id', 'note_tag_note_idx');
            $table->foreign('tag_id', 'note_tag_tag_fx');

            // FX

            $table->foreign('note_id', 'note_tag_note_fx')->on('notes')->references('id');
            $table->foreign('tag_id', 'note_tag_tag_fx')->on('tags')->references('id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note_tags');
    }
};
