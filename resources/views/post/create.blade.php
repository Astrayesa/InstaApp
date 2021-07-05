@extends('layouts.main')
@section('link')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
@section('content')
    <main class="page">
        <section>
            <div class="content">
                <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                    <div>
                        <x-label for="exampleFormControlFile1" :value="__('Photo')"/>

                        <input type="file" name="photo" accept="image/*" class="form-control-file"
                               id="exampleFormControlFile1">

                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="caption" :value="__('Caption')"/>

                        <textarea name="caption" class="form-control" id="caption" style="width: 100%"></textarea>
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Post') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
