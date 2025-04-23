<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lead;
use App\Models\Project;
use App\Models\Customer;
use App\Models\Subscription;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Budi Sales',
            'email' => 'sales@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_manager' => false
        ]);

        User::create([
            'name' => 'Annabelle Sales',
            'email' => 'sales2@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_manager' => false
        ]);
        
        User::create([
            'name' => 'Dina Manager',
            'email' => 'manager@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_manager' => true
        ]);
        

        \App\Models\Product::create([
            'name' => 'Paket Internet 100 Mbps',
            'description' => 'Layanan internet cepat untuk kantor kecil-menengah.',
            'price' => 500000
        ]);
        
        \App\Models\Product::create([
            'name' => 'Paket Internet 300 Mbps',
            'description' => 'Layanan internet cepat untuk kantor menengah-besar.',
            'price' => 1200000
        ]);
        
        \App\Models\Product::create([
            'name' => 'Paket Internet 1 GB',
            'description' => 'Layanan internet super cepat untuk perusahaan besar.',
            'price' => 3000000
        ]);
        
        // Tambahan baru:
        \App\Models\Product::create([
            'name' => 'Paket Internet 50 Mbps',
            'description' => 'Pilihan hemat untuk rumah dan usaha kecil.',
            'price' => 300000
        ]);
        
        \App\Models\Product::create([
            'name' => 'Paket Internet 500 Mbps',
            'description' => 'Untuk bisnis dengan kebutuhan bandwidth tinggi.',
            'price' => 2000000
        ]);
        
        \App\Models\Product::create([
            'name' => 'Paket Internet Unlimited FUP',
            'description' => 'Layanan tanpa batas dengan Fair Usage Policy.',
            'price' => 850000
        ]);
        

        Customer::create([
            'name' => 'Ahmad',
            'contact' => '081234567890',
            'company' => 'PT. Sukses Selalu',
        ]);

        Customer::create([
            'name' => 'Rina',
            'contact' => '089912345678',
            'company' => 'CV. Maju Jaya',
        ]);

        Customer::create([
            'name' => 'Bambang',
            'contact' => '082233445566',
            'company' => 'PT. IndoTech',
        ]);


        Lead::create([
            'user_id' => 1,
            'product_id' => 1,
            'customer_id' => 1,
            'name' => 'Ahmad',
            'contact' => '081234567890',
            'customer_created' => true,
            'company' => 'PT. Sukses Selalu',
            'notes' => 'Butuh layanan internet untuk kantor baru.'
        ]);
        
        Lead::create([
            'user_id' => 2,
            'product_id' => 2,
            'customer_id' => 2,
            'name' => 'Rina',
            'contact' => '089912345678',
            'customer_created' => true,
            'company' => 'CV. Maju Jaya',
            'notes' => 'Ingin upgrade jaringan kantor.'
        ]);
        
        Lead::create([
            'user_id' => 1,
            'product_id' => 3,
            'customer_id' => 3,
            'name' => 'Bambang',
            'contact' => '082233445566',
            'customer_created' => true,
            'company' => 'PT. IndoTech',
            'notes' => 'Tertarik dengan layanan bundling.'
        ]);
        
        Lead::create([
            'user_id' => 2,
            'product_id' => 4,
            'name' => 'Siti',
            'contact' => '081298765432',
            'company' => 'Toko Sumber Rezeki',
            'notes' => 'Minta penawaran harga internet rumahan.'
        ]);
        
        Lead::create([
            'user_id' => 1,
            'product_id' => 5,
            'name' => 'Dedi',
            'contact' => '083877665544',
            'company' => 'PT. Aman Sentosa',
            'notes' => 'Mau pasang internet untuk cabang baru.'
        ]);
        
        Lead::create([
            'user_id' => 2,
            'product_id' => 6,
            'name' => 'Lina',
            'contact' => '085612345678',
            'company' => 'CV. Global Vision',
            'notes' => 'Butuh konsultasi jaringan LAN.'
        ]);
        
        Lead::create([
            'user_id' => 1,
            'product_id' => 1,
            'name' => 'Yudi',
            'contact' => '082145678912',
            'company' => 'PT. Mega Utama',
            'notes' => 'Butuh koneksi stabil untuk video conference.'
        ]);
        
        Lead::create([
            'user_id' => 2,
            'product_id' => 2,
            'name' => 'Tina',
            'contact' => '081212121212',
            'company' => 'Toko Jaya Abadi',
            'notes' => 'Ingin info paket internet promo.'
        ]);
        
        Lead::create([
            'user_id' => 1,
            'product_id' => 3,
            'name' => 'Fajar',
            'contact' => '087712341234',
            'company' => 'PT. Cahaya Timur',
            'notes' => 'Butuh jaringan untuk gudang.'
        ]);
        
        Lead::create([
            'user_id' => 2,
            'product_id' => 4,
            'name' => 'Wulan',
            'contact' => '088877766655',
            'company' => 'Koperasi Harapan',
            'notes' => 'Ingin pasang internet untuk kantor koperasi.'
        ]);
        
        Subscription::create([
            'customer_id' => 1,
            'product_id' => 1,
            'start_date' => '2025-04-01',
            'end_date' => '2025-05-01'
        ]);

        Subscription::create([
            'customer_id' => 2,
            'product_id' => 2,
            'start_date' => '2025-04-01',
            'end_date' => '2025-05-01'
        ]);

        Subscription::create([
            'customer_id' => 3,
            'product_id' => 3,
            'start_date' => '2025-04-01',
            'end_date' => '2025-05-01'
        ]);


        Project::create([
            'lead_id' => 1,
            'approved_by' => 3,
            'status' => 'approved',
            'notes' => 'Lead sudah diverifikasi dan siap ditindaklanjuti.'
        ]);
        
        Project::create([
            'lead_id' => 2,
            'approved_by' => 3,
            'status' => 'approved',
            'notes' => 'Lead Valid dan Siap ditindaklanjuti.'
        ]);
        
        Project::create([
            'lead_id' => 3,
            'approved_by' => 3,
            'status' => 'approved',
            'notes' => 'Lead sesuai dengan kriteria produk.'
        ]);
        
        Project::create([
            'lead_id' => 4,
            'approved_by' => null,
            'status' => 'pending',
            'notes' => null
        ]);
        
        Project::create([
            'lead_id' => 5,
            'approved_by' => null,
            'status' => 'pending',
            'notes' => null
        ]);
        
        Project::create([
            'lead_id' => 6,
            'approved_by' => 3,
            'status' => 'rejected',
            'notes' => 'Budget tidak mencukupi untuk lanjut ke tahap berikutnya.'
        ]);
        
        Project::create([
            'lead_id' => 7,
            'approved_by' => null,
            'status' => 'pending',
            'notes' => null
        ]);
        
        Project::create([
            'lead_id' => 8,
            'approved_by' => null,
            'status' => 'pending',
            'notes' => null
        ]);
        
        Project::create([
            'lead_id' => 9,
            'approved_by' => 3,
            'status' => 'rejected',
            'notes' => 'Lead sudah tidak aktif lagi.'
        ]);
        
        Project::create([
            'lead_id' => 10,
            'approved_by' => null,
            'status' => 'pending',
            'notes' => null
        ]);
        
        
    }
}
