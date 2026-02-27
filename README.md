1. Apa kesulitan yang Anda temui saat menghubungkan laravel dengan database?

    Pas awal sih paling sering ribet di file .env. Kadang udah buat database di phpmyadmin tapi lupa ganti nama db-nya di situ, jadinya error terus. Terus saya juga orangnya agak teledor, sering banget typo pas ngetik nama database atau password di .env, alhasil pas di run malah access denied.

    Terus soal migrasi, sering banget udah semangat bikin file migration eh malah lupa jalanin perintah php artisan migrate. Pas dibuka websitenya malah muncul error "table not found".

    Saya juga sering lupa sama perintah-perintah terminalnya, kadang mau migrate malah ketuker perintah lain, atau malah salah ketik (typo) di terminalnya jadinya perintahnya ngga jalan-jalan.

    Padahal hari sebelumnya saya udah belajar dan nonton tutorial di youtube lama banget, kelihatannya gampang banget pas diikutin di video. tapi pas praktek sendiri pas ulangan langsung blank jadi banyak yang lupa, trus banyak error gara-gara salah satu huruf atau kurang titik koma aja. pokoknya bener-bener harus teliti.

2. bagaimana perbedaan proses CRUD di laravel dibandingkan dengan php murni?

    kalau di php murni itu kodenya sering berantakan banget karena kita harus nulis query sql manual yang panjang, kayak INSERT INTO siswa (nama, umur, nilai) VALUES gitu gitu dan kalau ada yang typo satu huruf atau kurang tanda petik aja langsung error dan susah nyarinya. tinggal ketik Siswa::create() aja udah otomatis masuk ke database. jadi kodenya jauh lebih simpel.

    yang paling kerasa bedanya itu soal struktur kodenya sih. kalau di php murni kodenya bener-bener numpuk jadi satu file, dari logika, query, sampe html-nya nyampur semua. nah karena laravel udah pake mvc, kodenya jadi lebih terorganisir karena dipisah-pisah sesuai fungsinya. meskipun awalnya saya sempet bingung pas praktek pindah-pindah folder dari controller ke view atau model, tapi kerasa banget kalau cara ini bikin aplikasi kita lebih rapi dan gak berantakan pas mau benerin error dibanding pake php biasa.

3. bagaimana anda memastikan keamanan saat melakukan operasi crud?

    yang paling penting sih jangan sampe lupa naruh csrf protection. pas diajarin di yt dibilang kalau tiap bikin form itu wajib banget ada @csrf-nya. ini gunanya biar aplikasi kita ngga kena serangan hacker yang mau kirim form palsu. kalau sampe lupa naruh itu biasanya langsung error.
