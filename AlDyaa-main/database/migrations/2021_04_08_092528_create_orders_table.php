<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('serial')->nullable();
            $table->string('polise');
            $table->string('Account_name');
            $table->string('file');
            //$table->string('file');
            
            $table->string('receiver_full_name');
            $table->string('receiver_phone_number');
            $table->string('receiver_secondary_phone_number');
            $table->string('city');
            $table->string('area');
            $table->string('receiver_street_name');
            $table->string('receiver_notes');
           

            $table->string('package_charge');
            $table->string('shpping_charge');
            $table->string('postal_charge');
            $table->string('package_content');

            //$table->string('deleted_at')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
