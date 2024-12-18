<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Cara Menjalankan
1. Nyalakan Xampp
2. Buat Database (bebas, contoh : "dbnusaputra")
3. setting .env sesuaikan databasenya
4. Buka terminal di vscode dan ketik "php artisan migrate"
5. run project "php artisan serve"


Next step 2
1. ketik git pull untuk yang clone / untuk yang download ikut langkah di bawah ini
 a. hp artisan make:controller  ProductController -r
 b. masukan ini pada  return view( view:'dashboard'); productcontroller bagian index
 c. lanjut ketik "php artisan make:model Product -m"
 d. Silakan tambah kode ini di migration _create_products_table.php.
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->text('description')->nullable();
            $table->decimal('selling_price', 10, 2);
            $table->decimal('purchase_price', 10, 2);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
2. Ketik "php artisan migrate"
3. Untuk yang download Silakan buka file app/models/product.php, lalu ubah kodenya menjadi seperti ini:
    class Product extends Model
    {
        use HasFactory;
        protected $fillable = [
            'name',
            'type',
            'description',
            'selling_price',
            'purchase_price',
            'image'
        ];
    }

4. untuk yang download jalankan "php artisan make:seeder ProductSeeder"

        DB::table('products')->insert([
            [
                'name' => 'Produk 1',
                'type' => 'Elektronik',
                'description' => 'Deskripsi untuk Produk 1',
                'selling_price' => 1000000.00,
                'purchase_price' => 800000.00,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produk 2',
                'type' => 'Pakaian',
                'description' => 'Deskripsi untuk Produk 2',
                'selling_price' => 200000.00,
                'purchase_price' => 150000.00,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produk 3',
                'type' => 'Peralatan Rumah Tangga',
                'description' => 'Deskripsi untuk Produk 3',
                'selling_price' => 300000.00,
                'purchase_price' => 250000.00,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

5. ubah kode DatabaseSeeder.php menjadi seperti di bawah ini
    <?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ProductSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
