<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExxcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exxcels', function (Blueprint $table) {
            $table->id();
            $table->text('productsId');
            $table->text('productTime');
            $table->text('serviceId_FK');
            $table->text('ProductPlanDuration')->nullable();
            $table->text('productsSubject');
            $table->text('productsGrade');
            $table->text('productsPrice');
            $table->text('discount_price');
            $table->text('productBoard');
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
        Schema::dropIfExists('exxcels');
    }
}
