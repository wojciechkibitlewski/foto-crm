<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::table('leads', function (Blueprint $table) {
        
    $table->unsignedBigInteger('client_id');
    $table->foreign('client_id')->references('id')->on('clients');     
            
});
