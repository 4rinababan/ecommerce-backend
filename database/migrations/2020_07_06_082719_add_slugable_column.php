<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugableColumn extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('products', function($table) {
			$table->string('slug', 255)->after('name');
		});
		Schema::table('categories', function($table) {
			$table->string('slug', 255)->after('name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('products', function($table) {
			$table->dropColumn('slug');
		});
		Schema::table('categories', function($table) {
			$table->dropColumn('slug');
		});
	}
}
