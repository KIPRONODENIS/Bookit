<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Revenue;
class CreateRevenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->integer('amount');
            $table->string("description");
            $table->timestamps();
        });
        Revenue::create([
            'user_id'=>5,
            'amount'=>150,
            'description'=>'withdrawal fee'
        ]);

                Revenue::create([
            'user_id'=>4,
            'amount'=>150,
            'description'=>'Commission fee'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revenues');
    }
}
