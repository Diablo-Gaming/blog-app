<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\PostStatusEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->enum('status', [
                PostStatusEnum::DRAFT->value,
                PostStatusEnum::SUBMITTED->value,
                PostStatusEnum::ACCEPTED->value,
                PostStatusEnum::REJECTED->value,
            ]);
            $table->morphs('statusable');
            $table->foreignId('changed_by')
                ->constrained('users','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
