<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQlsvMonhocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qlsv_monhocs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenmonhoc');
            $table->string('muctieu1');
			$table->string('muctieu2');
			$table->string('muctieu3');
			$table->string('muctieu4');
			$table->string('muctieu5');
			$table->string('muctieu6');
			$table->string('muctieu7');
			$table->string('muctieu8');
			$table->string('muctieu9');
			$table->string('muctieu10');
			$table->string('muctieu11');
			$table->string('muctieu12');
			$table->string('muctieu13');
			$table->string('muctieu14');
			$table->string('muctieu15');
			$table->string('muctieu16');
			$table->string('muctieu17');
			$table->string('muctieu18');
			$table->string('muctieu19');
			$table->string('muctieu20');
			$table->string('muctieu21');
			$table->string('muctieu22');
			$table->string('muctieu23');
			$table->string('muctieu24');
			$table->string('muctieu25');
			$table->string('muctieu26');
			$table->string('muctieu27');
			$table->string('muctieu28');
			$table->string('muctieu29');
			$table->string('muctieu30');
			$table->string('muctieu31');
			$table->string('muctieu32');
            $table->string('nguoitao');
            $table->string('nguoisua');
            $table->integer('deleted_at');
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
        Schema::dropIfExists('qlsv_monhocs');
    }
}
