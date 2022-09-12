<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Challenge;
use App\Models\Content;
use App\Models\Course;
use App\Models\Evaluation;
use App\Models\Material;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Rubrik;
use App\Models\SubCourse;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'email' => 'sidiqnugraha@upi.edu',
            'name' => 'Admin',
            'is_admin' => 1,
            'password' => Hash::make('admin1203'),
            'status' => 1

        ]);

        Course::create([
            'judul' => 'Speech Synthesis dalam Artificial Intelegence',
            'desc' => 'Belajar Artificial Intelligence untuk membuat produk AI dengan Speech Synthesis dengan mudah dan menyenangkan.',
            'author' => 'Ken Kahn, University Of Oxford',
            'requirement' => '<ul class="list-inside list-disc leading-relaxed"><li>Personal Computer (PC) atau Laptop </li> <li>Internet</li> <li>Speaker dan Microphone / Earphone</li></ul>',
            'ratings' => 5.0,
            'thumb' => '/res/img/ss-thumb.png',
            'icon' => '/res/img/icon-ss.png'
        ]);
        /*
        Course::create([
            'judul' => 'Speech Recognition dalam Artificial Intelegence',
            'desc' => 'Belajar Artificial Intelligence untuk membuat produk AI dengan Speech Recognition dengan mudah dan menyenangkan.',
            'author' => 'Ken Kahn, University Of Oxford',
            'requirement' => '<ul class="list-inside list-disc leading-relaxed"><li>Personal Computer (PC) atau Laptop </li> <li>Internet</li> <li>Speaker dan Microphone / Earphone</li></ul>',
            'ratings' => 5.0,
            'thumb' => '/res/img/sr-thumb.png',
            'icon' => '/res/img/icon-sr.png'
        ]);
*/
        SubCourse::create([ //1
            'course_id' => 1,
            'judul_sub' => 'Pendahuluan',
            'desc' => 'Selamat datang di course Speech Synthesis dalam Artificial Intelligence. Pertama-tama, mari kita cari tahu apa itu speech synthesis dan kegunaannya!'
        ]);

        SubCourse::create([ //2
            'course_id' => 1,
            'judul_sub' => 'Speech Synthesis Sederhana',
            'desc' => 'Pada sub materi speech synthesis sederhana kita akan memulai mempelajari beberapa blok snap! yang dapat digunakan untuk speech synthesis.'
        ]);

        SubCourse::create([ //3
            'course_id' => 1,
            'judul_sub' => 'Mengontrol Speech Synthesis',
            'desc' => 'Pada sub materi mengontrol speech synthesis kita akan mempelajari efek dan atribut kontrol pada blok speech synthesis pada snap!.'
        ]);

        SubCourse::create([ //4
            'course_id' => 1,
            'judul_sub' => 'Berbicara Bukan Kata',
            'desc' => 'Pada sub materi berbicara bukan kata kita akan mempelajari bagaimana blok snap! untuk speech synthesis dapat bekerja untuk selain bentuk kata.'
        ]);

        SubCourse::create([ //5
            'course_id' => 1,
            'judul_sub' => 'Contoh Program AI dengan Speech Synthesis',
            'desc' => 'Pada sub materi ini merupakan contoh dari penerapan blok snap! speech synthesis yang telah dipelajari di sub materi sebelumnya.'
        ]);

        SubCourse::create([ //6
            'course_id' => 1,
            'judul_sub' => 'Penutup',
            'desc' => 'Pada sub materi ini terdapat evaluasi belajar teman-teman dan akan mendapatkan sertifikat.'
        ]);
        /*
        SubCourse::create([ //7
            'course_id' => 2,
            'judul_sub' => 'Pendahuluan',
            'desc' => 'Selamat datang di course Speech Recognition dalam Artificial Intelligence. Pertama-tama, mari kita cari tahu apa itu speech recognition dan kegunaannya!'
        ]);

        SubCourse::create([ //8
            'course_id' => 2,
            'judul_sub' => 'Speech Recognition Sederhana',
            'desc' => 'Pada sub materi speech recognition sederhana kita akan memulai mempelajari beberapa blok snap! yang dapat digunakan untuk speech recognition.'
        ]);

        SubCourse::create([ //9
            'course_id' => 2,
            'judul_sub' => 'Contoh Program Speech Recognition dan Speech Synthesis',
            'desc' => 'Pada sub materi ini kita akan mempelajari bagaimana speech recognition dan speech synthesis dapat bekerja bersama untuk sebuah produk Artificial Intelligence'
        ]);

        SubCourse::create([ //10
            'course_id' => 2,
            'judul_sub' => 'Part of Speech pada Speech Recognition',
            'desc' => 'Pada sub materi Part of Speech pada Speech Recognition kita akan mempelajari bagaimana blok snap! dapat membuat part of speech.'
        ]);

        SubCourse::create([ //11
            'course_id' => 2,
            'judul_sub' => 'Contoh Demo Program Menjawab Pertanyaan',
            'desc' => 'Pada sub materi ini merupakan contoh dari penerapan blok snap! speech recognition yang telah dipelajari di sub materi sebelumnya.'
        ]);

        SubCourse::create([ //12
            'course_id' => 2,
            'judul_sub' => 'Fitur Lengkap Blok Speech Recognition',
            'desc' => 'Pada sub materi ini akan diperjelas lebih dalam fitur lengkap yang dimiliki oleh blok Speech Recognition.'
        ]);

        SubCourse::create([ //13
            'course_id' => 2,
            'judul_sub' => 'Penutup',
            'desc' => 'Pada sub materi ini terdapat evaluasi belajar teman-teman dan akan mendapatkan sertifikat.'
        ]);
*/
        //-----------------------CONTENT SS---------------------//

        Content::create([ //1
            'course_id' => 1,
            'sub_course_id' => 1,
            'judul' => 'Apa itu Speech Synthesis?',
            'tipe_content' => 1,
            'prev_id' => 0,
            'next_id' => 2,
        ]);

        Content::create([ //2
            'course_id' => 1,
            'sub_course_id' => 2,
            'judul' => 'Speech Synthesis Sederhana',
            'tipe_content' => 1,
            'prev_id' => 1,
            'next_id' => 3,
        ]);

        Content::create([ //3
            'course_id' => 1,
            'sub_course_id' => 2,
            'judul' => 'Berbicara kalimat vs rangkaian kata',
            'tipe_content' => 1,
            'prev_id' => 2,
            'next_id' => 4,
        ]);

        Content::create([ //4
            'course_id' => 1,
            'sub_course_id' => 2,
            'judul' => 'Berbicara selaian bentuk kata',
            'tipe_content' => 1,
            'prev_id' => 3,
            'next_id' => 5,
        ]);

        Content::create([ //5
            'course_id' => 1,
            'sub_course_id' => 2,
            'judul' => 'Latihan',
            'tipe_content' => 1,
            'prev_id' => 4,
            'next_id' => 6,
        ]);

        Content::create([ //6
            'course_id' => 1,
            'sub_course_id' => 2,
            'judul' => 'Asah Pengetahuan 1',
            'tipe_content' => 2,
            'prev_id' => 5,
            'next_id' => 7,
        ]);

        Content::create([ //7
            'course_id' => 1,
            'sub_course_id' => 3,
            'judul' => 'Menambahkan Efek Suara',
            'tipe_content' => 1,
            'prev_id' => 6,
            'next_id' => 8,
        ]);

        Content::create([ //8
            'course_id' => 1,
            'sub_course_id' => 3,
            'judul' => 'Mengontrol Block Speech Synthesis',
            'tipe_content' => 1,
            'prev_id' => 7,
            'next_id' => 9,
        ]);

        Content::create([ //9
            'course_id' => 1,
            'sub_course_id' => 3,
            'judul' => 'Mengontrol Jenis Suara Speech Synthesis',
            'tipe_content' => 1,
            'prev_id' => 8,
            'next_id' => 10,
        ]);

        Content::create([ //10
            'course_id' => 1,
            'sub_course_id' => 3,
            'judul' => 'Latihan',
            'tipe_content' => 1,
            'prev_id' => 9,
            'next_id' => 11,
        ]);

        Content::create([ //11 Kuis
            'course_id' => 1,
            'sub_course_id' => 3,
            'judul' => 'Asah Pengetahuan 2',
            'tipe_content' => 2,
            'prev_id' => 10,
            'next_id' => 12,
        ]);

        Content::create([ //12
            'course_id' => 1,
            'sub_course_id' => 4,
            'judul' => 'Berbicara Bukan Kata',
            'tipe_content' => 1,
            'prev_id' => 11,
            'next_id' => 13,
        ]);

        Content::create([ //13
            'course_id' => 1,
            'sub_course_id' => 5,
            'judul' => 'Contoh AI dengan Speech Synthesis',
            'tipe_content' => 1,
            'prev_id' => 12,
            'next_id' => 14,
        ]);

        Content::create([ //14
            'course_id' => 1,
            'sub_course_id' => 6,
            'judul' => 'Ide Proyek Speech Synthesis',
            'tipe_content' => 1,
            'prev_id' => 13,
            'next_id' => 15,
        ]);

        Content::create([ //15
            'course_id' => 1,
            'sub_course_id' => 6,
            'judul' => 'Tahukah Kamu?',
            'tipe_content' => 1,
            'prev_id' => 14,
            'next_id' => 16,
        ]);

        Content::create([ //16
            'course_id' => 1,
            'sub_course_id' => 6,
            'judul' => 'Apakah Speech Synthesis dapat disalahgunakan?',
            'tipe_content' => 1,
            'prev_id' => 15,
            'next_id' => 17,
        ]);

        Content::create([ //17
            'course_id' => 1,
            'sub_course_id' => 6,
            'judul' => 'Evaluasi',
            'tipe_content' => 3,
            'prev_id' => 16,
            'next_id' => 18,
        ]);

        Content::create([ //18
            'course_id' => 1,
            'sub_course_id' => 6,
            'judul' => 'Congratulations!',
            'tipe_content' => 4,
            'prev_id' => 17,
            'next_id' => 0,
        ]);

        //

        //-----------------------CONTENT SR---------------------//
        /*
        Content::create([ //19
            'course_id' => 2,
            'sub_course_id' => 7,
            'judul' => 'Apa itu Speech Recognition?',
            'tipe_content' => 1,
            'prev_id' => 0,
            'next_id' => 20,
        ]);

        Content::create([ //20
            'course_id' => 2,
            'sub_course_id' => 8,
            'judul' => 'Speech Recognition Sederhana',
            'tipe_content' => 1,
            'prev_id' => 19,
            'next_id' => 21,
        ]);

        Content::create([ //21
            'course_id' => 2,
            'sub_course_id' => 8,
            'judul' => 'Error dalam program Speech Recognition',
            'tipe_content' => 1,
            'prev_id' => 20,
            'next_id' => 22,
        ]);

        Content::create([ //22
            'course_id' => 2,
            'sub_course_id' => 8,
            'judul' => 'Latihan',
            'tipe_content' => 1,
            'prev_id' => 21,
            'next_id' => 23,
        ]);

        Content::create([ //23
            'course_id' => 2,
            'sub_course_id' => 8,
            'judul' => 'Asah Pengetahuan 1',
            'tipe_content' => 2,
            'prev_id' => 22,
            'next_id' => 24,
        ]);

        Content::create([ //24
            'course_id' => 2,
            'sub_course_id' => 9,
            'judul' => 'Contoh Program Speech Recognition dan Speech Synthesis',
            'tipe_content' => 1,
            'prev_id' => 23,
            'next_id' => 25,
        ]);

        Content::create([ //25
            'course_id' => 2,
            'sub_course_id' => 9,
            'judul' => 'Bagaimana Spoken Command Program Bekerja?',
            'tipe_content' => 1,
            'prev_id' => 24,
            'next_id' => 26,
        ]);

        Content::create([ //26
            'course_id' => 2,
            'sub_course_id' => 9,
            'judul' => 'Latihan',
            'tipe_content' => 1,
            'prev_id' => 25,
            'next_id' => 27,
        ]);

        Content::create([ //27
            'course_id' => 2,
            'sub_course_id' => 10,
            'judul' => 'Melibatkan pembuatan kalimat menggunakan konsep part of speech',
            'tipe_content' => 1,
            'prev_id' => 26,
            'next_id' => 28,
        ]);

        Content::create([ //28
            'course_id' => 2,
            'sub_course_id' => 10,
            'judul' => 'Generator kalimat (atau cerita) yang lebih canggih',
            'tipe_content' => 1,
            'prev_id' => 27,
            'next_id' => 29,
        ]);

        Content::create([ //29
            'course_id' => 2,
            'sub_course_id' => 10,
            'judul' => 'Latihan',
            'tipe_content' => 1,
            'prev_id' => 28,
            'next_id' => 30,
        ]);

        Content::create([ //30
            'course_id' => 2,
            'sub_course_id' => 10,
            'judul' => 'Asah Pengetahuan 2',
            'tipe_content' => 2,
            'prev_id' => 29,
            'next_id' => 31,
        ]);

        Content::create([ //31
            'course_id' => 2,
            'sub_course_id' => 11,
            'judul' => 'Contoh Demo Program Menjawab Pertanyaan',
            'tipe_content' => 1,
            'prev_id' => 30,
            'next_id' => 32,
        ]);

        Content::create([ //32
            'course_id' => 2,
            'sub_course_id' => 12,
            'judul' => 'Fitur Lengkap Blok Speech Recognition',
            'tipe_content' => 1,
            'prev_id' => 31,
            'next_id' => 33,
        ]);

        Content::create([ //33
            'course_id' => 2,
            'sub_course_id' => 13,
            'judul' => 'Ide Proyek dengan Speech Synthesis',
            'tipe_content' => 1,
            'prev_id' => 32,
            'next_id' => 34,
        ]);

        Content::create([ //34
            'course_id' => 2,
            'sub_course_id' => 13,
            'judul' => 'Bagaimana Speech Recognition Menjadi Sangat Berguna?',
            'tipe_content' => 1,
            'prev_id' => 33,
            'next_id' => 35,
        ]);

        Content::create([ //35
            'course_id' => 2,
            'sub_course_id' => 13,
            'judul' => 'Apakah Speech recognition dapat disalahgunakan?',
            'tipe_content' => 1,
            'prev_id' => 34,
            'next_id' => 36,
        ]);

        Content::create([ //36
            'course_id' => 2,
            'sub_course_id' => 13,
            'judul' => 'Evaluasi',
            'tipe_content' => 3,
            'prev_id' => 35,
            'next_id' => 37,
        ]);

        Content::create([ //37
            'course_id' => 2,
            'sub_course_id' => 13,
            'judul' => 'Congratulations!',
            'tipe_content' => 4,
            'prev_id' => 36,
            'next_id' => 0,
        ]);
*/
        //-----------------------MATERIAL SS ---------------------//

        Material::create([
            'content_id' => 1,
            'isi' => '<p>Artificial Intelligence (AI) atau dalam bahasa Indonesia adalah kecerdasan buatan merupakan istilah yang digunakan untuk menggambarkan produk di mana mesin atau sistem melakukan sesuatu yang biasanya membutuhkan kecerdasan manusia (Lane, 2021).</p><br><p>Banyak teknik untuk membuat sebuah mesin atau sistem dapat memiliki kecerdasan manusia, salah satu teknik paling popular dalam AI adalah machine learning (ML). ML berguna untuk tugas-tugas dengan langkah-langkah yang akan memakan waktu terlalu lama dan rumit untuk ditulis, oleh karena itu ML memberikan kemudahan untuk melakukan tugas tersebut dengan cara menunjukan contoh tugas pada mesin atau sistem secara berulang kali hingga menemukan pola tugas tersebut.</p><br><p>Apakah kalian pernah menggunakan fitur pada google translate yang dapat mengeluarkan suara sesuai dengan kalimat yang akan diterjemahkan ataupun hasil terjemahan?</p><br><img class="object-contain w-96 mx-auto" src="/res/img/course/ss-1.png" alt=""><br><p>Sistem tersebut adalah gambaran produk AI yang dibangun dengan machine learning agar dapat mengubah teks menjadi suara, saat ini hal tersebut disebut speech synthesis.</p><br><p>Speech Synthesis merupakan salah satu bentuk machine learning yang biasa dikenal dengan text-to-speech (TTS). Speech Synthesis adalah teknologi komprehensif yang melibatkan banyak disiplin ilmu seperti akustik, linguistik, pemrosesan sinyal digital, dan statistik yang bertujuan untuk mengubah informasi teks menjadi ucapan secara real time.</p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 2,
            'isi' => '<p>Sebelum membahas teknis dibalik speech synthesis, mari kita lihat bagaimana speech synthesis dapat digunakan. Dimulai dengan blok program paling sederhana untuk mengeluarkan suara (berbicara). </p><ul class="list-inside list-disc"><li>Klik snap! dibawah</li><li>Klik blok Speak untuk melihat apakah itu bekerja?</li><li>Cobalah untuk mengubah bahasa dan yang akan diucapkan oleh blok Speak!</li></ul><br><figure class = "snap-iframe" id = "simple speak block" container_style = "width: 560px; height: 150px"></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=simple%20speak%20block&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p><p class="font-semibold mt-4">Catatan:</p><ul class="list-inside list-disc"><li>Blok perintah set default language digunakan untuk mengubah bahasa yang akan digunakan.</li><li>Untuk mengubah bahasa hanya perlu memasukan nama bahasa ataupun menggunakan kode bahasa, seperti ID yang digunakan untuk bahasa Indonesia. <a class="text-blue-400" href="https://en.wikipedia.org/wiki/IETF_language_tag" target="_blank">(Lihat kode bahasa lainnya)</a></li></ul>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 3,
            'isi' => '<p>Kalau kalian tahu speech synthesis bisa melakukan lebih dari sekedar mengucapkan setiap kata hanya dalam sebuah kalimat loh.</p><p>Speech synthesis berusaha menghasilkan pengucapan secara natural, seperti intonasi, nada, tekanan, dan ritme. Selain itu, pengucapan pertanyaan dan kalimat yang deklaratif akan memiliki perbedaan. </p><p>Contoh berikut adalah perbedaan bagaimana pengucapan kalimat yang dibuat per kata dan kalimat utuh. </p><br><figure class="snap-iframe" id="separate words" container_style="width: 560px; height: 200px"></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=separate%20words&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p><p>Kalian bisa mencobanya dengan mengubah bentuk pertanyaan menjadi kalimat deklaratif, apakah ada perbedaan dalam pengucapannya?</p> ',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 4,
            'isi' => '<p>Selain dapat mengucapkan kalimat utuh, speech synthesis dapat berbicara persis seperti manusia dalam pengucapan angka, simbol, bahkan sampai format tanggal</p><p>Berikut contoh bagaimana speech synthesis dapat mengucapkan angka dan format tanggal, Cobalah!</p><br><figure class="snap-iframe" id="numbers signs" container_style="width: 560px; height: 132px" caption=""> </figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=numbers%20signs&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p>
            <p>Bagaimana apakah sudah terbayang akan membuat sebuah produk AI menggunakan speech synthesis?</p> ',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 5,
            'isi' => '<p>Cobalah edit snap! di bawah untuk melihat bagaimana angka yang berbeda dan simbol khusus diucapkan! Lihat juga ketika kita mengganti bahasa, apakah akan berbeda?</p><br><figure class="snap-iframe" id="numbers signs" container_style="width: 560px; height: 132px" caption=""> </figure> <p class="mt-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=numbers%20signs&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p>',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 7,
            'isi' => '<p>Setelah mempelajari bagaimana speech synthesis secara sederhana, kita akan memahami efek suara pada speech synthesis. Contohnya kita ingin membuat komputer untuk berbicara, kemudian diinterupsi oleh bel pintu, dan ada respon setelah bel pintu berbunyi, program tersebut dapat dilihat pada contoh berikut</p><br><figure class="snap-iframe" id="doorbell problem" container_style="width: 560px; height: 132px" caption=""></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=doorbell%20problem&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p><br><p>Bagaimana apakah ada masalah pada contoh tersebut?</p> <p>Ya, Masalahnya adalah bel pintu berbunyi bersamaan dengan pengucapan kalimat pertama. Hal tersebut terjadi karena block Speak memberitahu browser untuk mulai berbicara dan block lainnya sejajar dengan block speak sehingga terjadi masalah, contoh disini adalah block <span class="bg-fuchsia-500 px-2 rounded-md text-white">play sound</span>. </p> <br><p>Untuk mengatasi masalah tersebut yaitu dengan membunyikan bel pintu setelah pengucapan kalimat pertama selesai. Untuk itu, kita memerlukan blok yang sedikit lebih kompleks yang dapat menerima tindakan yang harus dilakukan setelah blok speak dijalankan. Berikut yang harus dilakukan agar hal tersebut dapat diperbaiki :</p><br><figure class="snap-iframe" id="doorbell fix" container_style="width: 560px; height: 132px" caption=""></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=doorbell%20fix&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p><br><p>Terlihat perbedaan bukan? Pada kasus ini kita menambahkan perintah <span class="bg-fuchsia-500 px-2 rounded-md text-white">then</span> setelah blok speak kalimat pertama dan dilanjutkan dengan pemutaran efek suara bel pintu yang ditambahkan <span class="bg-fuchsia-500 px-2 rounded-md text-white">until done</span> dan diakhiri dengan blok <span class="bg-fuchsia-500 px-2 rounded-md text-white">speak</span> untuk mengucapkan kalimat kedua.</p><br><p>Catatan:</p>
            <p>Kemampuan untuk mengungkapkan apa yang harus terjadi setelah selesai berbicara adalah kemampuan yang berguna. Misalnya, program mungkin berbicara beberapa penjelasan dan kemudian melakukan sesuatu di layar. Dalam beberapa contoh di chapter selanjutnya program akan mendengarkan suara yang diucapkan oleh kita setelah program selesai bicara.</p><br><p>Mari kita lanjutkan ke materi selanjutnya yaitu mengontrol speech synthesis!</p>',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 8,
            'isi' => '<p>Dalam kehidupan sehari-hari seseorang dapat berbicara secara lambat atau cepat, dalam nada rendah atau tinggi, dengan suara pelan atau keras, dan banyak lagi. Setiap orang pastinya memiliki suara dan aksen yang berbeda.</p><br><p>Untuk mencerminkan kemampuan tersebut, kita dapat menggunakan blok yang lebih kompleks. Cobalah contoh berikut!</p><br><figure class="snap-iframe" id="rate pitch volume" container_style="width: 560px; height: 132px" caption=""></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=rate%20pitch%20volume&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p><br><p>Pada contoh diatas, blok memiliki beberapa parameter seperti <span class="bg-fuchsia-500 px-2 rounded-md text-white">with pitch</span> , <span class="bg-fuchsia-500 px-2 rounded-md text-white">with rate</span> , <span class="bg-fuchsia-500 px-2 rounded-md text-white">with voice</span> , dan <span class="bg-fuchsia-500 px-2 rounded-md text-white">with volume</span> yang dapat diisi dengan nilai. Nilai 1 menandakan normal, jika nilai dibawah 1 seperti nilai pecahan menandakan nada rendah, laju lambat, atau volume rendah. Kebalikannya jika nilai di atas 1 menandakan nada tinggi, laju cepat, atau volume tinggi.</p><br><p>Catatan : Perhatikan bahwa ini tergantung pada suara dan browser yang digunakan, beberapa parameter tersebut mungkin akan diabaikan</p>',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 9,
            'isi' => '<p>Pada contoh sebelumnya terdapat parameter  <span class="font-bold text-fuchsia-700">in language</span>  dalam blok speak, parameter tersebut dapat diisi dengan nama bahasa yang akan digunakan atau dengan kode bahasa, seperti ID yang digunakan untuk bahasa Indonesia. <a class="text-blue-400" href="https://en.wikipedia.org/wiki/IETF_language_tag" target="_blank">(Lihat kode bahasa lainnya)</a></p><br><p>Pemilihan jenis suara <span class="font-bold text-fuchsia-700">with voice</span> yang tersedia tergantung pada browser dan sistem operasi komputer yang digunakan. Untuk melihat daftar suara dapat mengklik <span class="font-bold text-fuchsia-700">get voice names</span> dan gunakan nomor suara yang ada di daftar pada parameter <span class="font-bold text-fuchsia-700">with voice</span> . Kita juga dapat menggunakan <span class="font-bold text-fuchsia-700">voice that matches</span> untuk menemukan suara yang cocok dengan pencarian kita seperti pada contoh berikut</p><br><figure class="snap-iframe" id="voices" container_style="width: 560px; height: 600px" caption=""></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=voices&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p><br><p>Sebuah suara lebih dari sekedar suara. Dengarkan contoh di bawah ini dalam mengucapkan tanggal. Kedua blok tersebut menghasilkan pengucapan yang berbeda berdasarkan bahasa inggris yang digunakan, blok pertama menggunakan bahasa inggris UK dan blok kedua menggunakan bahasa inggris US.</p><br><figure class="snap-iframe" id="dates" container_style="width: 560px; height: 700px" caption=""></figure> <p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=dates&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p>',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 10,
            'isi' => '<p>Pada snap berikut, ubah nilai parameter ke angka yang kurang dari 1 dan kemudian lebih besar dari 1. Lakukan hal yang sama untuk nada (<span class="font-bold text-fuchsia-700">with pitch</span>). Cobalah suara (voice) yang berbeda. Kita dapat melihat daftar suara yang tersedia di browser dengan klik blok <span class="font-bold text-fuchsia-700">get voice name</span>. Beberapa dari pilihan tersebut dimaksudkan untuk berbicara menggunakan bahasa lain.</p><br><figure class="snap-iframe" id="rate pitch volume" container_style="width: 560px; height: 132px" caption=""></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=rate%20pitch%20volume&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p><br><p>Sampai sini kita sudah memahami bagaimana mengontrol suara yang dihasilkan oleh speech synthesis, menyenangkan bukan?</p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 12,
            'isi' => '<p>Sangat menarik untuk mengeksplorasi bagaimana suara yang berbeda dalam mengucapkan yang bukan termasuk kata seperti "grrrrrrrrrrrrr". Dengarkan bagaimana suaranya untuk setiap suara dan kemudian jelajahi yang bukan termasuk kata lainnya (misal, hmmmm).</p><br><figure class="snap-iframe" id="grrrrrrr" full_screen="true" container_style="width: 560px; height: 480px" caption=""></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=grrrrrrr" class="font-bold text-primary" target="_blank">klik disini!</a></p><br><p>Bisakah kalian membuatnya menggeram dengan menurunkan nada dan kecepatannya? Cobalah pada program di atas!</p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 13,
            'isi' => '<p>Contoh program Speech Synthesis berikut ini menggunakan nilai random untuk <span class="font-bold text-fuchsia-700">rate</span>, <span class="font-bold text-fuchsia-700">pitch</span>, dan <span class="font-bold text-fuchsia-700">voice</span>. Ketika kita mengklik angka pada gambar, angka random diucapkan dengan suara random (dan karenanya bahasa juga random) serta pitch dan rate random.</p> <br><p>Burung beo mengulangi apa yang didengarnya (Speech Recognition). Mendengar ucapan kita berulang-ulang dengan suara aneh dengan pitch dan rate random sehingga dapat menghibur.</p><br><figure class="snap-iframe" id="speak randomly" full_screen="true" container_style="width: 560px; height: 480px" caption="Click bendera hijau untuk mendengarkan bebicara secara random"></figure><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=speak%20randomly" class="font-bold text-primary" target="_blank">klik disini!</a></p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 14,
            'isi' => '<p>Berikut beberapa ide proyek yang mungking dapat dikerjakan oleh teman-teman nantinya</p>
            <br>
            <ol class="list-alpha list-outside">
              <li>Mintalah sprite bermain di mana setiap sprite berbicara dengan suara yang berbeda.</li>
              <li>Buat pembaca halaman yang berbicara tentang konten di web.</li>
              <li>Tingkatkan program untuk berbicara saat dijalankan untuk menghasilkan penjelasan atau bantuan dalam
                debugging.</li>
              <li>Buat jam bicara atau kalkulator.</li>
              <li>Buat permainan mengeja di mana kata-kata yang akan dieja diucapkan.</li>
            </ol>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 15,
            'isi' => '<p>Tahukah kamu? bahwa speech synthesis adalah cara yang baik bagi perangkat lunak untuk berkomunikasi dengan orang-orang tuna netra, seperti jam bicara atau robot tanpa tampilan. </p><br>
            <p>Selain itu speech synthesis dapat digunakan ketika mata seseorang perlu memperhatikan lain seperti pilot yang menerbangkan pesawat atau ahli bedah selam operasi pasien.</p><br>
            <p>Speech synthesis seringkali menjadi cara terbaik untuk berkomunikasi dengan anak-anak atau orang dewasa yang belum belajar membaca. Bahkan speech synthesis dapat memberikan cara bagi orang-orang yang secara fisik tidak dapat berbicara dapat berkomunikasi dengan orang lain, karena hal tersebut menciptakan percakapan yang lebih alami, ramah, dan menyenangkan daripada menggunakan monitor, keyboard, mouse, dan alat lainnya.</p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 16,
            'isi' => '<p>Jawabanya Ya, karena saat teknologi semakin maju, hal tersebut memungkinkan pekerjaan orang lain tergantikan dengan teknologi. Kekhawatiran yang lebih serius adalah ketika pada generasi berikutnya dari speech synthesis dapat membodohi orang agar berpikir bahwa seseorang mengatakan sesuatu yang padahal tidak mereka katakan. Hal tersebut sangat mengkhawatirkan dalam kombinasi dengan teknologi yang dapat mengubah ekspresi emosional dan sinkronisasi bibir pada video.</p>',
            'xp' => 10
        ]);

        //-----------------------MATERIAL SR ---------------------//
        /*
        Material::create([
            'content_id' => 19,
            'isi' => '<p>Apakah kalian pernah menggunakan fitur pencarian pada google menggunakan suara kalian? </p>
            <br><img class="object-contain w-full mx-auto" src="/res/img/course/sr-1.png" alt=""><br>
            <p>Jika kalian pernah menggunakannya, itu adalah gambaran produk AI yang menggunakan speech recognition di dalamnya!</p>
            <br><p>Sebenarnya jauh lebih mudah untuk komputer memulai dengan teks dan berakhir dengan ucapan (speech synthesis) daripada memulai dengan ucapan dan berakhir dengan teks yang sesuai. Biasanya, lebih mudah membuat komputer menghasilkan sesuatu daripada mengenalinya.</p>
            <br><img class="object-contain w-full mx-auto" src="/res/img/course/sr-2.png" alt="">
            <p class="text-center text-sm my-2">Sumber: https://seranking.com/blog/voice-search-seo/</p>
            <br><p>Speech recognition merupakan salah satu hasil dari teknologi AI untuk mengenali suara seperti ucapan. Ucapan yang kita ucapkan dan suara lainnya akan menciptakan getaran di udara yang menyebabkan getaran di mikrofon komputer, getaran tersebut akan diubah menjadi angka. Speech recognition dimulai dengan angka-angka ini dan upaya dalam menentukan apa yang dikatakan. Proses ini tidak selamanya berjalan sesuai keinginan kita karena adanya faktor lain seperti faktor suara sekitar yang akan menyebabkan kesalahan pada speech recognition.</p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 20,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 21,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 22,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 24,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 25,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 26,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 27,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 28,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 29,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 31,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 32,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 33,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 34,
            'isi' => '',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 35,
            'isi' => '',
            'xp' => 10
        ]);
*/

        //-----------------------Quiz---------------------//

        Quiz::create([ //1
            'content_id' => 6,
            'desc' => '<p>Cek pengetahuan ini merupakan tes yang memiliki 3 pertanyaan terkait materi yang sudah di pelajari oleh anda. Jawablah pertanyaan dengan tepat untuk mendapatkan point!</p><br>
            <p class="font-semibold mt-4">Aturan:</p>
            <ol class="list-inside list-decimal">
                <li>Anda akan diberikan 3 point untuk setiap pertanyaan dan tidak batas waktu pengisian.</li>
                <li>Setiap soal diberikan kesempatan 3 kali mengisi hingga benar dengan setiap pengisian akan mengurangi 1 point.</li> 
            </ol>',
            'xp' => 30
        ]);

        Quiz::create([ //2
            'content_id' => 11,
            'desc' => '<p>Cek pengetahuan ini merupakan tes yang memiliki 3 pertanyaan terkait materi yang sudah di pelajari oleh anda. Jawablah pertanyaan dengan tepat untuk mendapatkan point!</p><br>
            <p class="font-semibold mt-4">Aturan:</p>
            <ol class="list-inside list-decimal">
                <li>Anda akan diberikan 3 point untuk setiap pertanyaan dan tidak batas waktu pengisian.</li>
                <li>Setiap soal diberikan kesempatan 3 kali mengisi hingga benar dengan setiap pengisian akan mengurangi 1 point.</li> 
            </ol>',
            'xp' => 30
        ]);

        //-----------------------Questions---------------------//
        Question::create([ //1
            'quiz_id' => 1,
            'pertanyaan' => 'Di bawah ini mana penyataan yang kurang tepat?',
            'prev_quest' => 0,
            'next_quest' => 2
        ]);

        Question::create([ //2
            'quiz_id' => 1,
            'pertanyaan' => 'Dibawah ini manakah perintah untuk menjalankan speech synthesis di Snap?',
            'prev_quest' => 1,
            'next_quest' => 3
        ]);

        Question::create([ //3
            'quiz_id' => 1,
            'pertanyaan' => 'Hal mendasar apa saja yang dapat diucapkan oleh blok Speak?',
            'prev_quest' => 2,
            'next_quest' => 0
        ]);

        Question::create([ //4
            'quiz_id' => 2,
            'pertanyaan' => 'Dibawah ini yang bukan merupakan parameter dalam mengontrol speech synthesis adalah?',
            'prev_quest' => 0,
            'next_quest' => 5
        ]);

        Question::create([ //5
            'quiz_id' => 2,
            'pertanyaan' => 'Perintah yang dapat digunakan untuk mengeksekusi perintah setelah perintah pertama adalah...',
            'prev_quest' => 4,
            'next_quest' => 6
        ]);

        Question::create([ //6
            'quiz_id' => 2,
            'pertanyaan' => 'Manakah dibawah ini parameter yang paling tepat untuk menambahkan aksen dalam pengucapan?',
            'prev_quest' => 5,
            'next_quest' => 0
        ]);

        //-----------------------Answer---------------------//
        Answer::create([
            'question_id' => 1,
            'jawaban' => 'a. Speech synthesis dapat mengucapkan kalimat utuh',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 1,
            'jawaban' => 'b. Speech synthesis dapat membedakan mana kalimat pertanyaan dan deklaratif',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 1,
            'jawaban' => 'c. Speech synthesis hanya dapat mengucapkan kata-kata',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 1,
            'jawaban' => 'd. Speech synthesis memiliki kemampuan berbicara berbagai bahasa',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 2,
            'jawaban' => 'a. Speak',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 2,
            'jawaban' => 'b. Set default language to',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 2,
            'jawaban' => 'c. Open this in a new tab',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 2,
            'jawaban' => 'd. Play',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 3,
            'jawaban' => 'a. Kalimat Utuh',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 3,
            'jawaban' => 'b. Tanggal',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 3,
            'jawaban' => 'c. Mata uang ',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 3,
            'jawaban' => 'd. Semua Benar',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 4,
            'jawaban' => 'a. With pitch',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 4,
            'jawaban' => 'b. With rate',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 4,
            'jawaban' => 'c. With voice',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 4,
            'jawaban' => 'd. With sound',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 5,
            'jawaban' => 'a. Speak',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 5,
            'jawaban' => 'b. With',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 5,
            'jawaban' => 'c. Then',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 5,
            'jawaban' => 'd. After',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 6,
            'jawaban' => 'a. voice that matches [english] [uk]',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 6,
            'jawaban' => 'b. voice that matches [english]',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 6,
            'jawaban' => 'c. voice that matches [male]',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 6,
            'jawaban' => 'd. voice that matches [english] [female]',
            'status' => 0
        ]);

        //-----------------------Evaluation---------------------//
        Evaluation::create([
            'content_id' => 17,
            'xp' => 50,
            'studi_kasus' => '<p class="font-semibold ">Buatlah sebuah program dalam mengucapkan sebuah pantun dibawah ini menggunakan blok speech synthesis!</p><br>
            <p>Hmmm aku mau berpantun nih, dengerin ya!</p>
            <p>Rusa kecil diam terkurung</p>
            <p>Kurang makan kurang minum</p>
            <p>Cari ilmu jangan murung</p>
            <p>Cerialah selalu banyak tersenyum</p>
            <p>*suara tepuk tangan*</p><br>',
            'step' => '<ol class="list-decimal ml-4 leading-relaxed">
            <li>Gunakan template snap berikut <a class="text-info font-bold"
                href="https://ecraft2learn.github.io/ai/snap/snap.html?project=speaking&editMode"
                target="_blank">(Klik)</a></li>
            <li>Gunakan atau buang blok yang ada atau juga menambahkan untuk menyelesaikan studi kasus</li>
            <li>Setelah dirasa selesai, klik icon file putih di pojok kiri atas</li>
            <li>Pilih save as, kemudian pilih computer, dan merubah nama file lalu tekan tombol save</li>
            <li>File pekerjaan tada akan berformat .XML</li>
            <li>Upload file tersebut di form upload jawaban dan tunggu hingga dinilai oleh ahli</li>
          </ol>'
        ]);

        //-----------------------Rubrik---------------------//

        Rubrik::create([
            'evaluation_id' => 1,
            'score' => 10.0,
            'desc' => '<p>Program yang dibangung memuat: </p><p> (1) Blok Sederhana </p><p> (2) Blok yang berbicara selain bentuk kata-kata </p><p> (3) Efek suara </p><p> (4) Paramater kontrol blok speech synthesis</p><p> (5) Parameter kontrol untuk merubah jenis suara </p><p> (6) Blok untuk berbicara bukan sebuah kata</p>',
            'point' => 100
        ]);

        Rubrik::create([
            'evaluation_id' => 1,
            'score' => 8.0,
            'desc' => '<p>Program yang dibangung memuat: </p><p> (1) Blok Sederhana </p><p> (2) Blok yang berbicara selain bentuk kata-kata </p><p> (3) Efek suara </p><p> (4) Paramater kontrol blok speech synthesis</p><p> (5) Parameter kontrol untuk merubah jenis suara </p>',
            'point' => 80
        ]);

        Rubrik::create([
            'evaluation_id' => 1,
            'score' => 6.0,
            'desc' => '<p>Program yang dibangung memuat: </p><p> (1) Blok Sederhana </p><p> (2) Blok yang berbicara selain bentuk kata-kata </p><p> (3) Efek suara </p><p> (4) Paramater kontrol blok speech synthesis</p>',
            'point' => 60
        ]);

        Rubrik::create([
            'evaluation_id' => 1,
            'score' => 4.0,
            'desc' => '<p>Program yang dibangun hanya memuat blok speech synthesis sederhana dan blok yang berbicara selain bentuk kata-kata</p>',
            'point' => 40
        ]);

        Rubrik::create([
            'evaluation_id' => 1,
            'score' => 2.0,
            'desc' => '<p>Program yang dibangun hanya memuat blok speech synthesis sederhana (blok speak)</p>',
            'point' => 20
        ]);

        //-----------------------Challenge---------------------//

        Challenge::create([
            'judul' => 'Program Snap! AI untuk mengubah kalimat menjadi suara (Speech Synthesis)',
            'deskripsi' => 'Membuat program snap! dengan speech synthesis untuk dua suara yang berbeda sedang mengobrol seperti...',
            'isi' => '<p class="text-xl font-semibold mb-4">Program Snap! AI untuk mengubah kalimat menjadi suara (Speech Synthesis)</p>
            <p>Buatlah program snap! dengan speech synthesis untuk dua suara yang berbeda sedang mengobrol seperti berikut:
            <br><br>Suara A : “Hallo, salam kenal nama saya Mars”
            <br>Suara B : “Hallo, salam kenal juga, saya Zeys”
            <br>Suara A : “Bagaimana pertadingan tadi Zeys?”
            <br>Suara B : “Pertandingan tadi sangat seru!”</p>
            <p class="mt-4">Kerjakan tantangan di snap! kemudian export file as xml!</p>',
            'step' => '<ol class="list-decimal ml-4 leading-relaxed">
            <li>Gunakan template snap berikut <a class="text-info font-bold"
                href="https://ecraft2learn.github.io/ai/snap/snap.html?project=speaking&editMode"
                target="_blank">(Klik)</a></li>
            <li>Gunakan atau buang blok yang ada atau juga menambahkan untuk menyelesaikan Tantangan</li>
            <li>Setelah dirasa selesai, klik icon file putih di pojok kiri atas</li>
            <li>Pilih save as, kemudian pilih computer, dan merubah nama file lalu tekan tombol save</li>
            <li>File pekerjaan tada akan berformat .XML</li>
            <li>Upload file tersebut di form upload jawaban dan tunggu hingga dinilai oleh ahli</li>
          </ol>',
            'point' => 20,
            'xp' => 60,
        ]);
    }
}
