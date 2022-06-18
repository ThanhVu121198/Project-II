<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {

            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('company_name', 255);
            $table->string('address', 255);
            $table->string('town', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->text('checkout-mess');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
