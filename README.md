## Fitur apa saja yang tersedia di Aplikasi Website Penjualan Laravel?

- TERINTEGRASI DENGAN PAYMENT GATEWAY MIDTRANS
- PERHITUNGAN ONGKIR SUDAH MEMAKAI RAJA ONGKIR
- ORDER LEBIH DARI SATU PRODUK
- KERANJANG BELANJA
- Dan lain-lain

## Install

1. **Clone Repository**


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
