<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Randi Mulyana',
        'title' => 'About Page'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog Page', 'artikel' => [
            [
                'id' => 1,
                'slug' => 'ini-tentang-cerita-hidupku-yang-didalamnya-ada-cerita-lucu-gembira-sedih-dan-hal-lainnya',
                'Judul' => 'Ini tentang cerita hidupKu yang didalamnya ada cerita lucu, gembira, sedih dan hal lainnya',
                'Penulis' => 'Randi Mulyana',
                'Isi' => 'Hidup adalah rangkaian momen yang tak terduga. Suatu hari di tahun 2015, saya memutuskan untuk pindah ke Jakarta demi mengejar mimpi menjadi penulis. Awalnya terasa menakutkan - tinggal di kos-kosan 3x3 meter, harus hemat makan mi instan tiga kali seminggu, dan menghadapi penolakan dari berbagai penerbit. 
        
        Tapi di balik kesulitan itu, ada banyak kebahagiaan kecil. Seperti ketika pertama kali tulisan saya dimuat di koran lokal, atau saat bisa membelikan hadiah ulang tahun untuk ibu dari honor pertama. Saya juga tak akan pernah melupakan momen konyol saat salah masuk studio TV saat diundang wawancara, malah masuk ke ruang penyiar olahraga yang sedang siaran langsung!
        
        Pelajaran terbesar yang saya dapatkan: setiap kegagalan adalah batu loncatan. Kini, setelah 8 tahun berjuang, saya telah menerbitkan 3 buku bestseller dan menjadi mentor untuk penulis pemula. Rahasia saya? Selalu menulis jurnal harian dan tak pernah malu belajar dari kesalahan.'
            ],
            [
                'id' => 2,
                'slug' => 'perjalanan-ke-gunung-bromo',
                'Judul' => 'Perjalanan ke Gunung Bromo',
                'Penulis' => 'Randi Mulyana',
                'Isi' => 'Perjalanan kami dimulai pukul 01.00 dini hari dari Malang. Dengan Jeep tua yang sudah dimodifikasi, kami menyusuri jalan berbatu menuju Penanjakan 1. Suhu udara 4°C terasa menusuk tulang, tapi semua terbayar ketika semburat jingga mulai muncul di ufuk timur. 
        
        Matahari terbit di Bromo adalah tarian alam yang memukau. Kabut tipis menyelimuti kaldera, sementara asap putih terus mengepul dari kawah Bromo. Setelah puas berfoto, kami melanjutkan trekking menuju kawah. Medan berbatu dan tanjakan curam di akhir jalur benar-benar menguji stamina.
        
        Yang tak terlupakan adalah interaksi dengan masyarakat Tengger. Mereka masih menjaga tradisi leluhur dengan sangat baik. Salah satu ritual unik adalah upacara Kasada dimana warga melembar hasil bumi ke kawah gunung sebagai persembahan. 
        
        Tips untuk traveler:
        1. Bawa jaket tebal dan sarung tangan
        2. Sewa Jeep dari agen resmi
        3. Kunjungi Pura Luhur Poten sebelum naik ke kawah
        4. Coba kopi arabika khas Tengger di warung sekitar'
            ],
            [
                'id' => 3,
                'slug' => 'resep-masakan-tradisional',
                'Judul' => 'Resep Masakan Tradisional: Rawon Daging Sapi',
                'Penulis' => 'Randi Mulyana',
                'Isi' => 'Rawon, hidangan ikonik Jawa Timur dengan kuah hitam khas dari keluak, adalah warisan kuliner yang patut dilestarikan. Berikut resep lengkapnya:
        
        **Bahan (untuk 4 porsi):**
        - 500g daging sapi sandung lamur
        - 5 buah keluak, ambil isinya dan rendam air panas
        - 5 siung bawang merah
        - 3 siung bawang putih
        - 3 cm kunyit
        - 2 cm jahe
        - 5 lembar daun jeruk
        - 2 batang serai
        - 1 sdt ketumbar
        - Garam dan gula secukupnya
        
        **Cara Membuat:**
        1. Rebus daging hingga empuk, sisihkan kaldu
        2. Haluskan bumbu: bawang merah, bawang putih, kunyit, jahe, ketumbar, dan keluak
        3. Tumis bumbu halus hingga harum, masukkan daun jeruk dan serai
        4. Masukkan daging yang sudah direbus, aduk rata
        5. Tuang kaldu rebusan daging, masak selama 30 menit
        6. Sajikan dengan tauge pendek, telur asin, dan sambal terasi
        
        **Sejarah Singkat:**
        Rawon diperkirakan sudah ada sejak era Kerajaan Majapahit. Warna hitamnya yang unik berasal dari keluak (Pangium edule) yang mengandung asam sianida alami, namun aman dikonsumsi setelah melalui proses fermentasi yang tepat. 
        
        Variasi modern:
        - Rawon burger: menggunakan daging rawon sebagai topping burger
        - Rawon sushi: inovasi fusion Japanese-Indonesian
        - Rawon pizza: perpaduan unexpected yang ternyata nikmat'
            ],
            [
                'id' => 4,
                'slug' => 'teknologi-dan-masa-depan',
                'Judul' => 'Teknologi dan Masa Depan: Tantangan di Era AI',
                'Penulis' => 'Randi Mulyana',
                'Isi' => 'Revolusi industri 4.0 membawa gelombang perubahan yang belum pernah terjadi sebelumnya. Kecerdasan buatan (AI) kini bukan lagi fiksi ilmiah - ChatGPT bisa menulis esai dalam 5 detik, MidJourney menghasilkan gambar dari teks, dan robot humanoid mulai digunakan di industri jasa.
        
        Tapi apa implikasi nyata bagi masa depan pekerjaan? Menurut penelitian McKinsey (2023), 45% pekerjaan administratif akan terotomasi dalam 10 tahun mendatang. Namun di sisi lain, muncul lapangan kerja baru seperti:
        - AI Trainer
        - Data Detective
        - Virtual Reality Architect
        - Cybersecurity Analyst
        - Drone Traffic Optimizer
        
        Pendidikan pun harus beradaptasi. Kampus-kampus top dunia sudah mulai mengintegrasikan:
        1. AI Ethics dalam kurikulum inti
        2. Hybrid learning dengan VR classrooms
        3. Micro-credential system
        4. Project-based collaborative learning
        
        Tantangan terbesar justru di bidang regulasi. Bagaimana menyusun undang-undang yang bisa mengimbangi kecepatan perkembangan teknologi? Kasus kontroversial seperti deepfake untuk penipuan atau algoritma bias diskriminatif membutuhkan kerangka hukum yang komprehensif.
        
        Prediksi untuk 2050:
        - Neuralink akan mengubah cara manusia berinteraksi dengan komputer
        - Quantum computing memecahkan masalah iklim
        - Smart cities dengan energi 100% terbarukan
        - Augmented reality menjadi bagian dari kehidupan sehari-hari'
            ],
        [
            'id' => 5,
            'slug' => 'manfaat-olahraga-rutin-untuk-kesehatan-mental',
            'Judul' => 'Manfaat Olahraga Rutin untuk Kesehatan Mental',
            'Penulis' => 'Randi Mulyana',
            'Isi' => 'Selama ini kita sering mendengar bahwa olahraga baik untuk fisik, tetapi penelitian terbaru membuktikan dampak lebih besarnya pada kesehatan mental. Sebuah studi dari Harvard Medical School (2023) menunjukkan bahwa aktivitas fisik teratur dapat mengurangi gejala depresi hingga 47% dan kecemasan hingga 32%.
    
    **Mekanisme Kerja:**
    1. **Neurogenesis**: Olahraga merangsang produksi BDNF (Brain-Derived Neurotrophic Factor) yang memperbaiki sel otak
    2. **Endorfin**: Aktivitas fisik memicu pelepasan "hormon bahagia" alami
    3. **Ritme Sirkadian**: Membantu regulasi pola tidur yang baik
    
    Jenis olahraga yang direkomendasikan:
    - **Low Impact**: Yoga, berenang, tai chi (cocok untuk pemula)
    - **Moderate Intensity**: Jogging, bersepeda, zumba
    - **High Intensity**: CrossFit, HIIT, latihan interval
    
    Kasus nyata: 
    Bapak Andi (45 tahun) berhasil mengatasi insomnia kronis setelah rutin berenang 3x seminggu. "Dalam 2 bulan, waktu tidur saya meningkat dari 3 jam menjadi 6 jam per malam," tuturnya.
    
    **Tips Konsistensi:**
    1. Buat jadwal spesifik (misal: Selasa-Kamis-Sabtu pukul 06.00)
    2. Gunakan aplikasi tracker seperti Strava atau MyFitnessPal
    3. Bergabung dengan komunitas olahraga lokal
    4. Variasikan jenis olahraga untuk hindari kebosanan
    
    Penelitian menarik: 
    Latihan di alam terbuka (green exercise) memberikan manfaat 23% lebih besar dibanding indoor gym menurut Journal of Environmental Psychology.'
        ],
        [
            'id' => 6,
            'slug' => 'revolusi-belajar-bahasa-asing-di-era-digital',
            'Judul' => 'Revolusi Belajar Bahasa Asing di Era Digital',
            'Penulis' => 'Randi Mulyana',
            'Isi' => 'Gone are the days ketika belajar bahasa asing harus dengan textbook tebal dan kaset audio jadul. Era digital membawa 5 revolusi utama dalam pembelajaran bahasa:
    
    1. **AI-Powered Tutoring**  
       Aplikasi seperti Duolingo menggunakan algoritma adaptif yang mempersonalisasi materi belajar berdasarkan performa pengguna. Sistem speech recognition-nya mampu menganalisis pengucapan dengan akurasi 92%.
    
    2. **Virtual Language Exchange**  
       Platform Tandem dan HelloTalk menghubungkan 10 juta pengguna global untuk praktik langsung dengan native speaker. Fitur koreksi real-time membuat proses belajar lebih interaktif.
    
    3. **Immersive VR Learning**  
       Startup LinguaVR menciptakan simulasi situasi nyata seperti:  
       - Memesan makanan di restoran Paris  
       - Negosiasi bisnis di Tokyo  
       - Tawar-menawar di pasar Marrakech
    
    4. **Gamification**  
       Teknik penyematan elemen game meningkatkan retensi memori hingga 40%. Contohnya sistem "streak days" di Duolingo atau "XP points" di Memrise.
    
    5. **Big Data Analysis**  
       Laporan dari Busuu menunjukkan pola kesalahan umum pelajar Indonesia:  
       - 65% kesalahan artikel (the/a/an) dalam bahasa Inggris  
       - 48% kesalahan gender kata benda dalam bahasa Jerman  
       - 32% kesalahan intonasi bahasa Mandarin
    
    **Strategi Efektif:**
    - **30 Menit Sehari**: Lebih efektif daripada 3.5 jam sekaligus seminggu
    - **Shadowing Technique**: Tiru audio native speaker sambil merekam diri
    - **Content Learning**: Belajar melalui materi yang disukai (podcast, film, komik)
    
    Kisah sukses: 
    Sarah (19 tahun) menguasai bahasa Korea dalam 1 tahun melalui kombinasi K-drama, aplikasi Drops, dan les privat online. Kini ia bekerja sebagai translator freelance.'
        ],
        [
            'id' => 7,
            'slug' => 'seni-mengelola-waktu-untuk-produktivitas-maksimal',
            'Judul' => 'Seni Mengelola Waktu untuk Produktivitas Maksimal',
            'Penulis' => 'Randi Mulyana',
            'Isi' => 'Time management bukan sekadar menyusun to-do list, tapi seni mengalokasikan energi. Berdasarkan buku "Deep Work" oleh Cal Newport, berikut framework efektif:
    
    **1. Eisenhower Matrix**  
       ![Matrix](https://example.com/matrix.png)  
       - **Kuadran I (Mendesak & Penting)**: Deadline proyek, krisis  
       - **Kuadran II (Tidak Mendesak & Penting)**: Perencanaan strategis, pengembangan diri  
       - **Kuadran III (Mendesak & Tidak Penting)**: Meeting tidak perlu, notifikasi email  
       - **Kuadran IV (Tidak Mendesak & Tidak Penting)**: Media sosial, gossip
    
    **2. Time Blocking**  
       Alokasikan blok waktu spesifik:  
       - **Lion Hours** (06.00-09.00): Kerja fokus tanpa gangguan  
       - **Team Hours** (10.00-12.00): Kolaborasi dan meeting  
       - **Recovery Hours** (13.00-15.00): Tugas administratif  
       - **Learning Hours** (16.00-18.00): Pengembangan skill
    
    **3. Pomodoro 2.0**  
       Modifikasi teknik klasik:  
       1. 25 menit fokus  
       2. 5 menit istirahat (stretching/minum)  
       3. Setelah 4 siklus, istirahat 30 menit  
       4. Gunakan aplikasi Focus Keeper untuk tracking
    
    **Studi Kasus Perusahaan:**  
    Startup TechXYZ berhasil meningkatkan produktivitas 40% dengan implementasi:  
    - "No Meeting Wednesdays"  
    - Async communication via Slack  
    - Friday Reflection Session  
    
    **Tools Rekomendasi:**  
    - Todoist untuk task management  
    - RescueTime untuk analisis kebiasaan  
    - Notion untuk dokumentasi terpusat  
    - Forest app untuk mengurangi distraksi smartphone  
    
    Kunci utama:  
    "Bukan berapa banyak waktu yang kita punya, tapi bagaimana kita menginvestasikan waktu tersebut." - Darren Hardy'
        ]
        ]
    ]);
});


