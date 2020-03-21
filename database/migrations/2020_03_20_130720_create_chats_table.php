<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Chat;
class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sender_id');
            $table->bigInteger('receiver_id');
            $table->string('message');
            $table->boolean('read')->default(false);
            $table->timestamps();
        });

        Chat::create([
   'sender_id'=>2,
   'receiver_id'=>3,
   'message'=>'Hi'
        ]);


        Chat::create([
   'sender_id'=>2,
   'receiver_id'=>3,
   'message'=>'Hi'
        ]);
                Chat::create([
   'sender_id'=>2,
   'receiver_id'=>4,
   'message'=>'Hi'
        ]);
        Chat::create([
   'sender_id'=>4,
   'receiver_id'=>2,
   'message'=>'Hi'
        ]);


                Chat::create([
   'sender_id'=>3,
   'receiver_id'=>2,
   'message'=>'Hi too'
        ]);

        
        Chat::create([
   'sender_id'=>3,
   'receiver_id'=>2,
   'message'=>'How are you'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
