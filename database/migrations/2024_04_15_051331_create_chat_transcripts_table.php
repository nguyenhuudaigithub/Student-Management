<?php
// In the migration file (e.g., YYYY_MM_DD_create_chat_transcripts_table.php)
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatTranscriptsTable extends Migration
{
    public function up()
    {
        Schema::create('chat_transcripts', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_transcripts');
    }
}
