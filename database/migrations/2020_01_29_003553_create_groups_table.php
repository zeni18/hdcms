<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name')->unique()->comment('组名称');
            $table->tinyInteger('default')->unique()->nullable()->comment('默认用户组');
            $table->unsignedSmallInteger('site_num')->comment('可创建的站点数量');
            $table->unsignedTinyInteger('system')->nullable()->comment('系统用户组');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
