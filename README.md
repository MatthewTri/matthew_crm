# Matthew CRM

Aplikasi CRM (Customer Relationship Management) sederhana berbasis Laravel 11 dan PostgreSQL, dibuat untuk memenuhi tugas pengembangan web dengan ketentuan waktu 3x24 jam.

---

## 🚀 Fitur Utama

- Autentikasi pengguna (Login , Logout)
- Manajemen data Layanan Produk (CRUD) (Manager Only)
- Manajemen project untuk proses lead (calon customer)
- Penambahan Lead dari pihak Sales
- Delete Subscription yang bisa dilakukan oleh Manager saja
- Role-based access (Manager & sales)
- Responsive UI dengan Tailwind CSS
- Relasi antar tabel menggunakan Eloquent ORM

---

## 🧠 Flow Aplikasi (Asumsi)

1. Sales / Manager melakukan login
   
   -- FLOW SALES --
2. Sales dapat melihat data lead pada halaman /leads untuk menambahkan data lead atau track setiap proposal lead (yang diajukan ke manager) yang masih pending , approved / rejected dari manager.
3. Setelah di proses oleh pihak manager , data lead pada website akan diperbarui dan sales akan melakukan kontak kepada setiap lead bahwa produk layanan yang ingin mereka beli itu approved/rejected karena alasan tertentu.
4. Sales HANYA dapat melihat layanan produk yang disediakan oleh PT. Smart pada halaman /products (tidak bisa Create, Update , Delete)

   -- FLOW MANAGER --
2. Setelah login , tugas utama manager adalah untuk memproses dan memverifikasi setiap data lead yang sudah diajukan oleh pihak sales untuk akhirnya di approve/reject karena alasan yang diberikan oleh manager. (di /projects)
3. Manager dapat view detail setiap lead yang diajukan dan akhirnya menulis notes yang bisa dibaca oleh pihak sales nantinya (alasan di approve / reject)
4. Jika project di approve oleh manager , data dari lead (calon customer) yang diajukan , akan berubah menjadi customer (sudah berlangganan)
5. Karena sudah menjadi customer, maka data customer akan didaftarkan dalam halaman Customer's Subscription (/subscriptions) untuk melihat customer yang sudah berlangganan disertai layanan yang mereka ambil.
6. Manager dapat CRUD untuk bagian produk layanan yang disediakan oleh PT. Smart
7. Manager juga dapat melakukan 'End Subscription' pada halaman /subscriptions untuk menghentikan layanan produk yang diambil oleh customer secara PAKSA

Beberapa Asumsi :
- Sales hanya dapat create lead , dan baca berbagai list produk saja
- Sales hanya diberi akses pada /leads dan /products
- Manager diberikan akses semuanya seperti /leads , /products, /projects , /subscriptions
- Bedanya dalam /products adalah Manager dapat CRUD products , dan sales hanya read
- Saat salah satu lead diapprove manager, data lead langsung menjadi customer , dan SEMUA produk layanan yang dibeli oleh customer hanya berlaku selama sebulan
- Delete subscription yang dilakukan oleh manager hanya dilakukan secara paksa jika ada kondisi tertentu (seharusnya otomatis terhenti saat 1 bulan , dan harus dihentikan sebelum 1 bulan)
- Meskipun data lead sama seperti nama lead dan kontak lead (orang yang sama) dan mau memiliki lebih dari 1 subscription , maka harus didaftarkan lebih dari 1 kali oleh pihak sales untuk orang yang sama dan subscription yang berbeda.
- Jika salah satu produk dihapus , data yang terkait seperti leads, projects, dan customers yang terkait dengan produk tersebut akan hilang semua
- Jika salah satu subscription dihapus , maka data terkait yang terdaftarkan seperti customers dan lead akan dihapus juga

---

## 💾 Teknologi yang Digunakan

| Teknologi        | Versi       |
|------------------|-------------|
| Laravel          | 11.x        |
| PHP              | >= 8.2      |
| PostgreSQL       | v17         |
| Tailwind CSS     | Latest      |
| DBeaver          | Optional    |
| Draw.io          | Optional    |

---

## ⚙️ Cara Install dan Menjalankan

1. **Clone Repository**
   ```bash
  1. git clone https://github.com/MatthewTri/matthew_crm.git
  2. cd matthew_crm
  3. composer install
  4. cp .env.example .env
  5. php artisan key:generate

Pastikan file env adalah seperti berikut : 
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=sales
DB_USERNAME=postgres
DB_PASSWORD=postgres

   6. php artisan migrate --seed
   7. php artisan serve


-- NOTE PENTING -- 
Akan ada 3 user yang saya create dari seed (2 sales , 1 manager)

   Data login untuk setiap usernya :
   1. email : sales@gmail.com  ,  password : password
   2. email : sales2@gmail.com  ,  password : password
   3. email : manager@gmail.com , password : password

Tampilan sales dan manager akan berbeda
