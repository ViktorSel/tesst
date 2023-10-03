<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(User::TABLE, function (Blueprint $table) {
            $table->id(User::FIELD_ID);
            $table->string(User::FIELD_NAME);
            $table->string(User::FIELD_EMAIL)->unique();
            $table->string(User::FIELD_LOGIN)->unique();
            $table->timestamp(User::FIELD_EMAIL_VERIFIED)->nullable();
            $table->string(USER::FIELD_PASSWORD);
            $table->boolean(User::FIELD_ISADMIN);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(User::TABLE);
    }
};
