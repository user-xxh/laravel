<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper', function (Blueprint $table) {
            $table->increments('id')->comment('自增主键');
            $table->string('paper_name', 100)->comment('试卷名称')->unique();
            $table->tinyInteger('total_score')->comment('试卷总分')->default(100);
            $table->integer('start_time')->comment('考试开始时间');
            $table->tinyInteger('duration')->comment('考试时间');
            $table->tinyInteger('status')->comment('状态')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
}
