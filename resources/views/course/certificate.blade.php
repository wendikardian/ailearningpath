@extends('course.layouts.main')

@section('content')
    <div class="flex flex-col w-3/4 mx-24">
        <!-- Materi -->
        <div class="flex flex-col justify-items-center w-full bg-no-repeat bg-cover rounded-2xl py-16 px-32 mb-8 text-white text-center" style="background-image: url(/res/img/bg-certificate.jpg)">
            <div class="backdrop-blur-sm bg-white/20 rounded-2xl py-8 px-4 shadow-sm">
                <p class="font-semibold text-4xl tracking-wide mb-8">Congratulations!</p>
                <p class="text-lg font-light">Anda berhasil menyelesaikan course  </p>
                <p class="font-semibold text-xl mb-8 ">Speech Synthesis dalam Artificial Intelligence</p>
                <p class="font-light"> Sekarang mungkin saat yang tepat untuk berbagi pencapaian Anda dengan keluarga atau teman.</p>
            </div>
        </div>

        <div class="flex flex-col items-center w-full mb-8 text-center">
            <p>Lihat Sertifikat kamu disini:</p>
            <a href="/certificate" class="btn btn-primary mt-2 text-white normal-case w-fit shadow-md">Lihat Sertifikat</a>
        </div>
@endsection