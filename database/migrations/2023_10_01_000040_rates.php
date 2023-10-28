<?php

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// Tài
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('rates');
    }
};
