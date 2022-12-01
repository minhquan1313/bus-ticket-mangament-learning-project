@extends('layout.client')
@section('title', 'Thông tin vé xe')

@section('body')
    <div class="space-y-6 py-6">

        <p class="text-center text-2xl font-semibold">Chi tiết vé</p>

        <div class="container space-y-6">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-3 bg-oBlack2 rounded-xl">
                    <div class="flex gap-5 p-8">
                        {{-- cover --}}
                        <div class="w-1/3 flex-shrink-0 overflow-hidden pr-8 -mt-14">
                            <img src="/images/bus.jpg" alt="Img" class="w-full aspect-[13/17] rounded-xl object-cover">
                        </div>

                        {{-- info --}}
                        <div class="space-y-2">
                            <div class="text-xl flex items-center gap-3">
                                <b>Thành Phố Hồ Chí Minh</b>
                                <span class="material-symbols-outlined">
                                    east
                                </span>
                                <b>Tỉnh Thừa Thiên Huế</b>
                            </div>

                            <p class="">Loại xe:
                                <span class="font-bold"> Vip </span>
                            </p>

                            <div class="space-y-2">
                                <p>
                                    Tiện ích:
                                </p>
                                <ul class="mx-4 space-y-2">
                                    <li>
                                        @include('client.booking.service_wifi')
                                    </li>
                                    <li>
                                        @include('client.booking.service_bed')
                                    </li>
                                </ul>
                            </div>

                            <p class="">Biển số:
                                <span class="font-bold"> 51N-5054 </span>
                            </p>

                            <p class="">Số chỗ ngồi:
                                <span class="font-bold"> 39</span>
                            </p>

                            <p class="">Ngày đặt vé:
                                <span class="font-bold"> 16:30, 06, tháng 1, năm 2017 </span>
                            </p>

                            <p class="">Ngày khởi hành:
                                <span class="font-bold"> 16:30, 06, tháng 1, năm 2017 </span>
                            </p>

                            <p class="">Trạng thái:
                                <span class="font-bold"> Có thể dùng </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex">
                <div class="flex ml-auto gap-3 whitespace-nowrap">

                    <a href="{{ route('user.booked') }}"
                        class="flex items-center justify-center rounded-xl px-12 h-10 text-oWhite w-full bg-oBlack2">
                        Quay lại
                    </a>

                    <a href="{{ $href ?? '#' }}"
                        class="flex items-center justify-center rounded-xl px-12 h-10 text-oWhite w-full bg-oRed">
                        Huỷ vé
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
