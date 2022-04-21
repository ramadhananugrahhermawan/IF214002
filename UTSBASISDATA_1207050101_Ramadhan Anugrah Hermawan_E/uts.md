# Soal

1. Basis data relasional dapat langsung dibangun menggunakan perintah SQL di sistem basis data seperti MySQL, dsb tanpa ada perancangan terlebih dahulu. 

- Jelaskan apa keuntungan melakukan perancangan basis data terlebih dahulu (menggunakan ERD ataupun Class Diagram) !

2. Jelaskan bagaimana cara mentransformasikan proses bisnis sebuah organisasi menjadi struktur data di basis data !

3. Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda. 

A. Deskripsikan solusi digital tersebut dalam satu paragraf

B. Buat list fitur-fitur yang ada pada solusi digital tersebut

C. Buat ERD notasi Chen dari struktur data yang mewakili fitur2 di solusi digital tersebut

D. Buat ERD notasi Crow Foot dari struktur data logical yang mewakili fitur2 di solusi digital tersebut, lengkap dengan keys, tipe data, dan normalisasi hingga bentuk ke 3

dikumpulkan di folder uts di repository. /uts/README.md

Jawaban : 

1. Agar mempermudah membuat model atau rancangan untuk membuat database, supaya lebih mudah dalam menggambarkan data yang memiliki hubungan atau relasi dalam bentuk sebuah desain. Dengan adanya ER diagram, maka sistem database yang terbentuk dapat digambarkan dengan lebih terstruktur dan terlihat rapi.

2. Dalam era globalisai saat ini Sistem Informasi merupakan bagian yang tak terpisahkan dari suatu organisasi dimana system informasi yang menghasilkan hasil  keluaran  (output)  dengan  menggunakan  masukan (input)  dan  berbagai proses yang diperlukan untuk memenuhi tujuan tertentu dalam suatu kegiatan manajemen. Dengan adanya  sistem informasi maka suatu  organisasi akan berusaha untuk lebih kompetitif dan efesien yang pada akhirnya menambah nilai untuk mendapatkan, mengubah dan mendistribusikan  informasi dengan tujuan meningkatkan pengambilan keputusan,  meningkatkan  kinerja  organisasi  dalam  mencapai  tujuan  organisasinya. Sebuah sistem informasi yang efektif menyediakan informasi yang akurat, tepat waktu dan  relevan  bagi  penggunanya  sehingga  dapat  digunakan  untuk  pengambilan keputusan. 

Sebagai contoh suatu UIN SGD Bandung  harus membangun database akademik, minimal memuat data mahasiswa, data dosen, data mata kuliah, data ruangan, jadwal, sehingga dapat diperoleh informasi yang tepat tentang penyelenggaraan akademik institusi tersebut. Dengan demikian agar suatu database yang efektif dapat dibangun, diperlukan pengetahuan dasar tentang database dan juga Sistem Manajemen Basis Data.

3. 
# Ide : Membuat Website Toko Online 
		

		

		# Deskripsi
		

		* Website dibuat terdiri dari 3 halaman (home,produk,tentang kami)
		* Website Terdiri dari beberapa kategori (baju pria, baju wanita, jaket, jam tangan , sepatu, kacamata, dompet)
		* Produk wajib punya 1 kategori
		* Produk mempunyai foto (boleh kosong jika belum ada )
		* Produk punya status penjelasan detail (bisa menjelaskan tentang deskripsi,ukuran , dll)
		* Produk mempunyai status ketersediaan stok (habis/tersedia).
		* Pengunjung bisa mencari produk berdasarkan nama
		* Website hanya untuk pemasaran/pameran produk pembelian hanya melalui whatsapp dan transfer bank
		* Hanya memiliki 1 akun admin untuk mengatur website (upload produk,tambah produk, kategori , dll)
		

		# Halaman Utama
		

		1. Tersedia menu pencarian produk
		2. Highlight kategori baju pria, baju wanita & sepatu
		3. Menampilkan section tentang kami 
		4. Menampilkan 6 produk dan ada tombol see more dibawahnya dan ketika diklik menuju ke halaman produk.
		5. Menampilkan social media dan Kontak whatsapp
		

		# Halaman Produk
		

		1. Secara default halaman produk menampilkan semua produk tanpa terfilter kategori.
		2. Produk bisa terfilter sesuai kategori yang terpilih
		3. Produk menampilkan foto,nama,harga dan tombol untuk menuju halaman detail produk.
		

		# Entitas & Atribut 
		

		1. Kategori
		

		- *id 
		- nama
		

		2. User 
		

		- *id_user
		- username
		- Password
		

		3. Produk 
		

		- *id_produk
		- kategori_id
		- nama (index)
		- foto (nullable)
		- detail (text)
		- ketersediaan_stok
		- harga
		

		# Data Base
		

		<img src="erd2.png">
		

		#  RELATIONSHIP
		

		- Users 1 1 - 1 N Kategori
		- Kategori 1 1 - 1 N Produk
		- Produk 1 1 - 1 N Kategori

