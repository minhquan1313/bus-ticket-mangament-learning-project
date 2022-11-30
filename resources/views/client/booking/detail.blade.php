@extends('layout.client')
@section('title', 'Thông tin vé xe')
{{-- @section('master_head')
    @parent
    @vite('resources/js/passwordToggle.js')

@endsection --}}

@section('body')
    <div class="space-y-6 py-6">

        <p class="text-center text-2xl font-semibold">Chi tiết chuyến xe</p>

        <div class="container space-y-6">
            <div class="bg-oBlack2 rounded-xl">
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

                        <p class="">Ngày khởi hành:
                            <span class="font-bold"> 06, tháng 1, năm 2017</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-2 bg-oBlack2 rounded-xl p-2 space-y-2">
                    <p class="text-center text-2xl font-semibold">Chọn khung giờ</p>
                    <div class="flex gap-5 p-8">
                        hi
                    </div>
                </div>

                <div class="bg-oBlack2 rounded-xl">
                    <div class="flex gap-5 p-8">
                        hi
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
