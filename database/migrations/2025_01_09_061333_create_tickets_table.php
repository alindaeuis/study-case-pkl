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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNull();
            $table->string('email')->notNull();
            $table->string('title')->notNull();
            $table->string('description')->nullable();
            $table->date('assign_at')->nullable();
            $table->string('status')->default('open');
            $table->unsignedBigInteger('ticket_type');
            $table->foreign('ticket_type')->references('id')->on('ticket_types')->onDelete('cascade');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
