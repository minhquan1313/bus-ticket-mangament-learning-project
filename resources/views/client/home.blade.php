@extends('layout.client')
@section('title', 'Trang chủ')

@section('body')
    <div class="relative aspect-[8/3]">
        <div>
            <img src="/images/banner.png" alt="" class="object-cover object-center w-full h-full">
            <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-white to-white/0 top-1/2"></div>
        </div>

        <form action="javascript:;" method="GET"
            class="absolute bottom-5 left-1/2 -translate-x-1/2 flex items-center rounded-xl bg-oWhite px-4 p-3 space-x-3">

            {{-- <div class="rounded-xl overflow-hidden divide-x"></div> --}}
            <div class="flex rounded-xl divide-x">
                <label class="relative group flex items-center px-4 gap-4 h-10 bg-white rounded-l-xl">
                    <span class="material-symbols-outlined">
                        travel_explore
                    </span>

                    <input class="peer outline-none placeholder:text-sm w-48" type="text" value=""
                        placeholder="Điểm đón" name="from">

                    <div
                        class="absolute bottom-full inset-x-0 bg-white rounded-md shadow-md min-w-[8rem] transition pointer-events-none opacity-0 peer-focus:pointer-events-auto peer-focus:opacity-100 hover:pointer-events-auto hover:opacity-100">

                        <div class="py-1">
                            <ul class="max-h-72 overflow-y-scroll">
                                <li>
                                    <p class="px-2 py-1 block text-sm text-oLightGray hover:bg-oYellow cursor-pointer transition hover:text-oWhite"
                                        title="Thành Phố Hồ Chí Minh">
                                        Thành Phố Hồ Chí Minh
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </label>

                <label class="relative group flex items-center px-4 gap-4 h-10 bg-white">
                    <span class="material-symbols-outlined">
                        flag
                    </span>

                    <input class="peer outline-none placeholder:text-sm w-48" type="text" value=""
                        placeholder="Điểm đến" name="to">

                    <div
                        class="absolute bottom-full inset-x-0 bg-white rounded-md shadow-md min-w-[8rem] transition pointer-events-none opacity-0 peer-focus:pointer-events-auto peer-focus:opacity-100 hover:pointer-events-auto hover:opacity-100">

                        <div class="py-1">
                            <ul class="max-h-72 overflow-y-scroll">
                                <li>
                                    <p class="px-2 py-1 block text-sm text-oLightGray hover:bg-oYellow cursor-pointer transition hover:text-oWhite"
                                        title="Thành Phố Hồ Chí Minh">
                                        Thành Phố Hồ Chí Minh
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </label>

                <label class="flex items-center px-4 gap-4 h-10 bg-white">
                    <span class="material-symbols-outlined">
                        event
                    </span>

                    <input class="outline-none placeholder:text-sm w-36" type="date" value="{{ date('Y-m-d') }}"
                        placeholder="Thời gian">
                </label>
                <label class="flex items-center px-4 gap-4 h-10 bg-white rounded-r-xl" title="Số người">
                    <span class="material-symbols-outlined">
                        person_add
                    </span>

                    <input class="outline-none placeholder:text-sm w-20" type="number" value="1"
                        placeholder="Số người">
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
