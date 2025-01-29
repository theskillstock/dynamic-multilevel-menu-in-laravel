<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 1000); // First name
            $table->string('lname', 1000); // Last name
            $table->string('email', 1000)->unique(); // Email, unique
            $table->string('username', 1000)->unique(); // Username, unique
            $table->string('password', 1000); // Password
            $table->string('unique_code', 1000); // Unique code
            $table->integer('role')->comment('1 super admin, 2 manager'); // Role
            $table->string('image', 500); // Profile image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
