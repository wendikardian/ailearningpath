<?php

namespace Database\Seeders;

use App\Models\Achievement;
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
use App\Models\Learning;
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

        User::create([
            'email' => 'wendikardian@gmail.com',
            'name' => 'Wendi',
            'is_admin' => 1,
            'password' => Hash::make('wendikardian'),
            'status' => 1
        ]);

        Learning::create([
            'course_id' => 3,
            'user_id' => 2,
            'status' => 0,
        ]);
        Achievement::create([
            'user_id' => 2,
            'total_point' => 0,
            'total_xp' => 0,
            'level' => 0,
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

        Course::create([
            'judul' => 'Menambahkan Model Machine Learning pada Program',
            'desc' => 'Belajar cara untuk menambahkan model Machine Learning pada beberapa program dengan mudah dan menyenangkan.',
            'author' => 'Ken Kahn, University Of Oxford',
            'requirement' => '<ul class="list-inside list-disc leading-relaxed"><li>Personal Computer (PC) atau Laptop </li> <li>Internet</li> <li>Kamera / Webcam</li></ul>',
            'ratings' => 5.0,
            'thumb' => '/res/img/ml-thumb.png',
            'icon' => '/res/img/ml-icon.png'
        ]);


        Course::create([
            'judul' => 'Speech Recognition dalam Artificial Intelligence',
            'desc' => 'Belajar Artificial Intelligence untuk membuat produk AI dengan Speech Recognition dengan mudah dan menyenangkan.',
            'author' => 'Ken Kahn, University Of Oxford',
            'requirement' => '<ul class="list-inside list-disc leading-relaxed"><li>Personal Computer (PC) atau Laptop </li> <li>Internet</li> <li>Speaker dan Microphone / Earphone</li></ul>',
            'ratings' => 4.9,
            'thumb' => '/res/img/sr-thumb.png',
            'icon' => '/res/img/icon-sr.png'
        ]);
        Course::create([
            'judul' => 'Pengenalan Gambar dalam Artificial Intelligence',
            'desc' => 'Belajar Artificial Intelligence untuk membuat produk AI dengan Pengenalan Gambar dengan mudah dan menyenangkan.',
            'author' => 'Ken Kahn, University Of Oxford',
            'requirement' => '<ul class="list-inside list-disc leading-relaxed"><li>Personal Computer (PC) atau Laptop </li> <li>Internet</li> <li>Speaker dan Microphone / Earphone</li></ul>',
            'ratings' => 5.0,
            'thumb' => '/res/img/ir-thumb.png',
            'icon' => '/res/img/icon-ir.png'
        ]);
        // Menggunakan kata dan kalimat
        Course::create([
            'judul' => 'Menggunakan Kata dan Kalimat dalam Artificial Intelligence',
            'desc' => 'Belajar Artificial Intelligence untuk membuat produk AI dengan menggunakan kata dan kalimat dengan mudah dan menyenangkan (Pemrosesan Bahasa Alami).',
            'author' => 'Ken Kahn, University Of Oxford',
            'requirement' => '<ul class="list-inside list-disc leading-relaxed"><li>Personal Computer (PC) atau Laptop </li> <li>Internet</li> <li>Speaker dan Microphone / Earphone</li></ul>',
            'ratings' => 5.0,
            'thumb' => '/res/img/nlp-thumb.png',
            'icon' => '/res/img/icon-nlp.png'
        ]);





        /* ============ Course 1 ============ */
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

        /* ============ Course 2 ============ */
        SubCourse::create([ //7
            'course_id' => 2,
            'judul_sub' => 'Pendahuluan',
            'desc' => 'Selamat datang di course Speech Synthesis dalam Artificial Intelligence. Pertama-tama, mari kita cari tahu apa itu speech synthesis dan kegunaannya!'
        ]);

        SubCourse::create([ //8
            'course_id' => 2,
            'judul_sub' => 'Training Gambar',
            'desc' => 'Pada sub materi speech synthesis sederhana kita akan memulai mempelajari beberapa blok snap! yang dapat digunakan untuk speech synthesis.'
        ]);

        SubCourse::create([ //9
            'course_id' => 2,
            'judul_sub' => 'Training Suara',
            'desc' => 'Pada sub materi mengontrol speech synthesis kita akan mempelajari efek dan atribut kontrol pada blok speech synthesis pada snap!.'
        ]);

        SubCourse::create([ //10
            'course_id' => 2,
            'judul_sub' => 'Training Pose',
            'desc' => 'Pada sub materi berbicara bukan kata kita akan mempelajari bagaimana blok snap! untuk speech synthesis dapat bekerja untuk selain bentuk kata.'
        ]);

        SubCourse::create([ //11
            'course_id' => 2,
            'judul_sub' => 'Contoh Program dengan Machine Learning',
            'desc' => 'Pada sub materi ini merupakan contoh dari penerapan blok snap! speech synthesis yang telah dipelajari di sub materi sebelumnya.'
        ]);

        SubCourse::create([ //12
            'course_id' => 2,
            'judul_sub' => 'Style Transfer',
            'desc' => 'Pada sub materi ini terdapat evaluasi belajar teman-teman dan akan mendapatkan sertifikat.'
        ]);

        SubCourse::create([ //13
            'course_id' => 2,
            'judul_sub' => 'Quiz',
            'desc' => 'Pada sub materi ini terdapat evaluasi belajar teman-teman dan akan mendapatkan sertifikat.'
        ]);

        SubCourse::create([ //14
            'course_id' => 2,
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
        // Course pengenalan gambar
        SubCourse::create([
            'course_id' => 3,
            'judul_sub' => 'Pendahuluan',
            'desc' => 'Selamat datang di course Pengenalan Suara dalam Artificial Intelligence. Pertama-tama, mari kita cari tahu apa itu pengenalan suara dan kegunaannya!'
        ]);
        SubCourse::create([
            'course_id' => 3,
            'judul_sub' => 'Bagaimana Program Komentar yang Diucapkan Bekerja',
            'desc' => 'Pada sub materi ini kita akan mempelajari bagaimana program komentar yang diucapkan bekerja.'
        ]);
        SubCourse::create([
            'course_id' => 3,
            'judul_sub' => 'Keunggulan dari Speech Recognition',
            'desc' => 'Pada sub materi ini kita akan mempelajari keunggulan dari speech recognition.'
        ]);
        SubCourse::create([
            'course_id' => 3,
            'judul_sub' => 'Fitur Lengkap Blok Speech Recognition',
            'desc' => 'Pada sub materi ini akan diperjelas lebih dalam fitur lengkap yang dimiliki oleh blok Speech Recognition.'
        ]);
        SubCourse::create([
            'course_id' => 3,
            'judul_sub' => 'Proyek',
            'desc' => 'Pada sub materi ini teman-teman akan membuat proyek dengan menggunakan pengenalan gambar.'
        ]);
        SubCourse::create([
            'course_id' => 3,
            'judul_sub' => 'Quiz',
            'desc' => 'Pada sub materi ini terdapat evaluasi belajar teman-teman dan akan mendapatkan sertifikat.'
        ]);
        SubCourse::create([
            'course_id' => 4,
            'judul_sub' => 'Pengenalan',
            'desc' => 'Pada sub materi ini, teman-teman akan mempelajari pengenalan gambar dalam artificial intelligence.'
        ]);
        SubCourse::create([
            'course_id' => 4,
            'judul_sub' => 'Pengenalan Gambar Sederhana',
            'desc' => 'Pada sub materi ini, teman-teman akan mempelajari pengenalan gambar sederhana menggunakan Blok coding dan aplikasinya.'
        ]);
        SubCourse::create([
            'course_id' => 4,
            'judul_sub' => 'Pengenalan Gambar Lanjutan',
            'desc' => 'Pada sub materi ini, teman-teman akan belajar teknik lanjutan untuk pengenalan gambar hingga menggunakan API Key'
        ]);
        SubCourse::create([
            'course_id' => 4,
            'judul_sub' => 'Penerapan Pengenalan Gambar',
            'desc' => 'Pada bagian ini, teman-teman akan dikenalkan dimana pengenalan gambar digunakan dalam kehidupan sehari-hari.'
        ]);
        SubCourse::create([
            'course_id' => 4,
            'judul_sub' => 'Computer Vision',
            'desc' => 'Pada sub materi ini, teman-teman akan dikenalkan mekanisme cara kerja Computer Vision dan aplikasinya seperti Video Recognition.'
        ]);
        SubCourse::create([
            'course_id' => 4,
            'judul_sub' => 'Proyek',
            'desc' => 'Pada sub materi ini, teman-teman akan membuat proyek dengan menggunakan pengenalan gambar.'
        ]);
        SubCourse::create([
            'course_id' => 4,
            'judul_sub' => 'Quiz',
            'desc' => 'Pada sub materi ini, teman-teman akan diberikan kuis untuk menguji pemahaman teman-teman.'
        ]);
        SubCourse::create([
            'course_id' => 5,
            'judul_sub' => 'Pengenalan',
            'desc' => 'Pada sub materi ini, teman-teman akan mempelajari bagaimana cara komputer mengolah sebuah kata atau yang biasa sering kita sebut pemrosesan bahasa alami.'
        ]);
        SubCourse::create([
            'course_id' => 5,
            'judul_sub' => 'Pemrosesan kata',
            'desc' => 'Pada bagian ini, teman-teman akan belajar bagaimana cara mengubah kata menjadi sebuah angka dan mencari kedekatan antara 1 kata dengan kata lainnya'
        ]);
        SubCourse::create([
            'course_id' => 5,
            'judul_sub' => 'Pemrosesan kata dan kalimat menggunakan Snap!',
            'desc' => 'Pada bagian ini, teman-teman akan belajar bagaimana caranya menerapkan pemrosesan bahasa alami dengan menggunakan snap hingga kamu bisa membuat project mu sendiri'
        ]);
        SubCourse::create([
            'course_id' => 5,
            'judul_sub' => 'Integrasikan dengan model GPT',
            'desc' => 'Pada bagian ini, teman-teman akan belajar pemrosesan bahasa alami dengan menggunakan model GPT untuk menghasilkan kata atau kalimat yang lebih baik'
        ]);
        SubCourse::create([
            'course_id' => 5,
            'judul_sub' => 'Bahasa dan resiko menggunakan word embedding',
            'desc' => 'Pada bagian ini, teman-teman akan dikenalkan bahayanya teknologi pemrosesan bahasa alami apabila digunakan secara sembarangan'
        ]);
        SubCourse::create([
            'course_id' => 5,
            'judul_sub' => 'Word embeddings',
            'desc' => 'Bagaimana cara Word Embeddings bekerja ? '
        ]);
        SubCourse::create([
            'course_id' => 5,
            'judul_sub' => 'Proyek',
            'desc' => 'Pada sub materi ini, teman-teman akan membuat proyek dengan mengimplementasikan Pemrosesan Bahasa Alami.'
        ]);
        SubCourse::create([
            'course_id' => 5,
            'judul_sub' => 'Quiz time',
            'desc' => 'Pada sub materi ini, teman-teman akan diberikan kuis untuk menguji pemahaman teman-teman.'
        ]);











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

        // CONTENT CHAPTER 4 //

        Content::create([ //19
            'course_id' => 2,
            'sub_course_id' => 7,
            'judul' => 'Machine Learning',
            'tipe_content' => 1,
            'prev_id' => 0,
            'next_id' => 20,
        ]);

        Content::create([ //20
            'course_id' => 2,
            'sub_course_id' => 7,
            'judul' => 'Pendahuluan',
            'tipe_content' => 1,
            'prev_id' => 19,
            'next_id' => 21,
        ]);

        Content::create([ //21
            'course_id' => 2,
            'sub_course_id' => 7,
            'judul' => 'Save dan Load Training Kamu',
            'tipe_content' => 1,
            'prev_id' => 20,
            'next_id' => 22,
        ]);

        Content::create([ //22
            'course_id' => 2,
            'sub_course_id' => 8,
            'judul' => 'Blok untuk Training Data Gambar dengan Kamera',
            'tipe_content' => 1,
            'prev_id' => 21,
            'next_id' => 23,
        ]);

        Content::create([ //23
            'course_id' => 2,
            'sub_course_id' => 8,
            'judul' => 'Menggunakan Sprite Costumes untuk Training',
            'tipe_content' => 1,
            'prev_id' => 22,
            'next_id' => 24,
        ]);

        Content::create([ //24
            'course_id' => 2,
            'sub_course_id' => 8,
            'judul' => 'Mengenali Gambar tanpa Training atau Layanan Cloud',
            'tipe_content' => 1,
            'prev_id' => 23,
            'next_id' => 25,
        ]);

        Content::create([ //25
            'course_id' => 2,
            'sub_course_id' => 8,
            'judul' => 'Latihan Contoh Program',
            'tipe_content' => 1,
            'prev_id' => 24,
            'next_id' => 26,
        ]);

        Content::create([ //26
            'course_id' => 2,
            'sub_course_id' => 9,
            'judul' => 'Mengenali Suara',
            'tipe_content' => 1,
            'prev_id' => 25,
            'next_id' => 27,
        ]);

        Content::create([ //27
            'course_id' => 2,
            'sub_course_id' => 9,
            'judul' => 'Latihan Contoh Program',
            'tipe_content' => 1,
            'prev_id' => 26,
            'next_id' => 28,
        ]);

        Content::create([ //28
            'course_id' => 2,
            'sub_course_id' => 9,
            'judul' => 'Model dari Google Teachable Machine',
            'tipe_content' => 1,
            'prev_id' => 27,
            'next_id' => 29,
        ]);

        Content::create([ //29
            'course_id' => 2,
            'sub_course_id' => 10,
            'judul' => 'Bagaimana Cara Kerja Deteksi Pose?',
            'tipe_content' => 1,
            'prev_id' => 28,
            'next_id' => 30,
        ]);

        Content::create([ //30
            'course_id' => 2,
            'sub_course_id' => 10,
            'judul' => 'Mendeteksi Pose-mu',
            'tipe_content' => 1,
            'prev_id' => 29,
            'next_id' => 31,
        ]);

        Content::create([ //31
            'course_id' => 2,
            'sub_course_id' => 10,
            'judul' => 'Latihan Contoh Program',
            'tipe_content' => 1,
            'prev_id' => 30,
            'next_id' => 32,
        ]);

        Content::create([ //32
            'course_id' => 2,
            'sub_course_id' => 11,
            'judul' => 'Permainan Kertas, Gunting, Batu',
            'tipe_content' => 1,
            'prev_id' => 31,
            'next_id' => 33,
        ]);

        Content::create([ //33
            'course_id' => 2,
            'sub_course_id' => 11,
            'judul' => 'Memberi Label pada Gambar berdasarkan Bagian Tubuh',
            'tipe_content' => 1,
            'prev_id' => 32,
            'next_id' => 34,
        ]);

        Content::create([ //34
            'course_id' => 2,
            'sub_course_id' => 11,
            'judul' => 'Mendeteksi Objek pada Gambar',
            'tipe_content' => 1,
            'prev_id' => 33,
            'next_id' => 35,
        ]);

        Content::create([ //35
            'course_id' => 2,
            'sub_course_id' => 12,
            'judul' => 'Membuat Gambar dengan Gaya Lukisan Terkenal',
            'tipe_content' => 1,
            'prev_id' => 34,
            'next_id' => 36,
        ]);

        Content::create([ //36
            'course_id' => 2,
            'sub_course_id' => 12,
            'judul' => 'Bagaimana Style Transfer Bekerja',
            'tipe_content' => 1,
            'prev_id' => 35,
            'next_id' => 37,
        ]);

        Content::create([ //37
            'course_id' => 2,
            'sub_course_id' => 13,
            'judul' => 'Quiz Time!',
            'tipe_content' => 2,
            'prev_id' => 36,
            'next_id' => 38,
        ]);

        Content::create([ //38
            'course_id' => 2,
            'sub_course_id' => 14,
            'judul' => 'Ide Proyek Menggunakan Machine Learning',
            'tipe_content' => 1,
            'prev_id' => 37,
            'next_id' => 39,
        ]);

        Content::create([ //39
            'course_id' => 2,
            'sub_course_id' => 14,
            'judul' => 'Resources Tambahan',
            'tipe_content' => 1,
            'prev_id' => 38,
            'next_id' => 40,
        ]);

        Content::create([ //40
            'course_id' => 2,
            'sub_course_id' => 14,
            'judul' => 'Congratulation!',
            'tipe_content' => 4,
            'prev_id' => 39,
            'next_id' => 0,
        ]);

        Content::create([ //41
            'course_id' => 3,
            'sub_course_id' => 15,
            'judul' => 'Pengenalan',
            'tipe_content' => 1,
            'prev_id' => 0,
            'next_id' => 42,
        ]);
        Content::create([ //42
            'course_id' => 3,
            'sub_course_id' => 15,
            'judul' => 'Block Speech Recognition Sederhana',
            'tipe_content' => 1,
            'prev_id' => 41,
            'next_id' => 43,
        ]);

        Content::create([ //43
            'course_id' => 3,
            'sub_course_id' => 15,
            'judul' => 'Contoh Program menggunakan Speech Recognition and Synthesis',
            'tipe_content' => 1,
            'prev_id' => 42,
            'next_id' => 44,
        ]);
        Content::create([ //44
            'course_id' => 3,
            'sub_course_id' => 16,
            'judul' => 'Bagaimana Program Komentar yang diucapkan dapat Bekerja',
            'tipe_content' => 1,
            'prev_id' => 43,
            'next_id' => 45,
        ]);
        Content::create([ //45
            'course_id' => 3,
            'sub_course_id' => 16,
            'judul' => 'Contoh Proyek',
            'tipe_content' => 1,
            'prev_id' => 44,
            'next_id' => 46,
        ]);
        Content::create([ //46
            'course_id' => 3,
            'sub_course_id' => 16,
            'judul' => 'Kalimat Lebih Rumit',
            'tipe_content' => 1,
            'prev_id' => 45,
            'next_id' => 47,
        ]);
        Content::create([ //47
            'course_id' => 3,
            'sub_course_id' => 16,
            'judul' => 'Demo Tanya Jawab',
            'tipe_content' => 1,
            'prev_id' => 46,
            'next_id' => 48,
        ]);
        Content::create([ //48
            'course_id' => 3,
            'sub_course_id' => 16,
            'judul' => 'Layanan Demo!',
            'tipe_content' => 1,
            'prev_id' => 47,
            'next_id' => 49,
        ]);
        Content::create([ //49
            'course_id' => 3,
            'sub_course_id' => 17,
            'judul' => 'Keunggulan Speech Recognition',
            'tipe_content' => 1,
            'prev_id' => 48,
            'next_id' => 50,
        ]);
        Content::create([ //50
            'course_id' => 3,
            'sub_course_id' => 17,
            'judul' => 'Bahaya dari Speech Recognition',
            'tipe_content' => 1,
            'prev_id' => 49,
            'next_id' => 51,
        ]);
        Content::create([ //51
            'course_id' => 3,
            'sub_course_id' => 17,
            'judul' => 'Bagaimana Speech Recognition Bekerja',
            'tipe_content' => 1,
            'prev_id' => 50,
            'next_id' => 52,
        ]);
        Content::create([ //52
            'course_id' => 3,
            'sub_course_id' => 18,
            'judul' => 'Fitur Lengkap Blok Speech Recognition',
            'tipe_content' => 1,
            'prev_id' => 51,
            'next_id' => 53,
        ]);
        Content::create([ //53
            'course_id' => 3,
            'sub_course_id' => 19,
            'judul' => 'Ide Projek',
            'tipe_content' => 1,
            'prev_id' => 52,
            'next_id' => 54,
        ]);
        Content::create([ //54
            'course_id' => 3,
            'sub_course_id' => 19,
            'judul' => 'Tambahan Sumber',
            'tipe_content' => 1,
            'prev_id' => 53,
            'next_id' => 55,
        ]);
        Content::create([ //55
            'course_id' => 3,
            'sub_course_id' => 19,
            'judul' => 'Belajar tentang Image Input!',
            'tipe_content' => 1,
            'prev_id' => 54,
            'next_id' => 56,
        ]);

        //    Quiz time
        // Content::create([ //56
        //     'course_id' => 3,
        //     'sub_course_id' => 20,
        //     'judul' => 'Quiz Time!',
        //     'tipe_content' => 2,
        //     'prev_id' => 55,
        //     'next_id' => 0,
        // ]);

        Content::create([ //57
            'id' => 57,
            'course_id' => 4,
            'sub_course_id' => 21,
            'judul' => 'Pengenalan',
            'tipe_content' => 1,
            'prev_id' => 0,
            'next_id' => 58,
        ]);
        Content::create([ //58
            'course_id' => 4,
            'sub_course_id' => 21,
            'judul' => 'API yang akan dibutuhkan',
            'tipe_content' => 1,
            'prev_id' => 57,
            'next_id' => 59,
        ]);

        Content::create([ //59
            'course_id' => 4,
            'sub_course_id' => 22,
            'judul' => 'Blok sederhana untuk pengenalan gambar',
            'tipe_content' => 1,
            'prev_id' => 58,
            'next_id' => 60,
        ]);
        Content::create([ //60
            'course_id' => 4,
            'sub_course_id' => 22,
            'judul' => 'Menampilkan hasil pengenalan gambar',
            'tipe_content' => 1,
            'prev_id' => 59,
            'next_id' => 61,
        ]);
        Content::create([ //61
            'course_id' => 4,
            'sub_course_id' => 22,
            'judul' => 'Contoh program yang menggabungkan pengenalan gambar dan suara',
            'tipe_content' => 1,
            'prev_id' => 60,
            'next_id' => 62,
        ]);
        Content::create([ //62
            'course_id' => 4,
            'sub_course_id' => 23,
            'judul' => 'Blok pengenalan gambar level lanjut',
            'tipe_content' => 1,
            'prev_id' => 61,
            'next_id' => 63,
        ]);
        Content::create([ //63
            'course_id' => 4,
            'sub_course_id' => 23,
            'judul' => 'Mendapatkan properti dari sebuah gambar',
            'tipe_content' => 1,
            'prev_id' => 62,
            'next_id' => 64,
        ]);
        Content::create([ //64
            'course_id' => 4,
            'sub_course_id' => 23,
            'judul' => 'Cara menyediakan API key',
            'tipe_content' => 1,
            'prev_id' => 63,
            'next_id' => 65,
        ]);
        Content::create([ //65
            'course_id' => 4,
            'sub_course_id' => 24,
            'judul' => 'Pengenalan Gambar cocoknya untuk apa ?',
            'tipe_content' => 1,
            'prev_id' => 64,
            'next_id' => 66,
        ]);
        Content::create([ //66
            'course_id' => 4,
            'sub_course_id' => 24,
            'judul' => 'Apa bahaya dari pengenalan gambar ?',
            'tipe_content' => 1,
            'prev_id' => 65,
            'next_id' => 67,
        ]);
        Content::create([ //67
            'course_id' => 4,
            'sub_course_id' => 25,
            'judul' => 'Bagaimana cara Computer Vision bekerja',
            'tipe_content' => 1,
            'prev_id' => 66,
            'next_id' => 68,
        ]);
        Content::create([ //68
            'course_id' => 4,
            'sub_course_id' => 25,
            'judul' => 'Apa itu Video Recognition Services',
            'tipe_content' => 1,
            'prev_id' => 67,
            'next_id' => 69,
        ]);
        Content::create([ //69
            'course_id' => 4,
            'sub_course_id' => 26,
            'judul' => 'Ide Proyek menggunakan pengenalan Gambar',
            'tipe_content' => 1,
            'prev_id' => 68,
            'next_id' => 70,
        ]);

        Content::create([ //70
            'course_id' => 4,
            'sub_course_id' => 26,
            'judul' => 'Sumber Tambahan',
            'tipe_content' => 1,
            'prev_id' => 69,
            'next_id' => 71,
        ]);
        Content::create([ //71
            'course_id' => 4,
            'sub_course_id' => 26,
            'judul' => 'Bagaimana caranya kamu bisa mendapatkan Blok code tersebut ?',
            'tipe_content' => 1,
            'prev_id' => 70,
            'next_id' => 72,
        ]);
        Content::create([ //72
            'course_id' => 4,
            'sub_course_id' => 26,
            'judul' => 'Mari belajar tentang Machine Learning',
            'tipe_content' => 1,
            'prev_id' => 71,
            'next_id' => 73,
        ]);
        // Content::create([ //73
        //     'course_id' => 4,
        //     'sub_course_id' => 27,
        //     'judul' => 'Quiz Time',
        //     'tipe_content' => 2,
        //     'prev_id' => 72,
        //     'next_id' => 0,
        // ]);
        Content::create([ //74
            'id' => 74,
            'course_id' => 5,
            'sub_course_id' => 28,
            'judul' => 'Browser Compability',
            'tipe_content' => 1,
            'prev_id' => 0,
            'next_id' => 75,
        ]);

        Content::create([ //75
            'course_id' => 5,
            'sub_course_id' => 28,
            'judul' => 'Pengenalan',
            'tipe_content' => 1,
            'prev_id' => 74,
            'next_id' => 76,
        ]);
        Content::create([ //76
            'course_id' => 5,
            'sub_course_id' => 28,
            'judul' => 'Perhitungan aritmatika dengan kata dan kalimat',
            'tipe_content' => 1,
            'prev_id' => 75,
            'next_id' => 77,
        ]);
        Content::create([ //77
            'course_id' => 5,
            'sub_course_id' => 29,
            'judul' => 'Mengubah kata menjadi angka',
            'tipe_content' => 1,
            'prev_id' => 76,
            'next_id' => 78,
        ]);
        Content::create([ //78
            'course_id' => 5,
            'sub_course_id' => 29,
            'judul' => 'Menemukan kata terdekat ke dalam list feature kata',
            'tipe_content' => 1,
            'prev_id' => 77,
            'next_id' => 79,
        ]);
        Content::create([ //79
            'course_id' => 5,
            'sub_course_id' => 29,
            // finding the word half way between two other words
            'judul' => 'Mencari kata yang berada di tengah-tengah dua kata lainnya',
            'tipe_content' => 1,
            'prev_id' => 78,
            'next_id' => 80,
        ]);
        Content::create([ //80
            'course_id' => 5,
            'sub_course_id' => 29,
            // Using word embeddings to solve word analogy problems
            'judul' => 'Menggunakan word embeddings untuk menyelesaikan masalah analogi kata',
            'tipe_content' => 1,
            'prev_id' => 79,
            'next_id' => 81,
        ]);
        Content::create([ //81
            'course_id' => 5,
            'sub_course_id' => 29,
            // Finding all the 'closest' words
            'judul' => 'Mencari semua kata yang terdekat',
            'tipe_content' => 1,
            'prev_id' => 80,
            'next_id' => 82,
        ]);
        Content::create([ //82
            'course_id' => 5,
            'sub_course_id' => 29,
            // Finding how close some features are to a list of other features
            'judul' => 'Mencari seberapa dekat beberapa fitur ke dalam list fitur lainnya',
            'tipe_content' => 1,
            'prev_id' => 81,
            'next_id' => 83,
        ]);
        Content::create([ //83
            'course_id' => 5,
            'sub_course_id' => 29,
            // Sentence embeddings
            'judul' => 'Kalimat embeddings',
            'tipe_content' => 1,
            'prev_id' => 82,
            'next_id' => 84,
        ]);
        Content::create([ //84
            'course_id' => 5,
            'sub_course_id' => 30,
            // AI-aided search in the Snap! manual and the AI guide
            'judul' => 'Pencarian AI dalam manual Snap! dan panduan AI',
            'tipe_content' => 1,
            'prev_id' => 83,
            'next_id' => 85,
        ]);
        Content::create([ //85
            'course_id' => 5,
            'sub_course_id' => 30,
            // Drawing word embeddings
            'judul' => 'Menggambar word embeddings',
            'tipe_content' => 1,
            'prev_id' => 84,
            'next_id' => 86,
        ]);
        Content::create([ //86
            'course_id' => 5,
            'sub_course_id' => 30,
            // Mapping 300 dimensional points to two-dimensional points
            'judul' => 'Memetakan titik 300 dimensi ke titik dua dimensi',
            'tipe_content' => 1,
            'prev_id' => 85,
            'next_id' => 87,
        ]);
        Content::create([ //87
            'course_id' => 5,
            'sub_course_id' => 30,
            // Generating Projector Files to visualize embeddings
            'judul' => 'Menghasilkan File Projector untuk memvisualisasikan embeddings',
            'tipe_content' => 1,
            'prev_id' => 86,
            'next_id' => 88,
        ]);

        Content::create([ //88
            'course_id' => 5,
            'sub_course_id' => 30,
            // Word embeddings can do translations
            'judul' => 'Word embeddings dapat melakukan terjemahan',
            'tipe_content' => 1,
            'prev_id' => 87,
            'next_id' => 89,
        ]);
        Content::create([ //89
            'course_id' => 5,
            'sub_course_id' => 30,
            // A 'Guess My Word' game using word embeddings
            'judul' => 'Permainan "Tebak Kata Saya" menggunakan word embeddings',
            'tipe_content' => 1,
            'prev_id' => 88,
            'next_id' => 90,
        ]);
        Content::create([ //90
            'course_id' => 5,
            'sub_course_id' => 30,
            // Question answering
            'judul' => 'Question Answering',
            'tipe_content' => 1,
            'prev_id' => 89,
            'next_id' => 91,
        ]);
        Content::create([ //91
            'course_id' => 5,
            'sub_course_id' => 31,
            // Getting responses from GPT-3, Jurassic 1, or Cohere
            'judul' => 'Mendapatkan respon dari GPT-3, Jurassic 1, atau Cohere',
            'tipe_content' => 1,
            'prev_id' => 90,
            'next_id' => 92,
        ]);
        Content::create([ //92
            'course_id' => 5,
            'sub_course_id' => 31,
            // Having a conversation with GPT-3, Jurassic 1, or Cohere
            'judul' => 'Berbicara dengan GPT-3, Jurassic 1, atau Cohere',
            'tipe_content' => 1,
            'prev_id' => 91,
            'next_id' => 93,
        ]);
        Content::create([ //93
            'course_id' => 5,
            'sub_course_id' => 31,
            // Generating debates
            'judul' => 'Menghasilkan debat',
            'tipe_content' => 1,
            'prev_id' => 92,
            'next_id' => 94,
        ]);

        Content::create([ //94
            'course_id' => 5,
            'sub_course_id' => 31,
            // Generating turtle commands
            'judul' => 'Menghasilkan perintah turtle',
            'tipe_content' => 1,
            'prev_id' => 93,
            'next_id' => 95,
        ]);
        Content::create([ //95
            'course_id' => 5,
            'sub_course_id' => 31,
            // Using words to generate costumes using DALLE-2
            'judul' => 'Menggunakan kata untuk menghasilkan kostum menggunakan DALLE-2',
            'tipe_content' => 1,
            'prev_id' => 94,
            'next_id' => 96,
        ]);
        Content::create([ //96
            'course_id' => 5,
            'sub_course_id' => 31,
            // Using Stable Diffusion to generate a costume
            'judul' => 'Menggunakan Stable Diffusion untuk menghasilkan kostum',
            'tipe_content' => 1,
            'prev_id' => 95,
            'next_id' => 97,
        ]);
        Content::create([ //97
            'course_id' => 5,
            'sub_course_id' => 31,
            // A generic text-to-image block
            'judul' => 'Blok teks ke gambar generik',
            'tipe_content' => 1,
            'prev_id' => 96,
            'next_id' => 98,
        ]);
        Content::create([ //98
            'course_id' => 5,
            'sub_course_id' => 31,
            // Using DALL-E-2 to create variants of a costume
            'judul' => 'Menggunakan DALL-E-2 untuk membuat varian kostum',
            'tipe_content' => 1,
            'prev_id' => 97,
            'next_id' => 99,
        ]);
        Content::create([ //99
            'course_id' => 5,
            'sub_course_id' => 31,
            // Using DALL-E-2 to edit a costume
            'judul' => 'Menggunakan DALL-E-2 untuk mengedit kostum',
            'tipe_content' => 1,
            'prev_id' => 98,
            'next_id' => 100,
        ]);
        Content::create([ //100
            'course_id' => 5,
            'sub_course_id' => 31,
            // Using language models on Hugging Face
            'judul' => 'Menggunakan model bahasa di Hugging Face',
            'tipe_content' => 1,
            'prev_id' => 99,
            'next_id' => 101,
        ]);
        Content::create([ //101
            'course_id' => 5,
            'sub_course_id' => 31,
            // Generating clues for the Codenames board game
            'judul' => 'Menghasilkan petunjuk untuk permainan papan Codenames',
            'tipe_content' => 1,
            'prev_id' => 100,
            'next_id' => 102,
        ]);
        Content::create([ //102
            'course_id' => 5,
            'sub_course_id' => 32,
            // Benefits and risks using word embeddings
            'judul' => 'Manfaat dan risiko menggunakan word embeddings',
            'tipe_content' => 1,
            'prev_id' => 101,
            'next_id' => 103,
        ]);
        Content::create([ //103
            'course_id' => 5,
            'sub_course_id' => 33,
            // How do word embeddings work?
            'judul' => 'Bagaimana word embeddings bekerja?',
            'tipe_content' => 1,
            'prev_id' => 102,
            'next_id' => 104,
        ]);
        Content::create([ //104
            'course_id' => 5,
            'sub_course_id' => 34,
            // A sample project using word embeddings for translation
            'judul' => 'Proyek contoh menggunakan word embeddings untuk terjemahan',
            'tipe_content' => 1,
            'prev_id' => 103,
            'next_id' => 105,
        ]);
        Content::create([ //105
            'course_id' => 5,
            'sub_course_id' => 34,
            // How does translation using word embeddings work?
            'judul' => 'Bagaimana terjemahan menggunakan word embeddings bekerja?',
            'tipe_content' => 1,
            'prev_id' => 104,
            'next_id' => 106,
        ]);
        Content::create([ //106
            'course_id' => 5,
            'sub_course_id' => 34,
            // Image embeddings are possible as well
            'judul' => 'Embedding gambar juga memungkinkan',
            'tipe_content' => 1,
            'prev_id' => 105,
            'next_id' => 107,
        ]);
        Content::create([ //107
            'course_id' => 5,
            'sub_course_id' => 34,
            // Possible project ideas for Natural Language Processing
            'judul' => 'Ide proyek yang mungkin untuk Pemrosesan Bahasa Alami',
            'tipe_content' => 1,
            'prev_id' => 106,
            'next_id' => 108,
        ]);
        Content::create([ //108
            'course_id' => 5,
            'sub_course_id' => 34,
            // Future directions for this chapter
            'judul' => 'Arah masa depan untuk materi ini',
            'tipe_content' => 1,
            'prev_id' => 107,
            'next_id' => 109,
        ]);
        Content::create([ //109
            'course_id' => 5,
            'sub_course_id' => 34,
            // Additional resources
            'judul' => 'Sumber tambahan',
            'tipe_content' => 1,
            'prev_id' => 108,
            'next_id' => 110,
        ]);
        Content::create([ //110
            'course_id' => 5,
            'sub_course_id' => 34,
            // Where to get these blocks to use in your projects
            'judul' => 'Dimana mendapatkan blok ini untuk digunakan dalam proyek Anda',
            'tipe_content' => 1,
            'prev_id' => 109,
            'next_id' => 111,
        ]);
        Content::create([ //111
            'course_id' => 5,
            'sub_course_id' => 34,
            // Learn about making and training neural nets
            'judul' => 'Pelajari tentang membuat dan melatih jaringan saraf',
            'tipe_content' => 1,
            'prev_id' => 110,
            'next_id' => 112,
        ]);
        // Content::create([ //112
        //     'course_id' => 5,
        //     'sub_course_id' => 35,
        //     'judul' => 'Quiz',
        //     'tipe_content' => 2,
        //     'prev_id' => 111,
        //     'next_id' => 0,
        // ]);





        // END OF CONTENT CHAPTER 4 //

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

        // MATERIAL CHAPTER 4 //

        Material::create([
            'content_id' => 19,
            'isi' => '<p>Sebelum mulai pembelajaran, yuk simak video di bawah ini terlebih dahulu!</p>
            <br>
            <center> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_rdINNHLYaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>
            <br>
            <p>
                Dari video di atas bisa disimpulkan bahwa Machine Learning adalah salah satu cara 
                yang bisa digunakan untuk menyelesaikan suatu permasalahan dalam banyak bidang dan pastinya meningkatkan kualitas kehidupan.
            </p><br>
            <p>
                Eits, tapi Kamu udah tahu apa itu Machine Learning? Tapi sebelumnya, lihat gambar di bawah ini dulu yuk!
            </p><br>
            <center>
                <img src="/assets/img/googlephoto.png" width="70%">
            </center><br>
            <p> Kamu pasti sangat familiar dengan gambar di atas bukan? </p><br>
            <p>
                Yap! Betul sekali, itu adalah Google Assistant dan penelusuran Google dengan gambar yang sering dtemui pada smartphone kamu!
            </p><br>
            <p> Sekarang, apakah Kamu pernah penasaran bagaimana kedua hal itu bekerja?  </p><br>
            <p>
                Google bekerja memanfaatkan metode Machine Learning. Komputer sebagai mesin akan belajar untuk mengenali pola dari lingkungan. Poses belajar dilakukan secara mandiri. Programer tidak akan menuliskan program yang panjang untuk agar komputer bisa melakukan pekerjaannya. Sehingga, kita tidak perlu menuliskan kode program yang panjang untuk mendapatkan hasil dari beberapa contoh tersebut. 
            </p><br>
            <p> Hmm, menarik bukan? Di bawah ini kamu bisa menonton penjelasan singkat tentang Machine Learning </p><br>
            <center>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-DEL6SVRPw0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center><br>
            <p>Teknologi Machine Learning (ML) adalah mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya. ML akan mempelajari data yang ada dan data yang ia peroleh sehingga bisa melakukan tugas tertentu. Tugas yang dapat dilakukan oleh ML pun sangat beragam, tergantung dari apa yang ia pelajari.</p><br>
            <p> Pada saat komputer belajar, Machine Learning harus mengeneralisasi perilaku dari data yang ada untuk menghasilkan insight yang berguna dalam suatu kasus. Pertanyaannya, bagaimana komputer melakukan hal tersebut?</p><br>
            <p>Yap! Dengan adanya Data Training dan Data Testing. Kedua hal itu sangat penting dalam ML, karena data merupakan kebutuhan utama yang dapat memproses suatu program ML sesuai dengan rancangan nya. Apa itu?</p><br>
            
            <section class="py-4">
                <div class="row">
                    <br><br>
                    <div class="col-lg-5">
                        <img src="/assets/img/aset1.png" width="40%">
                    </div>
                    <div class="col-lg-7">
                        <br>
                        <p>
                            <b>Training set</b> adalah bagian dataset yang dilatih untuk membuat prediksi atau menjalankan fungsi dari algoritma ML sesuai tujuannya. Training dilakukan untuk memberi tahu mesin akan dari apa yang sudah mereka pelajari.
                        </p><br>
                        <p>
                            <b>Test set</b> Test set adalah bagian dataset yang dtes untuk melihat keakuratan dengan menggunakan "confidence scores" yaitu angka antara 0 dan 1 yang menunjukkan kemungkinan keluaran model ML yang benar.
                        </p>
                    /div>
                </div>
            </section> ',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 20,
            'isi' => '<center> <img src="/assets/img/aset2.png" width="30%"> </center>
            <br>
            <p>
                Pada chapter ini, kamu bisa bereksperimen dengan Machine Learning menggunakan Snap!
                Kamu akan belajar jenis-jenis input yang dapat dengan mudah dibedakan oleh mesin dan mana yang membingungkan.
            </p><br>
            <p style="font-size: 18px">
                Pada Chapter ini juga, label untuk input sudah disediakan. Mesin akan mempelajari label-label tersebut melalui proses training.
            </p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 21,
            'isi' => '<p> Seperti yang sudah dibahas sebelumnya, Training set adalah bagian dataset yang dilatih untuk membuat prediksi atau menjalankan fungsi dari algoritma ML sesuai tujuannya. Training dilakukan untuk memberi tahu mesin akan dari apa yang sudah mereka pelajari.</p><br>
            <p>
                Di sini, disediakan halaman Training dengan button “Save Your Training” seperti di bawah ini, yang bisa kamu pakai untuk menyimpan file training kamu!
            </p><br>
            <center> 
                <img src="/assets/img/aset/aset3.png" width="50%">
            </center>
            <br><br>
            <p> Untuk load training yang telah disimpan, kamu dapat melakukannya dengan 2 cara: </p>
            <p><b> 1.	Load file dari sistem penyimpanan lokal </b></p>
            <p><b> 2.	Load file dari web dengan memasukkan URL untuk mengaksesnya </b></p>
            <br>
            <p>
                Ayo coba dengan program di bawah ini!
            </p><br>
            <iframe src="https://ecraft2learn.github.io/ai/snap/snap.html?project=load%20training&editMode" title="eCraft2Learn" width=”560” height=”132”></iframe><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=load%20training&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 22,
            'isi' => '<p>Seperti judulnya, pada bagian ini kamu akan bereksperimen blok untuk training gambar dengan 
            menggunakan kamera. Ada beberapa blok di bawah ini yang bisa kamu coba untuk memahami konsep train gambar. </p>
            <p>Ayo lakukan eksperimen!</p><br>
            <iframe src="https://ecraft2learn.github.io/ai/snap/snap.html?project=camera%20train" title="eCraft2Learn" width=”560” height=”132”></iframe><p class="my-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=camera%20train" class="font-bold text-primary" target="_blank">klik disini!</a></p>
            <br>
            <center><img src="/assets/img/blocks/blok-1.png" alt="ecraft2learn" width="30%"></center>
            <p>Blok di atas adalah untuk membuka tab di mana kamu bisa train sistem dengan memberi label menggunakan kameramu. Pada argumen pertama, kamu bisa lihat list dari label-label yang sudah ditentukan. Masing-masing label mempunyai bucket untuk menampung data gambar.
            </p>
            <p>Pada contoh berikut ini, terdapat dua label, yaitu “leaning to the left” dan “leaning to the right”. Kamu bisa mengedit list untuk mengenali ekspresi, wajah orang, atau objek yang berbeda di depan kamera, dan masih banyak lagi. 
            </p>
            <p>Blok tersebut hanya membutuhkan argument pertama yang memberi tahu bucket dari suatu label. Hal itu memiliki tiga argument opsional tambahan, yaitu:
            </p><br>
            <center> 
                <img src="/assets/img/aset/aset4.png" alt="ecraft2learn" width="80%" class="img-fluid rounded">
            </center>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 23,
            'isi' => '<p> Sprite adalah gambar atau objek yang bisa diprogram. Pada Snap! sprite dapat di costumes sesuai keinginan kita, baik berbentuk gambar ataupun foto. Berikut adalah tampilannya:
            </p>
            <center> 
                <img src="/assets/img/aset/aset5.png" alt="ecraft2learn" width="25%" class="img-fluid rounded">
            </center><br>

            <p> Di bawah ini, kamu bisa mencoba blok untuk train sprite yang telah kamu buat </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=cats%20and%20dogs#using-costumes" target=”_blank”>
                    <img src="/assets/img/blocks/blok3.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>
            <p>Dengan program tersebut, kamu dapat bereksperimen dengan beberapa blok, yaitu: </p>

            <p>
                Blok <img src="/assets/img/blocks/blok-2.png" alt="ecraft2learn" width="30%">
                untuk mengirimkan semua sprite kamu ke tab training
            </p>
            <p>
                Blok <img src="/assets/img/blocks/blok-3.png" alt="ecraft2learn" width="30%">
                untuk train gambar-gambar kamu
            </p>
            <p>
                Blok <img src="/assets/img/blocks/blok-4.png" alt="ecraft2learn" width="30%">
                untuk mendapatkan nilai confidences dari sprite 
            </p><br>

            <hr>
            
            <p class="text-orange">
                <b><i>Note:</i></b>
            </p>
            <p>
                Blok <img src="/assets/img/blocks/blok-3.png" alt="ecraft2learn" width="30%">
                adalah versi sederhana dari blok <img src="/assets/img/blocks/blok-1.png" alt="ecraft2learn" width="30%">
                untuk menghindari penggunaan kamera saat training data.
            </p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 24,
            'isi' => '<p>Di sini, kamu dapat mencoba program untuk mengenali gambar tanpa training.
            Gimana caranya? Yaitu dengan menggunakan model pembelajaran mesin terlatih bernama MobileNet. </p>
            <center>
                <a href="https://arxiv.org/abs/1704.04861">
                    <button type="button" class="btn btn-primary btn-lg">MobileNet</button>
                </a>
            </center><br>
            <p>
                Model ini berjalan di browser kamu dan tidak menghubungi layanan cloud apapun. Meskipun jika memilih di antara 1000 label, itu tidak akan sebaik layanan cloud. MobileNet berguna untuk masalah dalam mendaftar untuk kunci API, atau akses Internet terbatas atau hilang, atau menyangkut privasi. Namun, itu bergantung pada perangkat Kamu yang memiliki GPU untuk berjalan pada kecepatan yang wajar.
            </p>

            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=mobilenet#using-costumes" target=”_blank”>
                    <img src="/assets/img/blocks/blok4.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>

            <hr>
            
            <p class="text-orange">
                <b><i>Note:</i></b>
            </p>
            <p> Program di atas akan lambat saat memuat, tetapi akan berjalan dengan cepat setelahnya. </p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 25,
            'isi' => '<p> Untuk latihan, coba kamu train data dengan program di bawah ini untuk melakukan training data ke arah mana jari Kamu menunjuk!
            </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=follow%20finger" target=”_blank”>
                    <img src="/assets/img/blocks/blok6.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>
            <p> Ada banyak cara untuk meningkatkan program ini. Salah satunya dalah program selanjutnya di bawah ini! </p>
            <p> Tambahkan label ketiga atau keempat dan gunakan label itu untuk mengontrol turtle. </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=follow%20lean" target=”_blank”>
                    <img src="/assets/img/blocks/blok5.png" alt="ecraft2learn" width="80%" class="img-fluid rounded">
                </a>
            </center><br>

            <p> Dengan program tersebut, kamu dapat bereksperimen dengan beberapa blok, yaitu: </p>

            <p>
                Blok <img src="/assets/img/blocks/blok-2.png" alt="ecraft2learn" width="30%">
                untuk mengirimkan semua sprite kamu ke tab training
            </p>
            <p>
                Blok <img src="/assets/img/blocks/blok-3.png" alt="ecraft2learn" width="30%">
                untuk train gambar-gambar kamu
            </p>
            <p>
                Blok <img src="/assets/img/blocks/blok-4.png" alt="ecraft2learn" width="30%">
                untuk mendapatkan nilai confidences dari sprite 
            </p><br>

            <hr>
            
            <p class="text-orange">
                <b><i>Note:</i></b>
            </p>
            <p>
                Blok <img src="/assets/img/blocks/blok-3.png" alt="ecraft2learn" width="30%">
                adalah versi sederhana dari blok <img src="/assets/img/blocks/blok-1.png" alt="ecraft2learn" width="30%">
                untuk menghindari penggunaan kamera saat training data.
            </p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 26,
            'isi' => '<p>
            Kamu tahu tidak? Komputer itu dapat dilatih untuk membedakan suara yang berbeda termasuk juga ucapan loh! Bagaimana caranya?
            </p>
            <p>
                Nah, di sini Kamu dapat membuat program yang merespons suara apa pun. Kamu juga dapat melatihnya untuk mengenali beberapa kata atau frasa berbeda yang berfungsi secara lokal di komputer Kamu tanpa mengirim audio apa pun ke server cloud.
            </p>
            <p> Ayo coba program di bawah ini! </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=train%20audio" target=”_blank”>
                    <img src="/assets/img/blocks/blok7.png" alt="ecraft2learn" width="70%" class="img-fluid rounded">
                </a>
            </center><br>
            <p>
                Blok <img src="/assets/img/blocks/blok-5.png" alt="ecraft2learn" width="30%">
                memiliki opsi untuk menggunakan Pre-trained model dari 20 kata pada perangkat Kamu!
            </p>
            <p>
            Ia mampu mengenali nol, satu, dua, tiga, empat, lima, enam, tujuh, delapan, sembilan, naik, bawah, kiri, kanan, pergi, berhenti, ya, dan tidak.
            </p>
            <p> Hal itu bergantung pada speech command recognizer yang dibuat oleh Google. </p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 27,
            'isi' => '<p">
                Contoh di sini menggunakan training audio untuk memberi tahu sprite agar bisa bergerak "forward", "right", atau "stop".
            </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=train%20and%20speak%20commands" target=”_blank”>
                    <img src="/assets/img/blocks/blok8.png" alt="ecraft2learn" width="70%" class="img-fluid rounded">
                </a>
            </center><br>

            <hr>
            
            <p class="text-orange">
                <b><i>Note:</i></b>
            </p>
            <p>
                Kamu dapat membuat suara atau berbicara dalam bahasa lain dan program akan bekerja dengan baik.
            </p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 28,
            'isi' => '<p>
            Apakah Kamu tahu apa itu Google Teachable Machine?
            </p>
            <center><p><i>Klik gambar di bawah ini untuk melihatnya!</i></p></center>
            <center> 
                <a href="https://teachablemachine.withgoogle.com/" target=”_blank”>
                    <img src="/assets/img/aset/aset6.png" alt="teachablemachine" width="70%" class="img-fluid rounded">
                </a>
            </center><br><br>
            
            <p>
                Google mengembangkan Teachable Machine untuk mengenalkan proses training untuk kategori foto, suara, dan pose. Setelah melakukan training kamu bisa export model tersebut ke server mereka atau download filenya untuk disimpan di web server kamu.
            </p>
            <p>
                Di bawah ini kamu bisa mecoba blok menggunakan model dari Teachable Machine! Kamu bisa menghentikan audio dengan menggunakan Blok <img src="assets/img/blocks/blok-6.png" alt="ecraft2learn" width="45%">
            </p><br>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=teachable%20machine%20exercise#teachable-machine&editMode" target=”_blank”>
                    <img src="/assets/img/blocks/blok9.png" alt="ecraft2learn" width="70%" class="img-fluid rounded">
                </a>
            </center><br>

            <hr>
            
            <p class="text-orange">
                <b><i>Note:</i></b>
            </p>
            <p>
                Blok <img src="/assets/img/blocks/blok-8.png" alt="ecraft2learn" width="35%">
                menunjukkan probabilitas bahwa kostum itu ada di setiap kategori yang dilatihnya.
            </p>
            <p>
                Sedangkan berbeda dengan blok <img src="/assets/img/blocks/blok-7.png" alt="ecraft2learn" width="60%">
                yang menjalankan input setiap kali sebuah kata dikenali.
            </p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 29,
            'isi' => '<div class="col-lg-5">
            <center>
                <img src="/assets/img/aset/aset7.png" alt="ecraft2learn" width="20%" class="img-fluid rounded">
            </center>
            </div>
            <div class="col-lg-6">
            <br>
                <p>
                    Kamu tahu tidak?
                    Google melatih model deep learning pada lebih dari 64.000 gambar orang loh!
                </p>
                <p>
                    Apa itu Deep learning? Deep learning adalah bagian dari kecerdasan buatan dan machine learning, yang merupakan pengembangan dari neural network multiple layer untuk memberikan ketepatan tugas seperti deteksi objek, pengenalan suara, terjemahan bahasa dan lain – lain.
                </p>
                <p>Keren kan?</p>
                <p>Gimana sih caranya?</p>
            </div>

            <br>
            <p>
            Pertama, model yang di-train terlebih dahulu mengidentifikasi lokasi bagian tubuh dalam gambar baru. Lalu kemudian posisi dari bagian-bagian tersebut diperhalus dengan mempertimbangkan poin-poin penting yang berdekatan (misalnya: siku kiri hanya terhubung dengan pergelangan tangan kiri dan bahu kiri).
            </p>
            <p>
            Jika gambar lebih dari satu orang, model perlu memisahkan poin-poin kunci untuk orang yang berbeda.
                Algoritma dimulai dengan titik kunci yang paling dipercaya daripada titik awal yang disukai seperti hidung. Kemudian mempertimbangkan lokasi bagian tubuh yang terhubung ke titik kunci, kemudian yang terhubung ke bagian tersebut, dan seterusnya. Selain itu, jika segmentasi juga diperlukan, setiap piksel diberi kode untuk setiap bagian tubuh yang dimilikinya.
            </p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 30,
            'isi' => '<center>
            <img src="/assets/img/google.png" alt="google creative" width="35%" class="img-fluid rounded">
            </center><br>
            <p>
            Google Creative Lab merilis perangkat lunak berbasis browser yang disebut Posenet untuk estimasi pose manusia secara real-time. Perangkat lunak ini dapat menentukan lokasi 17 bagian wajah dan tubuh yang berbeda: hidung, mata, telinga, bahu, siku, pergelangan tangan, pinggul, lutut, dan pergelangan kaki.
            </p>
            <center> 
                <img src="https://1.bp.blogspot.com/-yRn-UAqO8Mc/XcCkQ6nKOrI/AAAAAAAAAww/H4FvoPHdg-oQJJ_-03qK5lsXXGEFRJoWwCLcBGAsYHQ/s320/p1.gif" alt="ecraft2learn" width="25%" class="img-fluid rounded">
            </center><br>
            <p>
            Posenet dibuat menggunakan deep machine learning dan memanfaatkan Tensorflow.js. <br>
            <b>Apa itu Tensorflow?</b> Tensorflow adalah sebuah framework machine learning yang dapat membantumu membuat neural network (jaringan artifisial yang mirip otak manusia) dalam skala besar. 
            </p><br>

            <p>
            Nah sedangkan dalam Posenet ini, yang sangat mengesankan adalah ia bekerja di browser tanpa perangkat lunak atau perangkat keras khusus (selain webcam).
            </p><br>


            <p>
                Blok <img src="/assets/img/blocks/blok-28.png" alt="ecraft2learn" width="12%">
                menginput daftar pose untuk setiap orang di depan kamera. Sistem 
                dapat dikonfigurasi pada tab "pose" untuk mengoptimalkan adegan jika lebih dari satu orang. Trade-off antara kecepatan dan akurasi juga dapat dilakukan.
            </p><br>


            <p>
                Di bawah ini, Kambu bisa bereksperimen dengan program yang bisa mendeteksi lokasi dari 17 atau 33 bagian tubuh yang berbeda. <b>Yuk coba!</b>
            </p>

            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=pose" target=”_blank”>
                    <img src="/assets/img/blocks/blok33.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>

            <p>
                Blok <img src="/assets/img/blocks/blok-29.png" alt="ecraft2learn" width="20%">
                adalah untuk menunjukkan daftar dari pose itu sendiri. Setiap pose adalah daftar daftar kunci dan nilai.<br> 
                Terdapat beberapa versi pada program di atas, di mana versi PoseNet berfungsi untuk banyak orang, sedangkan dua lainnya paling cocok untuk satu pose saja.
            </p><br>

            <p>
                Sedangkan di bawah ini, Kamu bisa mencoba program untuk mendeteksi lokasi dari 21 bagian tangan yang berbeda! 
                <br>Mengapa bisa? well, Google telah mengembangkan model yang menunjukkan 21 lokasi pada bagian tangan juga loh! Yuk coba!
            </p>

            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=hand%20pose" target=”_blank”>
                    <img src="/assets/img/blocks/blok34.png" alt="ecraft2learn" width="45%" class="img-fluid rounded">
                </a>
            </center><br><p>
                Blok <img src="/assets/img/blocks/blok-30.png" alt="ecraft2learn" width="25%">
                digunakan untuk menunjukkan lokasi dan skor kepercayaan dari bagian-bagian tersebut.
            </p><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 31,
            'isi' => '<center> 
            <img src="/assets/img/aset/aset8.png" alt="ecraft2learn" width="25%" class="img-fluid rounded">
            </center><br>
            <p>Bagaimana permainan Simon Says ini bekerja?</p>
            <p>
            Jadi, ia memilih apakah akan mengawali pernyataannya dengan "Simon Says" dan memilih dua bagian tubuh untuk disatukan oleh pemain. Deteksi pose digunakan untuk melihat apakah Kamu membuat pose yang sesuai dengan apa yang dikatakan.
            </p>
            <p>
            Untuk memperjelasnya, ayo Kamu coba program di bawah ini!
            </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=simon%20says#teachable-machine" target=”_blank”>
                    <img src="/assets/img/aset/aset9.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>
            <p>
            Permainan ini bisa kamu tingkatkan lagi dengan banyak cara loh! 
            <b>Be Creative!</b>
            </p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 32,
            'isi' => '<p>
            Dengan Machine Learning, Kamu bisa membuat permainan gunting kertas batu loh!
            <br>Cara mainnya adalah dengan meletakkan tangan Kamu ke salah satu dari tiga konfigurasi.
            <br>Ayo Main!
            </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=rock%20paper%20scissors&noRun" target=”_blank”>
                    <img src="/assets/img/aset/aset10.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>

            <p>
                Permainan ini menggunakan blok <img src="/assets/img/blocks/blok-9.png" alt="ecraft2learn" width="30%">
                sebanyak 4 kali (kertas, gunting, batu, dan “other”).
            </p>

            <p>
                Setelah training selesai, permainan dimulai dan program memilih gerakan acak dan membandingkannya dengan gerakan Kamu di depan kamera.
            </p>

            <p>
                Jangan lupa! Permainan ini dapat ditingkatkan lagi dengan banyak cara loh! 
                <b>Be Creative!</b>
            </p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 33,
            'isi' => '<p>
            Pada bagian ini, program menggunakan BodyPix. 
            <br>Apakan Kamu tahu apa itu Bodypix?
            </p>
            <p>
                BodyPix adalah model segmentasi deep learning yang mengklasifikasikan setiap piksel dalam foto manusia. Contohnya, apakah bagian tertentu termasuk bagian dari tubuh? Jika ya, bagian apakah itu? Lalu program akan mengetahui bagian tersebut adalah tangan, lengan, kaki, atau yang lainnya.
            </p>
            <p>
                Sekarang, coba perhatikan gambar berikut:
            </p>
            <center> 
                <img src="/assets/img/aset/aset11.png" alt="ecraft2learn" width="40%" class="img-fluid rounded">
            </center><br>
            <p>
            Gambar di atas adalah contoh dimana BodyPix memberikan warna berbeda pada masing-masing bagian tubuh.

            <br>Terdapat dua blok segmentasi, yaitu:

            </p><br>
            
            <p>
                <center><img src="/assets/img/blocks/blok-10.png" alt="ecraft2learn" width="35%"></center>
                Blok di atas paling cocok untuk menganalisis gambar satu orang, dan
            </p>
            <p>
                <center><img src="/assets/img/blocks/blok-11.png" alt="ecraft2learn" width="35%"></center>
                Blok di atas paling cocok untuk menganalisis gambar banyak orang
            </p>
            <p>
                Kedua blok tersebut dapat digunakan dengan gambar dari sejumlah orang tetapi masing-masing lebih cepat dan lebih informatif bila digunakan sesuai indikasinya.
            </p>

            <center>
                <button type="button" data-toggle="collapse" data-target="#detailMateri15C4" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary btn-lg">Lihat Argumen Disini!</button>
            </center>

            <div class="collapse" id="detailMateri15C4">
                <br>
                <div class="card card-body">
                    <p>
                        • Buat Kostum Segmentasi (Create Segmentation Costume) jika benar, menunjukkan kostum baru, di mana setiap piksel adalah salah satu dari 24 warna 
                    </p>
                    <p>
                        • Pemetaan Warna (Color Mappings)disediakan daftar dari 24 warna mana yang digunakan untuk setiap bagian tubuh. Setiap warna adalah daftar empat angka antara 0 dan 255 yang menentukan jumlah warna merah, hijau, biru, dan buram. 
                    </p>
                    <p>
                        • Buat Kode Piksel (Create Pixel Codes) jika benar, menunjukkan daftar angka dari 0 hingga 23 yang sesuai dengan bagian tubuh berbeda untuk setiap piksel dalam gambar. 
                    </p>
                    <p>
                        • Buat Pose (Create Poses) jika benar, menunjukkan pose tubuh. 
                    </p>
                    <p>
                        • Buat Bitmask Orang (Create Person Bitmasks) jika benar dan menggunakan blok multi-person segmentations and poses of costume... kemudian daftar nol dan satu dilaporkan. Satu menunjukkan bahwa piksel adalah bagian dari seseorang dan nol sebaliknya. 
                    </p>
                    <p>
                        • Config jika yang tersedia adalah daftar kunci dan nilai bergantian seperti yang dijelaskan di bawah ini! 
                    </p>
                    <center>
                    <a href="https://github.com/tensorflow/tfjs-models/tree/master/body-pix#user-content-params-in-segmentpersonparts">
                        <button type="button" class="btn btn-primary btn-md">Segmentasi <b>Satu</b> Orang</button>
                    </a>
                    <a href="https://github.com/tensorflow/tfjs-models/tree/master/body-pix#user-content-params-in-segmentmultipersonparts">
                        <button type="button" class="btn btn-primary btn-md">Segmentasi <b>Banyak</b> Orang</button>
                    </a>
                    </center>
                    
                </div>
            </div>

            <br>
            <p>
                Ayo jelajahi contoh di bawah ini! Lihat apakah model segmentasi satu orang dapat menemukan bagian tubuh dengan benar!
            </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=segmentation%20single&editMode" target=”_blank”>
                    <img src="/assets/img/blocks/blok12.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>

            <p>
                Dan untuk lihat apakah model segmentasi banyak orang dapat menemukan bagian tubuh dengan benar, jelajahi contoh di bawah ini!
            </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=segmentation%20multi&editMode" target=”_blank”>
                    <img src="/assets/img/blocks/blok13.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>

            <p>
            Lalu sekarang, ayo lihat contoh sebuah proyek dengan menggunakan segmentasi!
            </p>
            <center> 
            <h4 class="text-orange">The Balloon Game</h4>
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=balloon%20game" target=”_blank”>
                    <img src="/assets/img/aset/aset12.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>
            <p>
            Balon perlahan jatuh dan poin akan diberikan ketika balon diletuskan oleh tangan atau kaki. Namun, balon yang meletus di kepala akan kehilangan poin.
            </p>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 34,
            'isi' => '<p>
                    Pada bagian ini, program menggunakan COCO-SSD.
                    <br>Apa itu COCO-SSD?
                    </p>
                    <p>
                    COCO-SSD adalah model deep learning untuk mendeteksi objek. Hal ini dapat mendeteksi hingga 100 objek dari 80 jenis yang berbeda. COCO-SSD memberi label pada objek-objek tersebut dan menyediakan "kotak pembatas" atau “bounding box” untuk setiap objek yang terdeteksi. Kotak pembatas adalah persegi panjang terkecil yang mengelilingi objek.
                    </p>
                    <center> 
                        <img src="/assets/img/aset/aset13.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                    </center><br>
                    <p>
                        COCO-SSD dilatih menggunakan dataset COCO yang memiliki label dan lokasi 1,5 juta objek di lebih dari 200.000 gambar. SSD disini adalah singkatan dari Single Shot MultiBox Detection. 
                        Kenapa begitu? Well, karena COCO-SSD adalah model tunggal yang telah dilatih untuk mendeteksi beberapa kotak pembatas dari beberapa objek dalam sebuah gambar.
                    </p>
                    

                    <p>
                        Blok <img src="/assets/img/blocks/blok-12.png" alt="ecraft2learn" width="25%">
                        dapat melaporkan daftar deskripsi setiap objek yang terdeteksi. 
                        <br>Ayo bereksperimen dengan blok di atas melalui contoh berikut:
                    </p>

                    <center> 
                        <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=detect%20objects%20exercise&editMode" target=”_blank”>
                            <img src="/assets/img/aset/aset14.png" alt="ecraft2learn" width="40%" class="img-fluid rounded">
                        </a>
                    </center><br>
                    
                    <center>
                        <button type="button" data-toggle="collapse" data-target="#detailMateri15C4" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary btn-lg">Baca Lebih Lanjut!</button>
                    </center>
                    
                    <div class="collapse" id="detailMateri15C4">
                        <br>
                        <div class="card card-body">
                            <center>
                            <img src="/assets/img/blocks/blok14.png" alt="ecraft2learn" width="60%" class="img-fluid rounded">
                            
                            <p>
                                • <i>Contoh opsi untuk objek di blok kostum</i>
                            </p>    
                            </center><br>
                            <p>
                                • <b>Load Smaller, Faster, But Less Accurate Model</b>  jika benar (true) memuat model yang berukuran sekitar sepertiga ukuran model default. Ini lebih cepat tetapi kurang akurat. 
                            </p>
                            <p>
                                • <b>Maximum Number of Objects</b>  jika diberikan mengesampingkan nilai default 20. Sedangkan 100 adalah jumlah objek terbesar yang dapat dideteksi model. 
                            </p>
                            <p>
                                • <b>Minimum Confidence Score</b> jika mengesampingkan nilai default 0,5. Blok objects in costume hanya akan melaporkan objek dengan skor confidence setidaknya nilai ini. 
                            </p>
                            
                        </div>
                    </div>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 35,
            'isi' => '<p>
            Baru-baru ini para peneliti telah menemukan cara untuk menggunakan dua program machine learning untuk mengambil gambar dan mengubahnya menjadi seperti lukisan terkenal. Hal itu biasa disebut dengan style transfer atau transfer gaya. 
            </p><br>

            <p>
                Dengan blok <img src="/assets/img/blocks/blok-13.png" alt="ecraft2learn" width="30%">
                , Kamu bisa mengambil kostum sprite (bisa berupa gambar apa saja) pada Snap! dan nama gaya, lalu menghasilkan kostum baru dalam gaya tersebut.
            </p>

            <p>
                Ayo coba program di bawah ini!
                <br> Klik bloknya untuk mengambil foto dan buat ulang dengan <a href="#styles">gaya yang Kamu pilih!</a>
            </p>

            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=style%20transfer%20exercise&editMode" target=”_blank”>
                    <img src="/assets/img/blocks/blok15.png" alt="ecraft2learn" width="70%" class="img-fluid rounded">
                </a>
            </center><br><br>

            <p>
                Klik di bawah ini untuk mencoba "ghost effect" dari Snap! 
            </p>
            <center> 
                <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=style%20transfer" target=”_blank”>
                    <img src="/assets/img/aset/aset15.png" alt="ecraft2learn" width="50%" class="img-fluid rounded">
                </a>
            </center><br>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 36,
            'isi' => '<p>
            Pekerjaan yang dilakukan oleh mahasiswa di New York University Tisch School of the Arts yang menciptakan versi model style transfer berbasis web dengan 
            blok <img src="/assets/img/blocks/blok-13.png" alt="ecraft2learn" width="30%">
            </p>
            <p>Lalu oleh seorang siswa SMA bernama Luie diadaptasi agar berfungsi pada Snap!.<br>Keren bukan?</p>
            <p>
            Tujuannya adalah untuk menghasilkan gambar baru yang cocok dengan fitur gaya dari gambar menggunakan model deep learning. Model machine learning telah dilatih untuk melakukan hal itu dengan cepat.
            </p><br>

            <p>
                Ayo nonton video tentang Style Transfer di bawah ini agar tahu bagaimana Style Transfer dapat bekerja!
            </p>
            <center> 
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WHmp26bh0tI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 38,
            'isi' => '<p style="font-size: 18px">
            Sebagian besar ide proyek yang terdaftar untuk menggunakan layanan pengenalan gambar dapat didasarkan pada blok yang dijelaskan dalam bab ini. Ada banyak hal yang bisa Kamu eksplor untuk proyek lainnya!
            </p><br>

            <p style="font-size: 18px">
                Berikut ini adalah beberapa ide proyek yang dapat Kamu buat menggunakan ML:
            </p>',
            'xp' => 10
        ]);

        Material::create([ //blm
            'content_id' => 39,
            'isi' => '<p>
            Pekerjaan yang dilakukan oleh mahasiswa di New York University Tisch School of the Arts yang menciptakan versi model style transfer berbasis web dengan 
            blok <img src="/assets/img/blocks/blok-13.png" alt="ecraft2learn" width="30%">
            </p>
            <p>
                Lalu oleh seorang siswa SMA bernama Luie diadaptasi agar berfungsi pada Snap!.
                <br> Keren bukan?
            </p>
            <p>
            Tujuannya adalah untuk menghasilkan gambar baru yang cocok dengan fitur gaya dari gambar menggunakan model deep learning. Model machine learning telah dilatih untuk melakukan hal itu dengan cepat.
            </p><br>

            <p>
                Ayo nonton video tentang Style Transfer di bawah ini agar tahu bagaimana Style Transfer dapat bekerja!
            </p>
            <center> 
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WHmp26bh0tI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>',
            'xp' => 10
        ]);

        // END OF MATERIAL CHAPTER 4 //

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
        Material::create([
            'content_id' => 41,
            'isi' => '<p>Perlu kita ketahui, lebih mudah bagi komputer untuk memulai pekerjaan dengan teks dan menghasilkan ucapan daripada memulai dengan ucapan dan menghasilkan teks yang sesuai. Karena biasanya, bagi komputer lebih mudah untuk menghasilkan sesuatu (contohnya: menghasilkan/menampilkan teks, gambar dan lainnya) daripada mengenali atau memindai sesuatu.</p>
    <p>Ucapan maupun suara lainnya dapat menyebabkan getaran di udara yang menyebabkan getaran di mikrofon komputer. Kemudian getaran ini diubah menjadi angka. Inilah yang kita sebut dengan pengenalan ucapan/suara atau <b><i>Speech Recognition.</i></b> <i>Speech Recognition</i> akan mendeteksi suara dari ucapan dan menerjemahkannya dengan angka-angka kemudian mencoba menentukan apa yang dikatakan. Namun perlu kita ketahui proses ini tidak sempurna dan tentunya kesalahan dapat terjadi.
</p>
    <br>
            ',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 42,
            'isi' => '
                <p>Ayo kita mencoba! Klik pada blok berikut, ucapkan sesuatu, lalu klik pada variabel <i>"last thing heard"</i>.Jika semuanya berjalan dengan baik, kalian akan melihat apa yang baru saja diucapkan.</p>
   <figure class = "snap-iframe"
        id = "simple listen block"
        container_style = "width: 725px; height: 300px" >
</figure>
Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=simple%20listen%20block&editMode" class="font-bold text-primary" target="_blank">klik disini!</a></p>
    <p>Cobalah mengucapkan sesuatu, lihat hasilnya, klik blok tersebut lagi, ucapkan hal lain, dan lihat lagi. Jika kalian ingin mencoba bahasa lain, gunakan perintah <i> "set default language".</i> Jika memungkinkan, sistem akan menggunakan bahasa yang diberikan jika tidak ada bahasa atau suara eksplisit yang diberikan untuk perintah mendengarkan yang lebih canggih. Ada banyak cara untuk menentukan bahasa:</p>
    <ol type="1">
        <li> 1. Gunakan nama bahasa dalam bahasa Inggris</li>
        <li> 2. Gunakan nama bahasa dalam bahasa tersebut</li>
        <li> 3. Berikan kode bahasa diikuti dengan kode dialek.</li>
    </ol>
    <br>
            ',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 43,
            'isi' => '
                <p>Program berikut menggunakan blok <i>"listen then ..."</i> untuk mengontrol <i>sprite</i>. Kalian dapat memerintahkannya untuk maju atau berbelok ke kanan. Kemudian program akan menanyakan seberapa banyak dan melaksanakan perintah tersebut. Katakan <i> "goodbye" </i> untuk keluar dari program. Terkadang kita perlu mengulangi perkataannya. Terkadang program dapat melakukan kesalahan dalam mendengar ucapan</p>

    <br>
    <figure class = "snap-iframe"
        id = "listen error"
        container_style = "width: 700px; height: 275px" >
    </figure>
         <p class="mt-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=command#speech-recognition-sample-project" class="font-bold text-primary" target="_blank">klik disini!</a></p>
    <p>Latihan: Coba tambahkan perintah <i> "turn left" </i> ke dalam program. Nah kamu juga dapat menambahkan perintah lainnya ya! Petunjuk: bagaimana jika kita menambahkan perintah mengubah ukuran, tampilan, warna, atau lainnya? Bagaimana dengan melakukan animasi sebagai respons terhadap perintah suara?</p>

            ',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 44,
            'isi' => '
             <p> Jika kalian mengklik <img src="/materials/panah.png" class="img-materials" alt="">kalian akan melihat blok-blok di balik program. Jika Kalian kemudian mengklik kanan pada "speak turtle commands" dan memilih "edit", Kalian akan melihat program berikut.</p> 
    <img src="/materials/spoken-block.png" alt="" style="width: 40%;" class="img-materials">
    <p> Variabel "spoken" berisi apa yang baru saja dikenali. Perintah <i> if-then-else </i> bersarang pertama-tama akan menguji ucapan untuk keluar dari program, kemudian untuk gerakan maju, dan kemudian perintah berbelok. Jika tidak ada yang cocok, maka respons "tidak dimengerti" dibuat. Baik perintah berbelok maupun bergerak menyebabkan program menanyakan jumlah untuk berbelok atau bergerak. Ketika sebuah angka diucapkan, kura-kura kemudian berbelok atau bergerak menyesuaikan.</p>


    <br>

            ',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 45,
            'isi' => '
             <p>Program penghasil kalimat berikut dimulai dengan sebuah <i class="highlight-word"> "template" </i> kalimat acak. Program menganggap setiap kata yang diawali dengan "?" sebagai variabel yang digantikan dengan bertanya kepada pengguna untuk sesuatu. Contohnya:</p>
    <p class="box-highlight"><i>The silly ?PLURAL-NOUN like ?ADJECTIVE bananas.</i></p>    
    <p>Dari kalimat diatas, program meminta pengguna untuk mengucapkan <i class="highlight-word"> plural-noun </i> atau kata plural jamak dan kemudian meminta <i>adjective </i> atau kata sifat. Misalkan pengguna menjawab <i> "potatoes" </i> dan <i> "gigantic" </i>, maka program akan mengatakan</p>
    <p class="box-highlight"><i>The silly potatoes like gigantic bananas.</i></p>

   <figure class = "snap-iframe"
        id = "part of speech broadcast"
        full_screen = "true"
        container_style = "width: 800px; height: 600px" 
</figure>
    
   
    
   
    <img src="/materials/example-block.png" alt="" style="width: 50%;" class="img-materials">
    <p>Bagian program ini melalui kalimat kata per kata, berhenti ketika sebuah kata atau frasa dimulai dengan "?". Program berhenti setelah meminta penggantian dan kemudian memanggil perintah <i>"Broadcast speech recognition results ...".</i> Kode berikutnya merespons ketika sesuatu telah didengar dan diinterpretasikan:</p>
    <img src="/materials/example-block2.png" alt="" style="width: 50%;" class="img-materials">
    <p>Program tersebut mengulang apa yang didengar dan menggantikannya ke dalam daftar kata dengan menggantikan kata yang dimulai dengan "?". Contoh ini menggambarkan bagaimana menggunakan sintesis ucapan dan pengenalan untuk membuat aplikasi yang sepenuhnya verbal. Ini juga merupakan contoh program yang melintasi batas disiplin ilmu. Untuk menghasilkan kalimat yang gramatikal benar (meskipun seringkali nonsens atau lucu), diperlukan konsep-konsep tata bahasa seperti kata benda, frasa kata benda, kata kerja, kata sifat, dan kata keterangan. Masalah tentang kesepakatan jumlah dan waktu muncul secara alami. Menurut kalian bisakah program seperti ini bekerja tanpa konsep-konsep tata bahasa seperti kata benda, kata kerja, kata sifat, dll?</p>
    <p>Sebuah program tanpa konsep tata bahasa seperti kata benda, kata kerja, atau kata sifat mungkin dapat beroperasi dalam konteks tertentu, terutama jika tujuannya adalah untuk menghasilkan hasil verbal yang tidak bergantung pada struktur gramatikal tradisional. Namun, untuk berinteraksi dengan bahasa manusia secara efektif dan menghasilkan kalimat yang dapat dimengerti dan bermakna secara umum, konsep-konsep tata bahasa sangat penting.
        Dalam kasus seperti program contoh yang Anda tunjukkan, meskipun hasilnya mungkin terkadang tidak gramatikal secara tradisional, penggunaan kata-kata seperti <i> "plural noun" </i> atau <i> "adjective" </i> membantu dalam memberikan kerangka kerja yang diperlukan untuk mengatur informasi yang diterima dan dihasilkan secara verbal. Konsep-konsep ini membantu dalam membangun kalimat yang lebih terstruktur dan dapat dipahami, meskipun hasil akhirnya mungkin lebih bersifat kreatif atau eksperimental.</p>
    
    <br>
    <!-- subjudul -->
    
            ',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 46,
            'isi' => '

            <p>Program berikut dapat memperluas kalimat yang lebih rumit dengan menambahkan fitur baru. Yang biasanya kita hanya menghasilkan kalimat pendek dan sederhana, disini kita belajar untuk menghasilkan kalimat yang lebih rumit dengan cerita pendek. Jika program menemukan kata yang dimulai dengan "=", itu akan menggantikannya dengan respons terakhir untuk permintaan contoh kata/frasa tersebut.</p>    

    <figure class = "snap-iframe"
        id = "story generator"
        full_screen = "true"
        container_style = "width: 800px; height: 600px" >

</figure>
<p class="mt-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=Wikipedia answers#speech-recognition-sample-project" class="font-bold text-primary" target="_blank">klik disini!</a></p>
     
    <p>Contoh, di bawah ini terdapat cerita pendek yang memakai <i> template </i> kalimat acak</p> <p class="box-highlight"><i>This is a story about ?GIRLS-NAME. =GIRLS-NAME is ?ADJECTIVE and very ?ADJECTIVE. She travelled to ?PLACE-NAME. There she met ?BOYS-NAME who was a ?OCCUPATION in =PLACE-NAME. =GIRLS-NAME and =BOYS-NAME lived ?ADVERB ever after.</i></p>
    <p>Apabila kita merespon dengan <span class="highlight-word" > "Juliet", "warm", "beautiful", "Verona", "Romeo", "amateur poet", dan "barely"</span > maka ceritanya akan menjadi seperti dibawah ini</p> <p class="box-highlight"><i>This is a story about Juliet. Juliet is warm and very beautiful. She travelled to Verona. There she met Romeo who was a amateur poet in Verona. Juliet and Romeo lived barely ever after. </i></p>   
    <br>
              
            ',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 47,
            'isi' => '

         <p>Demo berikut ini mirip dengan <i> Google Assistant </i>. Demo ini meminta pengguna untuk mengatakan sesuatu dan kemudian mengirimkan kata-kata tersebut ke Wikipedia. Biasanya, ada banyak hasil yang cocok sehingga program memilih salah satunya secara acak dan mengucapkannya. </p>
     
 
    <figure class="snap-iframe" id="numbers signs" container_style="width: 560px; height: 132px" caption=""> </figure> <p class="mt-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=Wikipedia answers#speech-recognition-sample-project" class="font-bold text-primary" target="_blank">klik disini!</a></p>
     
     <img src="assets/wikipediablock.png" alt="" style="width: 40%;">
    <br>

    

            ',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 48,
            'isi' => '
    <p>Berikut ini adalah demo antarmuka ucapan yang sangat sederhana ke layanan cuaca. Program ini meminta nama kota dan mengucapkan suhu saat ini serta perkiraan cuaca. Program cuaca dapat ditingkatkan dengan berbagai cara. Misalnya, program dapat menanyakan informasi cuaca apa yang diinginkan pengguna.</p>
    
    <figure class="snap-iframe" id="numbers signs" container_style="width: 560px; height: 132px" caption=""> </figure> <p class="mt-2 text-center">Jika gagal memuat, <a href="https://ecraft2learn.github.io/ai/snap/snap.html?project=weather#speech-recognition-sample-project" class="font-bold text-primary" target="_blank">klik disini!</a></p>
    
    <br><br>
            ',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 57,
            'isi' => '
    <h4 class="background-information-white" id="introduction">Pendahuluan</h4>
<p class="background-information">
Kamera yang terhubung ke komputer dapat melaporkan warna setiap piksel dalam gambar dan tidak banyak lagi.
Deskripsi tentang apa yang ada di depan kamera dikembalikan ketika piksel-piksel tersebut
dikirim ke layanan pengenalan gambar.
Ada banyak jenis hal yang mungkin terkandung dalam deskripsi gambar.
Dengan pengenalan suara, deskripsi adalah apa yang diucapkan, seberapa yakin sistem tersebut, dan kemungkinan alternatifnya.
Dengan pengenalan gambar, ada banyak kemungkinan deskripsi: tag deskriptif, keterangan yang mungkin, warna dominan,
lokasi wajah dan bagian wajah jika ada,
dan keberadaan landmark, selebriti, entitas terkenal, dan logo.
Teks tulisan tangan dan teks yang dipindai juga dapat dikenali.
</p>

<p class="advanced-information non-essential">
Tantangan dalam menyediakan blok pemrograman yang ramah siswa untuk pengenalan gambar adalah
bahwa layanan AI cloud yang berbeda melaporkan deskripsi yang berbeda dengan cara yang berbeda.
Saat ini kami menyediakan antarmuka ke layanan pengenalan gambar yang disediakan oleh Google dan Microsoft.
Tantangan lainnya adalah bagaimana menyediakan antarmuka yang sederhana untuk tugas-tugas sederhana
sementara tetap mendukung penggunaan dan proyek yang lebih canggih.
</p>

<p class="societal-impact">
Dalam beberapa tahun terakhir telah terjadi kemajuan luar biasa dalam penglihatan komputer.
Ada sistem berkinerja tinggi untuk mengidentifikasi objek, mengenali wajah, menafsirkan sketsa,
dan menggunakan gambar medis untuk membantu diagnosis.
Mobil tanpa pengemudi sangat bergantung pada penglihatan komputer.
</p>
            ',
            'xp' => 10
        ]);
        Material::create([
            'content_id' => 58,
            'isi' => '
<p class="background-information">
Chrome memiliki dukungan bawaan untuk sintesis dan pengenalan suara.
Namun, saat ini tidak ada browser yang mendukung pengenalan gambar.
Untuk mengakses layanan pengenalan gambar dari perusahaan seperti Google atau Microsoft,
seseorang perlu <a href="https://github.com/ecraft2learn/ai/wiki" target="_blank">membuka akun</a>.
Akun gratis dan menyediakan beberapa tingkat penggunaan gratis.
Microsoft mengizinkan 5000 kueri per bulan, dan Google 1000 per bulan.
Untuk mencoba blok vision yang dijelaskan di sini, Anda membutuhkan setidaknya satu akun.
Membandingkan dan mempertentangkan hasil dari berbagai layanan adalah cara yang menarik
untuk mendapatkan wawasan tentang bagaimana layanan ini bekerja.
</p>

<p class="background-information">
Dalam proyek, ada cara berbeda untuk menyediakan kunci ke Snap!
(seperti dijelaskan <a href="#api-keys-in-snap">di sini</a>) tetapi dalam bab ini Anda dapat menempelkan kunci atau kunci Anda di bawah ini
dan kunci tersebut hanya akan dikirimkan ke layanan saat Anda menggunakan contoh blok.
Jika tidak, mereka tetap berada di tab browser Anda.
<br><label>Salin dan tempel kunci Google Anda di sini:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="Google image key" type="text" style="width:24em;"></label>
<br><label>Salin dan tempel kunci Microsoft Anda di sini:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="Microsoft image key" type="text" style="width:24em;"></label>
</p>
            ',
            'xp' => 10
        ]);

        Material::create([
            'content_id' => 59,
            'isi' => '
<p class="instructions">
Blok ini mengambil gambar, mengirimkannya ke penyedia server cloud AI vision, menunggu respons, dan kemudian
melaporkan daftar label dari foto tersebut.
Daftar tersebut diurutkan berdasarkan seberapa yakin penyedia vision bahwa label tersebut sesuai dengan gambar.
</p>
<figure class = "snap-iframe"
        id = "image labels reporter"
        stage_ratio = "0.25"
        container_style = "width: 800px; height: 350px" 
        caption = "Blok untuk melaporkan label yang menjelaskan apa yang ditampilkan oleh kamera. COBAKAN">
</figure>
            ',
            'xp' => 10
        ]);






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

        Quiz::create([ //3
            'content_id' => 37,
            'desc' => '<p>Tes akhir ini memiliki 10 pertanyaan terkait materi yang sudah di pelajari oleh anda. Jawablah pertanyaan dengan tepat untuk mendapatkan point!</p><br>
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

        // QUIZ CHAPTER 4 //

        Question::create([ //7
            'quiz_id' => 3,
            'pertanyaan' => 'Dalam bidang Artificial intelligence terdapat sub-bidang lagi yang dikenal dengan sebutan Machine Learning. Manakah dari pernyataan berikut ini yang merupakan penjelasan dari Machine Learning?',
            'prev_quest' => 0,
            'next_quest' => 8
        ]);

        Question::create([ //8
            'quiz_id' => 3,
            'pertanyaan' => 'Kebutuhan utama yang dapat memproses suatu program Machine Learning agar sesuai dengan rancangan adalah?',
            'prev_quest' => 7,
            'next_quest' => 9
        ]);

        Question::create([ //9
            'quiz_id' => 3,
            'pertanyaan' => 'Machine Learning menggunakan "confidence scores" dalam bagian dataset yang kita tes untuk melihat keakuratan atau performanya. Manakah di bawah ini yang termasuk definisi dari Confidence scores?',
            'prev_quest' => 8,
            'next_quest' => 10
        ]);

        Question::create([ //10
            'quiz_id' => 3,
            'pertanyaan' => 'Di bawah ini adalah cara untuk load data training yang telah disimpan, Kecuali?',
            'prev_quest' => 9,
            'next_quest' => 11
        ]);

        Question::create([ //11
            'quiz_id' => 3,
            'pertanyaan' => 'Dalam melatih label input gambar, Machine Learning memerlukan suatu blok pemrograman yaitu blok train with image buckets. Blok tersebut memiliki fungsi tersendiri, yaitu untuk?',
            'prev_quest' => 10,
            'next_quest' => 12
        ]);

        Question::create([ //12
            'quiz_id' => 3,
            'pertanyaan' => 'Pada platform blok programing terdapat istilah yang disebut dengan Sprite. Di bawah ini manakah definisi yang tepat tentang Sprite?',
            'prev_quest' => 11,
            'next_quest' => 13
        ]);

        Question::create([ //13
            'quiz_id' => 3,
            'pertanyaan' => 'Aplikasi dari model machine learning yang melakukan training data suara adalah?...',
            'prev_quest' => 12,
            'next_quest' => 14
        ]);

        Question::create([ //14
            'quiz_id' => 3,
            'pertanyaan' => 'Berikut ini yang merupakan cara kerja deteksi pose adalah?..',
            'prev_quest' => 13,
            'next_quest' => 15
        ]);

        Question::create([ //15
            'quiz_id' => 3,
            'pertanyaan' => 'Pada pelatihan/training pose Machine Learning, terdapat software browser yang disebut dengan Posenet. Berikut ini adalah pernyataan yang benar untuk Posenet, kecuali?',
            'prev_quest' => 14,
            'next_quest' => 16
        ]);

        Question::create([ //16
            'quiz_id' => 3,
            'pertanyaan' => 'Terdapat beberapa macam model pada deep learning, salah satunya yaitu Bodypix. Manakah di bawah ini yang termasuk definisi dari Bodypix?',
            'prev_quest' => 15,
            'next_quest' => 0
        ]);

        // END OF QUIZ CHAPTER 4 //

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

        // ANSWER CHAPTER 4 //

        Answer::create([
            'question_id' => 7,
            'jawaban' => 'a. sebuah data yang digunakan untuk melihat keakuratan suatu Performa',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 7,
            'jawaban' => 'b. sebuah mesin yang dikembangkan untuk menjalankan suatu sistem dengan sendirinya melalui pengenalan pola',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 7,
            'jawaban' => 'c. sebuah sistem yang dikembangkan untuk memecahkan masalah dengan cara menurut manusia',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 7,
            'jawaban' => 'd. sebuah sistem pembelajaran structural yang mendalami untuk memecahkan masalah',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 8,
            'jawaban' => 'a. Data training & data testing',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 8,
            'jawaban' => 'b. Data mining & data testing',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 8,
            'jawaban' => 'c. Data collecting & data testing',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 8,
            'jawaban' => 'd. Data sorting & data testing',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 9,
            'jawaban' => 'a. Angka antara 0 dan 1 yang menunjukkan kemungkinan keluaran model ML',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 9,
            'jawaban' => 'b. Angka antara 0 dan 1 yang menunjukkan kemungkinan masukan model ML',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 9,
            'jawaban' => 'c. Angka antara 0 dan 1 yang menunjukkan isi dari model ML ',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 9,
            'jawaban' => 'd. Angka antara 0 dan 1 yang menunjukkan sisa dari model ML',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 10,
            'jawaban' => 'a. Load file dari sistem penyimpanan lokal',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 10,
            'jawaban' => 'b. Load file dari web ',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 10,
            'jawaban' => 'c. Load file dari aplikasi machine learning',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 10,
            'jawaban' => 'd. Load file dengan memasukkan URL untuk mengaksesnya',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 11,
            'jawaban' => 'a. mengirimkan sprites pada tab training',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 11,
            'jawaban' => 'b. mendapatkan nilai confidence',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 11,
            'jawaban' => 'c. memberhentikan data training',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 11,
            'jawaban' => 'd. melakukan training menggunakan gambar dari kamera',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 12,
            'jawaban' => 'a. Objek yang menunjukkan kemungkinan keluaran model ML',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 12,
            'jawaban' => 'b. Objek yang dapat diprogram',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 12,
            'jawaban' => 'c. Objek yang dapat dihitung',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 12,
            'jawaban' => 'd. Objek yang dapat menunjukkan urutan dari model ML',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 13,
            'jawaban' => 'a. Google translate',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 13,
            'jawaban' => 'b. Google teachable machine',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 13,
            'jawaban' => 'c. Google AI',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 13,
            'jawaban' => 'd. Google neural nets',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 14,
            'jawaban' => 'a. memisahkan key point lalu algoritma dibuat',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 14,
            'jawaban' => 'b. menyiapkan data, lalu algoritma dibuat',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 14,
            'jawaban' => 'c. menghubungkan key point lalu memperhalus posisi',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 14,
            'jawaban' => 'd. mengidentifikasi lokasi bagian tubuh, lalu melatih modelnya',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 15,
            'jawaban' => 'a. Digunakan untuk estimasi pose manusia secara real-time',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 15,
            'jawaban' => 'b. menentukan lokasi bagian wajah dan tubuh yang berbeda',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 15,
            'jawaban' => 'c. menampilkan mirrored video',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 15,
            'jawaban' => 'd. mengklasifikasikan setiap pixel pada foto manusia',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 16,
            'jawaban' => 'a. Model segmentasi deep learning yang mengklasifikasikan setiap piksel dalam foto manusia',
            'status' => 1
        ]);

        Answer::create([
            'question_id' => 16,
            'jawaban' => 'b. Model segmentasi deep learning yang mencari foto manusia',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 16,
            'jawaban' => 'c. Model segmentasi deep learning yang dapat menampilkan foto manusia',
            'status' => 0
        ]);

        Answer::create([
            'question_id' => 16,
            'jawaban' => 'd. Model segmentasi deep learning yang dapat mengunduh foto manusia',
            'status' => 0
        ]);

        // END OF ANSWER CHAPTER 4 //

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

        Challenge::create([
            'judul' => 'Permainan kertas, gunting, batu yang lebih advance',
            'deskripsi' => 'Buatlah permainan gunting batu kertas dengan versi user melawan user.',
            'isi' => '<p class="text-xl font-semibold mb-4">Permainan kertas, gunting, batu yang lebih advance</p>
            <p class="mt-4">Kerjakan tantangan di snap! kemudian export file as xml!</p>',
            'step' => '<ol class="list-decimal ml-4 leading-relaxed">
            <li>Kamu dapat melihat pertanyaan tantangan yang akan kamu kerjakan di halaman
            pertama</li>
            <li> Buka <a class="text-info font-bold"
            href="https://ecraft2learn.github.io/ai/snap/snap.html?project=speaking&editMode"
            target="_blank">Snap!</a> untuk mengerjakan tantangan mu, lalu simpanlah pekerjaanmu ke
            devicemu</li>
            <li>Pilih save as, kemudian pilih computer, dan merubah nama file lalu tekan tombol save</li>
            <li>File pekerjaan tada akan berformat .XML</li>
            <li>Upload file tersebut di form upload jawaban dan tunggu hingga dinilai oleh ahli</li>
          </ol>',
            'point' => 20,
            'xp' => 60,
        ]);
    }
}
