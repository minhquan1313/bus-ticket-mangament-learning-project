@extends('layout.client')
@section('title', 'Trang chủ')

@section('body')
    <div class="relative aspect-[8/3]">
        <div>
            <img src="/images/banner.png" alt="" class="object-cover object-center w-full h-full">
            <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-white to-white/0 top-1/2"></div>
        </div>

        <form action="javascript:;" method="GET"
            class="absolute bottom-5 left-1/2 -translate-x-1/2 flex items-center rounded-xl bg-oWhite px-4 p-3 text-sm">

            {{-- <div class="rounded-xl overflow-hidden divide-x"></div> --}}
            <div class="flex rounded-xl overflow-hidden divide-x">
                <label class="bg-red-400 flex items-center">
                    <span class="material-symbols-outlined">
                        travel_explore
                    </span>

                    <input type="text" class="">
                </label>
            </div>

            <div class="rounded-xl overflow-hidden divide-x">
                <button class="px-5 py-2 bg-oYellow text-oWhite" type="submit">Tim kiem</button>
            </div>

        </form>

    </div>
@endsection
