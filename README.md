# Kalkulator Ekspresi

Aplikasi kalkulator sederhana yang memungkinkan pengguna untuk menghitung ekspresi matematika dalam format teks seperti `1+1`, `5*3`, atau ekspresi lainnya. Aplikasi ini dibuat menggunakan PHP untuk logika perhitungan, CSS untuk tampilan, dan JavaScript untuk interaksi pengguna.

## Fitur

- Memasukkan ekspresi matematika dalam format teks.
- Menghitung hasil ekspresi secara langsung setelah tombol "Hitung" ditekan.
- Menampilkan hasil perhitungan di halaman yang sama tanpa memuat ulang halaman (menggunakan JavaScript `fetch()`).
- Desain responsif yang mendukung tampilan di perangkat seluler.

## Teknologi yang Digunakan

- **PHP**: Digunakan untuk memproses ekspresi matematika di server dan menghitung hasilnya.
- **CSS**: Digunakan untuk styling dan membuat tampilan aplikasi lebih menarik dan responsif.
- **JavaScript**: Digunakan untuk menangani interaksi pengguna, seperti mengirimkan data ke server tanpa memuat ulang halaman (menggunakan `fetch()`).

## Instalasi

### Prasyarat

- PHP sudah terinstal di komputer Anda.
- Web server (seperti XAMPP atau Laragon) yang mendukung PHP.

### Langkah-langkah untuk Menjalankan Aplikasi:

1. **Clone atau Unduh Repository:**
   
   Jika Anda menggunakan Git, jalankan perintah berikut di terminal:
   
   ```bash
   git clone https://github.com/Bule2365/Aritmatika-dengan-PHP.git
   ```

   Jika tidak menggunakan Git, Anda bisa mengunduhnya langsung dari [sini](https://github.com/Bule2365/Aritmatika-dengan-PHP/archive/refs/heads/main.zip) dan ekstrak di dalam folder server lokal Anda.

2. **Jalankan Web Server:**
   - Jika menggunakan XAMPP, pastikan Apache sudah berjalan.
   - Jika menggunakan Laragon, jalankan Laragon dan aktifkan Apache.

3. **Pindahkan atau Akses Folder Proyek:**
   Jika Anda menggunakan XAMPP, pindahkan folder proyek ke dalam `htdocs`, atau jika menggunakan Laragon, letakkan di dalam folder `www`.
   
   Kemudian buka terminal dan navigasikan ke folder proyek:
   
   ```bash
   cd path/to/Aritmatika-dengan-PHP
   ```

4. **Jalankan Aplikasi:**
   
   Buka browser dan akses:
   
   ```
   http://localhost/Aritmatika-dengan-PHP/
   ```

## Cara Menggunakan

1. Masukkan ekspresi matematika dalam input yang tersedia.
2. Tekan tombol "Hitung".
3. Hasil akan ditampilkan secara otomatis tanpa perlu memuat ulang halaman.

## Kontribusi

Kontribusi sangat diterima! Jika Anda ingin berkontribusi:

1. Fork repositori ini.
2. Buat branch baru untuk fitur atau perbaikan yang ingin Anda tambahkan:
   ```bash
   git checkout -b fitur-baru
   ```
3. Lakukan perubahan yang diperlukan dan commit:
   ```bash
   git commit -m "Menambahkan fitur baru"
   ```
4. Push ke branch Anda:
   ```bash
   git push origin fitur-baru
   ```
5. Buat Pull Request ke repository utama.

## Lisensi

Proyek ini dirilis di bawah lisensi MIT. Silakan lihat file `LICENSE` untuk detail lebih lanjut.

---

Terima kasih telah menggunakan Kalkulator Ekspresi! Jika Anda memiliki pertanyaan atau saran, silakan buat issue di repository ini.

