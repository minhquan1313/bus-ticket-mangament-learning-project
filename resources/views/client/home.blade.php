@extends('layout.client')
@section('title', 'Trang chủ')

@section('body')
    @vite('resources/js/home.js')

    <div class="relative aspect-[8/3]">
        <div>
            <img src="/images/banner.png" alt="" class="object-cover object-center w-full h-full">
            <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-oBlack1 to-white/0 top-1/2"></div>
        </div>

        <form action="javascript:;" method="GET"
            class="absolute bottom-5 left-1/2 -translate-x-1/2 flex items-center rounded-xl bg-oBlack px-4 p-3 space-x-3">

            {{-- <div class="rounded-xl overflow-hidden divide-x"></div> --}}
            <div class="flex rounded-xl divide-x divide-oBlack">
                <label class="relative group flex items-center px-4 gap-4 h-10 bg-current text-oBlack1 rounded-l-xl">
                    <span class="material-symbols-outlined text-oWhite">
                        travel_explore
                    </span>

                    <input class="peer outline-none bg-transparent text-oWhite placeholder:text-sm w-48" type="text"
                        value="" placeholder="Điểm đón" name="from">

                    <div id="fromSuggest"
                        class="absolute bottom-full inset-x-0 bg-current rounded-md shadow-md min-w-[8rem] transition pointer-events-none opacity-0 peer-focus:pointer-events-auto peer-focus:opacity-100 hover:pointer-events-auto hover:opacity-100">

                        <div class="py-1">
                            <ul class="max-h-72 overflow-y-scroll">
                                @foreach (['Thành Phố Hồ Chí Minh', 'Tỉnh Thừa Thiên Huế', 'Tỉnh Bến Tre'] as $province)
                                    <li>
                                        <p class="px-2 py-1 block text-sm text-oLightGray cursor-pointer transition hover:bg-oYellow hover:text-oWhite"
                                            title="{{ $province }}">
                                            {{ $province }}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </label>

                <label class="relative group flex items-center px-4 gap-4 h-10 bg-current text-oBlack1">
                    <span class="material-symbols-outlined text-oWhite">
                        flag
                    </span>

                    <input class="peer outline-none bg-transparent text-oWhite placeholder:text-sm w-48" type="text"
                        value="" placeholder="Điểm đến" name="to">

                    <div id="toSuggest"
                        class="absolute bottom-full inset-x-0 bg-current rounded-md shadow-md min-w-[8rem] transition pointer-events-none opacity-0 peer-focus:pointer-events-auto peer-focus:opacity-100 hover:pointer-events-auto hover:opacity-100">

                        <div class="py-1">
                            <ul class="max-h-72 overflow-y-scroll">
                                @foreach (['Thành Phố Hồ Chí Minh', 'Tỉnh Thừa Thiên Huế', 'Tỉnh Bến Tre'] as $province)
                                    <li>
                                        <p class="px-2 py-1 block text-sm text-oLightGray cursor-pointer transition hover:bg-oYellow hover:text-oWhite"
                                            title="{{ $province }}">
                                            {{ $province }}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </label>

                <label class="relative group flex items-center px-4 gap-4 h-10 bg-current text-oBlack1">
                    <span class="material-symbols-outlined text-oWhite">
                        event
                    </span>

                    <input class="peer outline-none bg-transparent text-oWhite placeholder:text-sm w-36 cursor-pointer"
                        type="date" value="{{ date('Y-m-d') }}" placeholder="Thời gian">
                </label>
                <label class="relative group flex items-center px-4 gap-4 h-10 bg-current text-oBlack1 rounded-r-xl"
                    title="Số người">
                    <span class="material-symbols-outlined text-oWhite">
                        person_add
                    </span>

                    <input class="peer outline-none bg-transparent text-oWhite placeholder:text-sm w-20" type="number"
                        value="1" placeholder="Số người">
                </label>
            </div>

            <div class="rounded-xl overflow-hidden divide-x">
                <button class="flex items-center px-5 h-10 bg-oYellow text-oWhite text-sm" type="submit">
                    <span class="material-symbols-outlined">
                        search
                    </span>
                </button>
            </div>
        </form>
    </div>

@endsection
