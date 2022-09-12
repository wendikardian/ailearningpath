@extends('course.layouts.main')

@section('content')
    <div class="flex flex-col w-3/4 mx-24">
        <!-- Materi -->
        <div  class="flex flex-col justify-center w-full bg-base-100 rounded-2xl border-2 p-8 mb-8 border-gray-200 text-gray-500">
            <p class="text-2xl font-semibold mb-4">{{ $content->judul }}</p>
            <div class="leading-relaxed">
                {!! $material->isi !!}
            </div>
        </div>
@endsection