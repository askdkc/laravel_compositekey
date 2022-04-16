<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->string('id');
            $table->string('subid');
            $table->text('memo');
            //idとsubidの組み合わせはユニークにする 
            $table->unique(['id', 'subid']);
            //idとsubidからcompositeidを自動生成
            $table->string('compositeid')->storedAs("id || '_' ||subid");
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
        Schema::dropIfExists('memos');
    }
}
