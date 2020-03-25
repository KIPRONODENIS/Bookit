<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Order;
use Carbon\Carbon;
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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('service_id');
            $table->datetime('from');
            $table->datetime('to');
            $table->integer('total');
            $table->string('status')->default('booked');
            $table->string('deleted_at')->nullable();
            $table->boolean('paid')->default(false);
            $table->timestamps();
        });

        Order::create([
    'user_id'=>5,
    'hotel_id'=>16,
    'service_id'=>1,
    'from'=>Carbon::now(),
    'to'=>Carbon::now()->addDays(1),
    'total'=>3000,
    'paid'=>true

        ]);
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
