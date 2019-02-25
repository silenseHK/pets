<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->text('content')->comment('内容');
            $table->string('abstract')->comment('摘要');
            $table->integer('user_id')->default(0)->comment('用户id');
            $table->integer('scan_num')->default(0)->comment('浏览次数');
            $table->integer('comment_num')->default(0)->comment('评论人数');
            $table->tinyInteger('status')->comment('分类状态:1.可用;2.不可用')->default(1);
            $table->string('cover_img')->comment('封面图');
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
        Schema::dropIfExists('articles');
    }
}
