<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Payment;
class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->string('confirmation');
            $table->string('deleted_at')->nullable();
            $table->string('phone');
            $table->timestamps();
        });

        Payment::create([
      'order_id'=>1,
      'confirmation'=>'CBDF',
      'phone'=>'0799012907'
        ]);
                Payment::create([
      'order_id'=>1,
      'confirmation'=>'CBDF',
      'phone'=>'0799012907'
        ]);
                        Payment::create([
      'order_id'=>1,
      'confirmation'=>'CBDF',
      'phone'=>'0799012907'
        ]);
                                Payment::create([
      'order_id'=>1,
      'confirmation'=>'CBDF',
      'phone'=>'0799012907'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
