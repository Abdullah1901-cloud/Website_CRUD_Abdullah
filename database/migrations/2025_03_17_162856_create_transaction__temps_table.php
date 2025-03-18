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
        Schema::create('transaction__temps', function (Blueprint $table) {
            $table->id('session_id');
            $table->string('remark');
            $table->unsignedBigInteger('id_transaction');
            $table->timestamps();

            $table->foreign('id_transaction')->references('id_transaction')-> on('transactions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction__temps');
    }
};
