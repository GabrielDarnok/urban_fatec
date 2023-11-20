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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->json('id_produto');
            $table->json('tamanho_produto');
            $table->json('cor_produto');
            $table->json('quantidade_produto');
            $table->float('total_pedido',8 , 2);
            $table->boolean('status_pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {    
        Schema::dropIfExists('pedidos');
    }
};