Route::get('/singelblog/{slug}', function ($slug) {
    // dd($slug);
    // dd($id);
    $artikelall = [
        [
            'id' => 1,
            'slug' => 'ini-tentang-cerita-hidupku-yang-didalamnya-ada-cerita-lucu-gembira-sedih-dan-hal-lainnya',
            'Judul' => 'Ini tentang cerita hidupKu yang didalamnya ada cerita lucu, gembira, sedih dan hal lainnya',
            'Penulis' => 'Randi Mulyana',
            'Isi' => 'Hidup adalah rangkaian momen yang tak terduga. Suatu hari di tahun 2015, saya memutuskan untuk pindah ke Jakarta demi mengejar mimpi menjadi penulis. Awalnya terasa menakutkan - tinggal di kos-kosan 3x3 meter, harus hemat makan mi instan tiga kali seminggu, dan menghadapi penolakan dari berbagai penerbit. 
    
    Tapi di balik kesulitan itu, ada banyak kebahagiaan kecil. Seperti ketika pertama kali tulisan saya dimuat di koran lokal, atau saat bisa membelikan hadiah ulang tahun untuk ibu dari honor pertama. Saya juga tak akan pernah melupakan momen konyol saat salah masuk studio TV saat diundang wawancara, malah masuk ke ruang penyiar olahraga yang sedang siaran langsung!
    
    Pelajaran terbesar yang saya dapatkan: setiap kegagalan adalah batu loncatan. Kini, setelah 8 tahun berjuang, saya telah menerbitkan 3 buku bestseller dan menjadi mentor untuk penulis pemula. Rahasia saya? Selalu menulis jurnal harian dan tak pernah malu belajar dari kesalahan.'
        ],
        [
            'id' => 2,
            'slug' => 'perjalanan-ke-gunung-bromo',
            'Judul' => 'Perjalanan ke Gunung Bromo',
            'Penulis' => 'Randi Mulyana',
            'Isi' => 'Perjalanan kami dimulai pukul 01.00 dini hari dari Malang. Dengan Jeep tua yang sudah dimodifikasi, kami menyusuri jalan berbatu menuju Penanjakan 1. Suhu udara 4°C terasa menusuk tulang, tapi semua terbayar ketika semburat jingga mulai muncul di ufuk timur. 
    
    Matahari terbit di Bromo adalah tarian alam yang memukau. Kabut tipis menyelimuti kaldera, sementara asap putih terus mengepul dari kawah Bromo. Setelah puas berfoto, kami melanjutkan trekking menuju kawah. Medan berbatu dan tanjakan curam di akhir jalur benar-benar menguji stamina.
    
    Yang tak terlupakan adalah interaksi dengan masyarakat Tengger. Mereka masih menjaga tradisi leluhur dengan sangat baik. Salah satu ritual unik adalah upacara Kasada dimana warga melembar hasil bumi ke kawah gunung sebagai persembahan. 
    
    Tips untuk traveler:
    1. Bawa jaket tebal dan sarung tangan
    2. Sewa Jeep dari agen resmi
    3. Kunjungi Pura Luhur Poten sebelum naik ke kawah
    4. Coba kopi arabika khas Tengger di warung sekitar'
        ],
        [
            'id' => 3,
            'slug' => 'resep-masakan-tradisional',
            'Judul' => 'Resep Masakan Tradisional: Rawon Daging Sapi',
            'Penulis' => 'Randi Mulyana',
            'Isi' => 'Rawon, hidangan ikonik Jawa Timur dengan kuah hitam khas dari keluak, adalah warisan kuliner yang patut dilestarikan. Berikut resep lengkapnya:
    
    **Bahan (untuk 4 porsi):**
    - 500g daging sapi sandung lamur
    - 5 buah keluak, ambil isinya dan rendam air panas
    - 5 siung bawang merah
    - 3 siung bawang putih
    - 3 cm kunyit
    - 2 cm jahe
    - 5 lembar daun jeruk
    - 2 batang serai
    - 1 sdt ketumbar
    - Garam dan gula secukupnya
    
    **Cara Membuat:**
    1. Rebus daging hingga empuk, sisihkan kaldu
    2. Haluskan bumbu: bawang merah, bawang putih, kunyit, jahe, ketumbar, dan keluak
    3. Tumis bumbu halus hingga harum, masukkan daun jeruk dan serai
    4. Masukkan daging yang sudah direbus, aduk rata
    5. Tuang kaldu rebusan daging, masak selama 30 menit
    6. Sajikan dengan tauge pendek, telur asin, dan sambal terasi
    
    **Sejarah Singkat:**
    Rawon diperkirakan sudah ada sejak era Kerajaan Majapahit. Warna hitamnya yang unik berasal dari keluak (Pangium edule) yang mengandung asam sianida alami, namun aman dikonsumsi setelah melalui proses fermentasi yang tepat. 
    
    Variasi modern:
    - Rawon burger: menggunakan daging rawon sebagai topping burger
    - Rawon sushi: inovasi fusion Japanese-Indonesian
    - Rawon pizza: perpaduan unexpected yang ternyata nikmat'
        ],
        [
            'id' => 4,
            'slug' => 'teknologi-dan-masa-depan',
            'Judul' => 'Teknologi dan Masa Depan: Tantangan di Era AI',
            'Penulis' => 'Randi Mulyana',
            'Isi' => 'Revolusi industri 4.0 membawa gelombang perubahan yang belum pernah terjadi sebelumnya. Kecerdasan buatan (AI) kini bukan lagi fiksi ilmiah - ChatGPT bisa menulis esai dalam 5 detik, MidJourney menghasilkan gambar dari teks, dan robot humanoid mulai digunakan di industri jasa.
    
    Tapi apa implikasi nyata bagi masa depan pekerjaan? Menurut penelitian McKinsey (2023), 45% pekerjaan administratif akan terotomasi dalam 10 tahun mendatang. Namun di sisi lain, muncul lapangan kerja baru seperti:
    - AI Trainer
    - Data Detective
    - Virtual Reality Architect
    - Cybersecurity Analyst
    - Drone Traffic Optimizer
    
    Pendidikan pun harus beradaptasi. Kampus-kampus top dunia sudah mulai mengintegrasikan:
    1. AI Ethics dalam kurikulum inti
    2. Hybrid learning dengan VR classrooms
    3. Micro-credential system
    4. Project-based collaborative learning
    
    Tantangan terbesar justru di bidang regulasi. Bagaimana menyusun undang-undang yang bisa mengimbangi kecepatan perkembangan teknologi? Kasus kontroversial seperti deepfake untuk penipuan atau algoritma bias diskriminatif membutuhkan kerangka hukum yang komprehensif.
    
    Prediksi untuk 2050:
    - Neuralink akan mengubah cara manusia berinteraksi dengan komputer
    - Quantum computing memecahkan masalah iklim
    - Smart cities dengan energi 100% terbarukan
    - Augmented reality menjadi bagian dari kehidupan sehari-hari'
        ],
    [
        'id' => 5,
        'slug' => 'manfaat-olahraga-rutin-untuk-kesehatan-mental',
        'Judul' => 'Manfaat Olahraga Rutin untuk Kesehatan Mental',
        'Penulis' => 'Randi Mulyana',
        'Isi' => 'Selama ini kita sering mendengar bahwa olahraga baik untuk fisik, tetapi penelitian terbaru membuktikan dampak lebih besarnya pada kesehatan mental. Sebuah studi dari Harvard Medical School (2023) menunjukkan bahwa aktivitas fisik teratur dapat mengurangi gejala depresi hingga 47% dan kecemasan hingga 32%.

**Mekanisme Kerja:**
1. **Neurogenesis**: Olahraga merangsang produksi BDNF (Brain-Derived Neurotrophic Factor) yang memperbaiki sel otak
2. **Endorfin**: Aktivitas fisik memicu pelepasan "hormon bahagia" alami
3. **Ritme Sirkadian**: Membantu regulasi pola tidur yang baik

Jenis olahraga yang direkomendasikan:
- **Low Impact**: Yoga, berenang, tai chi (cocok untuk pemula)
- **Moderate Intensity**: Jogging, bersepeda, zumba
- **High Intensity**: CrossFit, HIIT, latihan interval

Kasus nyata: 
Bapak Andi (45 tahun) berhasil mengatasi insomnia kronis setelah rutin berenang 3x seminggu. "Dalam 2 bulan, waktu tidur saya meningkat dari 3 jam menjadi 6 jam per malam," tuturnya.

**Tips Konsistensi:**
1. Buat jadwal spesifik (misal: Selasa-Kamis-Sabtu pukul 06.00)
2. Gunakan aplikasi tracker seperti Strava atau MyFitnessPal
3. Bergabung dengan komunitas olahraga lokal
4. Variasikan jenis olahraga untuk hindari kebosanan

Penelitian menarik: 
Latihan di alam terbuka (green exercise) memberikan manfaat 23% lebih besar dibanding indoor gym menurut Journal of Environmental Psychology.'
    ],
    [
        'id' => 6,
        'slug' => 'revolusi-belajar-bahasa-asing-di-era-digital',
        'Judul' => 'Revolusi Belajar Bahasa Asing di Era Digital',
        'Penulis' => 'Randi Mulyana',
        'Isi' => 'Gone are the days ketika belajar bahasa asing harus dengan textbook tebal dan kaset audio jadul. Era digital membawa 5 revolusi utama dalam pembelajaran bahasa:

1. **AI-Powered Tutoring**  
   Aplikasi seperti Duolingo menggunakan algoritma adaptif yang mempersonalisasi materi belajar berdasarkan performa pengguna. Sistem speech recognition-nya mampu menganalisis pengucapan dengan akurasi 92%.

2. **Virtual Language Exchange**  
   Platform Tandem dan HelloTalk menghubungkan 10 juta pengguna global untuk praktik langsung dengan native speaker. Fitur koreksi real-time membuat proses belajar lebih interaktif.

3. **Immersive VR Learning**  
   Startup LinguaVR menciptakan simulasi situasi nyata seperti:  
   - Memesan makanan di restoran Paris  
   - Negosiasi bisnis di Tokyo  
   - Tawar-menawar di pasar Marrakech

4. **Gamification**  
   Teknik penyematan elemen game meningkatkan retensi memori hingga 40%. Contohnya sistem "streak days" di Duolingo atau "XP points" di Memrise.

5. **Big Data Analysis**  
   Laporan dari Busuu menunjukkan pola kesalahan umum pelajar Indonesia:  
   - 65% kesalahan artikel (the/a/an) dalam bahasa Inggris  
   - 48% kesalahan gender kata benda dalam bahasa Jerman  
   - 32% kesalahan intonasi bahasa Mandarin

**Strategi Efektif:**
- **30 Menit Sehari**: Lebih efektif daripada 3.5 jam sekaligus seminggu
- **Shadowing Technique**: Tiru audio native speaker sambil merekam diri
- **Content Learning**: Belajar melalui materi yang disukai (podcast, film, komik)

Kisah sukses: 
Sarah (19 tahun) menguasai bahasa Korea dalam 1 tahun melalui kombinasi K-drama, aplikasi Drops, dan les privat online. Kini ia bekerja sebagai translator freelance.'
    ],
    [
        'id' => 7,
        'slug' => 'seni-mengelola-waktu-untuk-produktivitas-maksimal',
        'Judul' => 'Seni Mengelola Waktu untuk Produktivitas Maksimal',
        'Penulis' => 'Randi Mulyana',
        'Isi' => 'Time management bukan sekadar menyusun to-do list, tapi seni mengalokasikan energi. Berdasarkan buku "Deep Work" oleh Cal Newport, berikut framework efektif:

**1. Eisenhower Matrix**  
   ![Matrix](https://example.com/matrix.png)  
   - **Kuadran I (Mendesak & Penting)**: Deadline proyek, krisis  
   - **Kuadran II (Tidak Mendesak & Penting)**: Perencanaan strategis, pengembangan diri  
   - **Kuadran III (Mendesak & Tidak Penting)**: Meeting tidak perlu, notifikasi email  
   - **Kuadran IV (Tidak Mendesak & Tidak Penting)**: Media sosial, gossip

**2. Time Blocking**  
   Alokasikan blok waktu spesifik:  
   - **Lion Hours** (06.00-09.00): Kerja fokus tanpa gangguan  
   - **Team Hours** (10.00-12.00): Kolaborasi dan meeting  
   - **Recovery Hours** (13.00-15.00): Tugas administratif  
   - **Learning Hours** (16.00-18.00): Pengembangan skill

**3. Pomodoro 2.0**  
   Modifikasi teknik klasik:  
   1. 25 menit fokus  
   2. 5 menit istirahat (stretching/minum)  
   3. Setelah 4 siklus, istirahat 30 menit  
   4. Gunakan aplikasi Focus Keeper untuk tracking

**Studi Kasus Perusahaan:**  
Startup TechXYZ berhasil meningkatkan produktivitas 40% dengan implementasi:  
- "No Meeting Wednesdays"  
- Async communication via Slack  
- Friday Reflection Session  

**Tools Rekomendasi:**  
- Todoist untuk task management  
- RescueTime untuk analisis kebiasaan  
- Notion untuk dokumentasi terpusat  
- Forest app untuk mengurangi distraksi smartphone  

Kunci utama:  
"Bukan berapa banyak waktu yang kita punya, tapi bagaimana kita menginvestasikan waktu tersebut." - Darren Hardy'
    ]
    ];

    $artikel = Arr::first($artikelall, function ($artikel) use ($slug) {
        return $artikel['slug'] == $slug;
    });
    // dd($artikel);
    return view('singelblog', [
        'title' => 'Single Blog Page',
        'artikel' => $artikel
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page'
    ]);
});

Route::get('/project', function () {
    return view('project', [
        'title' => 'Project Page'
    ]);
});
