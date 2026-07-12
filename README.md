# praktikumweb4_
## Nama : Sovy Aprianti
## NIM : 312410344
## Kelas : I24ID
## Mata Kuliah : Pemrograman Web 2

# Framework Lanjutan (Modul Login)
## Tujuan
Praktikum ini bertujuan untuk mempelajari konsep autentikasi (authentication) pada Framework CodeIgniter 4 menggunakan sistem login, session, dan filter agar halaman admin hanya dapat diakses oleh pengguna yang telah berhasil login.

## Langkah - langkah Praktikum
### 1. Membuat Tabel User
Membuat tabel user pada database untuk menyimpan data akun login yang terdiri dari id, username, useremail, dan userpassword.

<img width="1920" height="1200" alt="6" src="https://github.com/user-attachments/assets/da17b6e1-7f33-413f-8a9b-5ba4624f59da" />

### 2. Membuat UserModel
Membuat file UserModel.php pada folder app/Models untuk menghubungkan aplikasi dengan tabel user.

### 3. Membuat User Controller

Membuat User.php pada folder app/Controllers yang berfungsi untuk menangani proses login dan logout.

### 4. Membuat Halaman Login

Membuat tampilan login pada file app/Views/User/login.php sebagai antarmuka pengguna untuk memasukkan username dan password.

<img width="1920" height="1200" alt="7" src="https://github.com/user-attachments/assets/1db6a33c-172c-4b73-8f8f-8dc3b5628e43" />

### 5. Membuat Seeder

Membuat UserSeeder.php untuk menambahkan akun admin ke dalam database.

Data akun yang digunakan:

Username : admin
Email : admin@email.com
Password : admin123

<img width="1130" height="448" alt="8" src="https://github.com/user-attachments/assets/0bef37fb-55e3-4209-a2d7-75c2323a85cf" />

### 6. Membuat Auth Filter

Membuat Auth.php pada folder app/Filters untuk membatasi akses halaman admin agar hanya dapat diakses oleh pengguna yang sudah login.

### 7. Konfigurasi Filter

Menambahkan alias auth pada file app/Config/Filters.php agar filter dapat digunakan pada route aplikasi.

### 8. Konfigurasi Routing

Mengubah Routes.php dengan menambahkan route login, logout, serta menerapkan filter auth pada seluruh halaman admin.

### 9. Pengujian

Melakukan pengujian sistem login.

Hasil pengujian:

Halaman login berhasil ditampilkan.
Login menggunakan akun admin berhasil.
Halaman admin tidak dapat diakses sebelum login.
CRUD artikel tetap berjalan dengan baik.
Logout berhasil menghapus session dan mengembalikan pengguna ke halaman login.

Screenshot:

Halaman Login
<img width="1920" height="1200" alt="7" src="https://github.com/user-attachments/assets/98bdc161-958f-4125-b217-7e03448888ef" />

Halaman Admin
<img width="1920" height="1200" alt="9" src="https://github.com/user-attachments/assets/fdd38910-e832-4bde-992f-118d27bc3fca" />

Logout
Pengujian Auth Filter

## Kesimpulan
Pada praktikum ini berhasil dibuat sistem autentikasi menggunakan CodeIgniter 4. Sistem login memanfaatkan session dan Auth Filter sehingga halaman admin hanya dapat diakses oleh pengguna yang telah melakukan login. Selain itu, fitur logout berhasil menghapus session sehingga keamanan aplikasi menjadi lebih baik.
