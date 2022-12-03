@extends('layout.client')
@section('title', 'Thông tin vé xe')

@section('master_head')
    @parent
    @vite('resources/js/booking.detail.js')
@endsection

@section('body')
    <div class="space-y-6 py-6">

        <p class="text-center text-2xl font-semibold">Chi tiết chuyến xe</p>

        <div class="container space-y-6">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-3 bg-oBlack2 rounded-xl">
                    <div class="flex gap-5 p-8">
                        {{-- cover --}}
                        <div class="w-1/3 flex-shrink-0 overflow-hidden pr-8 -mt-14">
                            <img src="{{ $xe->hinh_anh }}" alt="Img"
                                class="w-full aspect-[13/17] rounded-xl object-cover">
                        </div>

                        {{-- info --}}
                        <div class="space-y-2">
                            <div class="text-xl flex items-center gap-3">
                                <b>{{ $tinhFrom->ten_tinh }}</b>
                                <span class="material-symbols-outlined">
                                    east
                                </span>
                                <b>{{ $tinhTo->ten_tinh }}</b>
                            </div>

                            <p class="">Loại xe:
                                <span class="font-bold"> {{ $xe->loai }} </span>
                            </p>

                            @if ($xe->loai == 'VIP')
                                <div class="space-y-2">
                                    <p>
                                        Tiện ích:
                                    </p>
                                    <ul class="mx-4 space-y-2">
                                        @if ($xe->wifi)
                                            <li>
                                                @include('client.booking.service_wifi')
                                            </li>
                                        @endif

                                        @if ($xe->bed)
                                            <li>
                                                @include('client.booking.service_bed')
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            @endif

                            <p class="">Biển số:
                                <span class="font-bold"> {{ $xe->bien_so }} </span>
                            </p>

                            <p class="">Số chỗ ngồi:
                                <span class="font-bold"> {{ $xe->cho_ngoi }}</span>
                            </p>

                            <p class="">Ngày khởi hành:
                                <span class="font-bold"> {{ date('d-m-Y', strtotime($khoiHanh)) }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 bg-oBlack2 rounded-xl p-2 space-y-3 h-fit">
                    <p class="text-center text-2xl font-semibold">Chọn khung giờ</p>

                    <ul class="grid grid-cols-10 rounded-xl bg-oBlack1 border border-oBlack">
                        @foreach (['07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30'] as $r)
                            <li class="select-none">
                                <label>
                                    <input type="radio" name="hour" class="hidden peer" value="{{ $r }}">
                                    <div
                                        class="flex items-center justify-center rounded-xl py-2 px-4 transition duration-300 hover:bg-oYellow peer-checked:bg-oYellow peer-checked:brightness-90">
                                        {{ $r }}
                                    </div>
                                </label>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <form action="{{ route('booking.create') }}" method="POST" class="bg-oBlack2 rounded-xl">
                    @csrf
                    <input type="text" class="hidden" name="chuyen_id" readonly value="{{ $chuyen->chuyen_id }}">
                    {{-- <input type="text" class="hidden" name="from" readonly value="{{ $tinhFrom->tinh_id }}">
                    <input type="text" class="hidden" name="to" readonly value="{{ $tinhTo->tinh_id }}">
                    <input type="text" class="hidden" name="xeId" readonly value="{{ $xe->xe_id }}"> --}}
                    <div class="p-2 px-4 space-y-3">

                        <p class="text-center text-2xl font-semibold">Tóm tắt</p>

                        <ul class="space-y-2">
                            <li>
                                <p>Từ :
                                    <span class="font-bold"> Thành Phố Hồ Chí Minh </span>
                                </p>
                            </li>

                            <li>
                                <p>Đến:
                                    <span class="font-bold"> Tỉnh Thừa Thiên Huế </span>
                                </p>
                            </li>

                            <li>
                                <p>Thời gian khởi hành:
                                    <input type="text" name="khoi_hanh_gio" readonly
                                        class="font-bold bg-transparent p-0 hidden" value="{{ $khoiHanh }}">

                                    <span class="font-bold" id="khoi_hanh_gio_span">
                                        {{ date('d-m-Y', strtotime($khoiHanh)) }} </span>

                                </p>
                            </li>

                            <li>
                                <p>Loại xe:
                                    <span class="font-bold"> {{ $xe->loai }} </span>
                                </p>
                            </li>
                            <li>
                                <p>Số người:
                                    <input type="text" name="so_nguoi" readonly class="font-bold bg-transparent p-0"
                                        value="{{ $_GET['person_count'] }}">
                                </p>
                            </li>
                        </ul>

                        <p class="text-right text-2xl font-semibold">Giá</p>
                        <p class="text-right text-2xl font-semibold text-oYellow">
                            {{ $xe->gia_tien + round(($chuyen->do_dai * 0.3) / 1000) * 1000 * $_GET['person_count'] }} đ
                        </p>
                    </div>

                    <button type="submit" id="bookNow"
                        class="flex items-center justify-center rounded-b-xl px-5 h-10 bg-oYellow text-oWhite w-full"
                        disabled>
                        Đặt ngay
                    </button>
                </form>
            </div>

        </div>
    </div>

@endsection
