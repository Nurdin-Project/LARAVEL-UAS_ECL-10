Nama : Nurdin Fariz
Nim : 10515090
Kelas : ECL-10
untuk Project yang saya kerjakan sudah sesuai dan memenuhi syarat dari soal yang diberikan oleh dosen

##catatan penting##
"untuk Database SQL ada dialam Folder db_UAS_10515090"

APP_URL=http://localhost/UASLaravel/public

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_uas_10515090
DB_USERNAME=root
DB_PASSWORD=

Langkah – Langkah Pembangunan Project UAS ECL

Disini saya akan menjelaskan tentang pembuatan project ini sesuai tutorial yang bapak berikan, dengan secara singkat. Diantaranya :
1.1.	Instalasi laravel
Hal pertama yang harus dilakukan adalah menginstal laravel didalam tutorial diberikan dua cara untuk menginstalnya yaitu :
1.	Dengan menggunakan composer setup.exe
2.	Dengan cara mengcopy fresh laravel orang lain
Sebelum penginstalan laravel, ada syarat peting yang tidak boleh dilupakan yaitu folder PHP pada Xampp harus dimasukan ke part yang ada di “System Environment Variables” dengan cara ditambah.
Jika langkah ini selesai maka anda bisa mengakses form awal dari laravel dengan cara mengakses perintah berikut pada GoogleChrome ataupun mozila firefox http://localhost/NamaProjectDiHtdocsKalian/public
1.2.	Integrasi Laravel dengan Template
Disini dalam pengintegrasi laravel dengan menggunakan template “AdminLTE Version 2.3.11,  dengan hanya mengcopy pastekan beberapa folder didalam template AdmintLTE yaitu : Boostrap,Dist,Plugins.
Serta didalam step berikutnya didalam tutorial memerintahkan untuk mebuta folder dan beberapa file diantaranya header.blade.php, footer.blade.php, index.blade.php. untuk dimasukan codingan dari file blank.blade.php yang ada di template AdminLTE dengan menambahkan beberapa sintak pendukung yang diberikan didalam tutorial
Dalam tutorial ini juga kita dijelaskan bagai mana cara mengoprasikan artisan melalui cmd untuk membuat file KelasController.blade.php beserta foldernya dan penempatan yang ditentukan secara otomatis dengan perintah yang disediakan didalam tutorial.
Langkah terakhirnya menambahkan coding yang ada di file KelasController.blade.php serta mengedit routes, agar dapat mengakses template AdminLTE yang telah kita Setting.
Jika langkah Diatas dilakukan sesuai tutorial maka Template AdminLTE akan muncul dengan cara mengakses perintah berikut pada GoogleChrome ataupun mozila firefox http://localhost/NamaProjectDiHtdocsKalian/public
1.3.	CRUD – READ DATA
Pada taham ini menjelaskan tentang membuat database dengan table dalam database dibuat menggunakan migration yang dioprasikan oleh CMD, tapi sebelum kita harus mengatur isi file “.env” didalam ROOT folder project kita. Setelah itu ikuti saja tutorialnya,
Setelah data base dan tabelnya telah dibuat kita dapat mengisi data dummy dengan cara migration database seed.
Setelah itu kita baru dapat menampilkan data yang didalam database kedalam web yang kita rancang.
1.4.	CRUD – CREATE DATA
Tahapan ini merupakan pembuatan form tambah data, ikuti tutorial yang diberikan,ssetelah itu kita coba cek apakan form tambah data dapat diakses atau tidaknya jika sukses maka akan menampikan data dengan Menambahkan Feedback Sukses atau Gagal dalam file Feedback.blade.php, sehingga dapat menampilkan form sepeti pada gambar dibawah
 
1.5.	 CRUD – Updating Data
Setelah berhasil melakukan langkah-langkah diatas, sekarang kita coba melakukan editing data. Editing data ini cukup mudah dalam penambahanya karena hanya menambahkan beberapa sintak yang ada di di file php yang ada di folder kelas atau siswa, jika setelah selesai memodifikasinya maka kita mencoba mengaksesnya sehingga menghasilkan tampilan seperti gambar dibawah ini :
 

1.6.	CRUD – Delete Data
Caranya cukup mudah, pada tahap ini kita hanya menambahkan sintak query delete data pda file KelasController.blande.php di folder Controller jika sudah ditambahkan maka kita akan mencoba mengaksesnya sehingga menampilkan tampilan seperti gambar berikut :
 
1.7.	Eloquent Relationship
Tahap ini merupakan pembuatan table siswa dan CRUD  data siswa maka tahapan pembuatan kodinganya sama dengan yang dijelaskan pada saat pembuatan table kelas dan CRUD pada data kelas. Maka tiak perlu untuk dijelaskan lagi.
1.8.	Upload File
Pada tutorial ini saya akan menjelaskan bagaimana caranya mengupload file di Laravel,ini lah point-point yang harus diikuti seperti dibawah ini.
	Konfigurasi Storage
Setting config/filesystems.php. Ganti default storage nya ke ‘upload’ dan penambahan beberapa sintak query uploads
	Tambah Form Upload
Di tahap ini kita hanya Menambahkan sintak  enctype=”multipart/form-data” pada file resources/views/siswa/form.blade.php
	Buat Field Foto pada Database
Caranya kita bisa manfaatkan migration add_foto_table_siswa untuk menambahkan table siswa pada database
	Edit Model Siswa
Caranya kita mudah hanya dengan Tambahkan foto pada variable $fillable
	Edit SiswaController
modifikasi pada SiswaController. Tambahkan rules validasi untuk tipe file yang boleh diupload dan ukuran maksimal file yang akan diupload. 
	Edit Tampilan Index Siswa
Kita hanay mengedit sintak index.blade.php pada folder siswa
Setelah langkah diatas dilakukan sesuai tutorial yang diberikan, maka kita akan mencoba mengakses nya jika benar data akan bertambah seperti gambar berikut :
 
1.9.	 Login 
	Tampilan Login
Pada langkah ini merupakan pembuatan form login dengan memanfaatkan file login pada template admin LTE yang sudah menyediakan
Dengan mencopykan sintak pada AdminLTE-2.3.11/pages/examples/login.html, Ke dalam file Login.blade.php yang kita buat di folder view
	Membuat Migration Table Login
Membuat table_user untuk table login didalam database dengan cara artisan migrationnya
	Membut Model User
Karena Laravel sudah menyediakan Model nya dengan nama User pada folder app, tinggal kita modifikasi saja sesuai sintak yang ada di dalam tutorial
	Membuat User Admin melalui Seeder
Merupankan penambahan data Untuk Login secara langsung dalam coding dengan memanfaatkan Seeder
	Modifikasi LoginController
Untuk diredirect ke route mana ketika user telah login. Kita arahkan ke halaman root saja.
	Membuat Tombol Logout
Hanya menambahkan sintak query log out yang disediakan oleh tutorial yang akan di masukan ke resources/views/templates/header.blade.php
	Kelebihan Authentikasi Default Laravel
Merupakan fitur pengaman untu login yang diberikan laravel, serta fitur tambahan sebagai pengingat username dan password (remember me)
Ini adalaha tampilan login yang ada dalam template admin LTE :
 
1.10.	Kesimpulan
Ini merupakan tutorial yang sekaligun dapat mengajarkan kita tentang ketelitian Karen koding yang disediakan tidak berbentuk text ,sehingga kita dapat mengetikan koding sesuai yang ada pada gambar, untuk tutorial yang diberikan cukup ringandan mudah dipahami dalam presentasenya,
