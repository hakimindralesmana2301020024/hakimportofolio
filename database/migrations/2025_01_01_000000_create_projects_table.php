<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
public function up()
{
Schema::create('projects', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->string('slug')->unique();
$table->string('excerpt')->nullable();
$table->text('body')->nullable();
$table->string('thumbnail')->nullable();
$table->string('stack')->nullable();
$table->string('demo_url')->nullable();
$table->string('repo_url')->nullable();
$table->timestamp('published_at')->nullable();
$table->timestamps();
});
}


public function down()
{
Schema::dropIfExists('projects');
}
};