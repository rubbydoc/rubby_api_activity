<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('bank_name');
            $table->string('bank_account_number');
            $table->string('bank_account_type');
            $table->string('email');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
};
