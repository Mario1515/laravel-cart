<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Mario1515\LaravelCart\Models\Cart;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table): void {
            $table->id();

            $table->foreignIdFor(Cart::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');

            $table->decimal('price', 10, 2)
                ->default(0);

            $table->string('currency', 3)
                ->default('EUR')
                ->index();

            $table->unsignedInteger('quantity')
                ->default(1);

            $table->json('payload')
                ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
