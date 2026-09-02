# Sistem Perpustakaan Digital Kampus

**Tujuan Aplikasi:**
Aplikasi web ini dibangun untuk mempermudah pengelolaan data perpustakaan di lingkungan kampus, yang mencakup fitur pendataan buku, manajemen anggota, dan pencatatan transaksi peminjaman secara digital.

**Cara Menjalankan Project Secara Lokal:**
1. Buka terminal di folder project.
2. Pastikan database `db_perpustakaan` sudah dibuat dan file `.env` sudah dikonfigurasi.
3. Jalankan perintah `php artisan serve`.
4. Buka alamat `http://127.0.0.1:8000` di browser.

---

### Pemahaman Arsitektur MVC
Menurut saya, MVC adalah cara membagi kode menjadi tiga peran agar tidak berantakan. **Model** khusus mengurus data dan interaksi ke database, **View** khusus mengatur tampilan visual (HTML) untuk pengguna, sedangkan **Controller** bertindak sebagai pengatur lalu lintas yang memproses *request* pengguna, mengambil data dari Model, lalu mengirimkannya ke View.