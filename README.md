# Typing-Speed-Test

Dokumentasi Aplikasi Web Tes Kecepatan Mengetik

## Ringkasan
Aplikasi Web Tes Kecepatan Mengetik dirancang untuk membantu pengguna mengukur dan meningkatkan kecepatan serta akurasi mengetik mereka. Aplikasi ini melibatkan interaksi pengguna untuk memulai dan menyelesaikan tes mengetik, serta proses backend untuk menghasilkan teks acak, menghitung hasil, dan menyimpan data.

## Struktur Aplikasi

### Interaksi Pengguna

- **Buka Situs Web**: Pengguna membuka situs web untuk mengakses aplikasi tes mengetik.
- **Mulai Tes**: Pengguna memulai tes mengetik dengan mengklik tombol "Mulai Tes".
- **Mengetik Teks**: Pengguna mengetik teks yang ditampilkan ke dalam bidang input.
- **Kirim Tes**: Setelah pengguna selesai mengetik, mereka mengirim tes untuk melihat hasilnya.
- **Lihat Hasil**: Pengguna melihat hasil kecepatan dan akurasi mengetik mereka.
- 
### Proses Backend

- **Menghasilkan Teks Acak**: Backend menghasilkan string teks acak yang akan diketik oleh pengguna.
- **Menghitung Kecepatan**: Backend menghitung kecepatan mengetik pengguna dalam karakter per menit (CPM).
- **Menghitung Akurasi**: Backend menghitung akurasi mengetik pengguna berdasarkan jumlah kesalahan yang dibuat.
- 
- **Menyimpan Hasil**: Backend menyimpan hasil kecepatan dan akurasi pengguna ke dalam database.
## Alur Kerja Aplikasi

1. **Buka Situs Web**
    - Pengguna membuka situs web aplikasi menggunakan browser mereka.
2. **Mulai Tes**
    - Pengguna mengklik tombol "Mulai Tes" untuk memulai sesi mengetik.
3. **Menghasilkan Teks Acak**
    - Backend menghasilkan teks acak yang akan ditampilkan kepada pengguna.
4. **Menampilkan Teks**
    - Teks yang dihasilkan ditampilkan di antarmuka pengguna.
5. **Mengetik Teks**
    - Pengguna mengetik teks yang ditampilkan di bidang input.
6. **Kirim Tes**
    - Pengguna mengirimkan hasil tes setelah selesai mengetik.
7. **Menghitung Kecepatan**
    - Backend menghitung kecepatan mengetik berdasarkan waktu yang dihabiskan dan jumlah karakter yang diketik.
8. **Menghitung Akurasi**
    - Backend menghitung akurasi mengetik dengan membandingkan teks yang diketik dengan teks yang diberikan.
9. **Menyimpan Hasil**
    - Hasil kecepatan dan akurasi disimpan dalam database untuk referensi dan analisis lebih lanjut.
10. **Lihat Hasil**
    - Pengguna melihat hasil tes yang mencakup kecepatan mengetik (CPM) dan persentase akurasi.



