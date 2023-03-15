    <?php

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
            Schema::create('address', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->integer('postal_code');
                $table->string('country');
                $table->char('state', 2);
                $table->string('city');
                $table->string('street');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('address');
        }
    };
