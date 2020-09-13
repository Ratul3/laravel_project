<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offered', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('area');
			$table->string('class');
			$table->string('subject');
			$table->string('salary');
			$table->string('tuition_provider');
			$table->string('teacher_name');
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
        Schema::dropIfExists('offered');
    }
}
