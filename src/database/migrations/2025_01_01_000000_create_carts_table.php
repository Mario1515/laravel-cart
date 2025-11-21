<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Mario1515\LaravelCart\Enums\CartStatus;
use Mario1515\LaravelCart\Models\CartPersonalData;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table):void {
            $table->id();

            $table->string('session_id')->unique();

            $table->foreignIdFor(CartPersonalData::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->enum('status', array_column(CartStatus::cases(), 'value'))
                ->default(CartStatus::OPEN->value)
                ->index();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
