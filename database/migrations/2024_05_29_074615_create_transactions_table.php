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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('transaction_date');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('recyclebank_id')->constrained('recyclebanks');
            $table->foreignId('servtype_id')->constrained('servtypes');
            $table->foreignId('wastetype_id')->constrained('wastetypes');
            $table->float('waste_weight');
            $table->unsignedBigInteger('points_earned')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
