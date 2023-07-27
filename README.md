<h1 align="center">Selamat datang di Aplikasi Toko Online Laravel! 👋</h1>
<img src="https://user-images.githubusercontent.com/61069138/177085248-ff1e8def-d301-4ad3-aea0-5a7416178997.png" >


<p align="center">Dibuat Menggunakan Framework Laravel Versi 9.</p>
<div align="center">
</div>

## DIMOHON UNTUK TIDAK DIPERJUALBELIKAN !

## Fitur apa saja yang tersedia di Aplikasi Toko Online Laravel?

- TERINTEGRASI DENGAN PAYMENT GATEWAY MIDTRANS
- PERHITUNGAN ONGKIR SUDAH MEMAKAI RAJA ONGKIR
- ORDER LEBIH DARI SATU PRODUK
- KERANJANG BELANJA
- Dan lain-lain


## Akun Default

- email: admin@gmail.com
- Password: admin123

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/fikrisuheri/laravel-toko-online-anime-store.git
cd laravel-toko-online-anime-store
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Buka `.env` lalu ubah baris berikut sesuai dengan api rajaongkir kamu**

```bash
RAJAONGKIR_API_KEY=xxxxxxxxxx
RAJAONGKIR_PACKAGE=starter
```

4. **Buka `.env` lalu ubah baris berikut sesuai dengan api midtrans kamu**

```bash
MIDTRANS_IS_PRODUCTION=false
MIDTRANS_MERCHAT_ID=xxxxxx
MIDTRANS_CLIENT_KEY=SB-Mid-client-xxxxx
MIDTRANS_SERVER_KEY=SB-Mid-server-xxxxx
```


5. **Instalasi Aplikasi**

```bash
php artisan key:generate
php artisan migrate --see
```

4. **Jalankan Aplikasi**

```bash
php artisan serve
```


## Contributing

Contributions, issues and feature requests di persilahkan.


#   S k r i p s i _ W e b _ P e n j u a l a n 
 
 
