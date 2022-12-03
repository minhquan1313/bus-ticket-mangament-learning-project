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
                                <b>{{ $chuyen->from }}</b>
                                <span class="material-symbols-outlined">
                                    east
                                </span>
                                <b>{{ $chuyen->to }}</b>
                            </div>

                            <p>Loại xe:
                                <span class="font-bold"> {{ $chuyen->xe->loai }} </span>
                            </p>

                            @if ($chuyen->xe->loai == 'VIP')
                                <div class="space-y-2">
                                    <p>
                                        Tiện ích:
                                    </p>
                                    <ul class="mx-4 space-y-2">
                                        @if ($chuyen->xe->wifi)
                                            <li>
                                                @include('client.booking.service_wifi')
                                            </li>
                                        @endif

                                        @if ($chuyen->xe->bed)
                                            <li>
                                                @include('client.booking.service_bed')
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            @endif

                            <p>Biển số:
                                <span class="font-bold"> {{ $chuyen->xe->bien_so }} </span>
                            </p>

                            <p>Số chỗ ngồi:
                                <span class="font-bold"> {{ $chuyen->xe->cho_ngoi }}</span>
                            </p>

                            <p>Ngày đặt vé:
                                <span class="font-bold"> {{ date('d-m-Y H:i:s', strtotime($chuyen->ve_xe->created_at)) }}
                                </span>
                            </p>

                            <p>Ngày khởi hành:
                                <span class="font-bold">
                                    {{-- {{ $chuyen->ve_xe->khoi_hanh_gio }} --}}
                                    {{-- {{ $chuyen->thoi_gian_khoi_hanh }} --}}
                                    {{ date('d-m-Y H:i:s', strtotime(explode(' ', $chuyen->thoi_gian_khoi_hanh)[0] . ' ' . $chuyen->ve_xe->khoi_hanh_gio)) }}
                                </span>
                            </p>

                            <p>Trạng thái:
                                <span class="font-bold"> {{ $chuyen->trang_thai->ten }} </span>
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

                    @if ($chuyen->trang_thai->trang_thai_id == 1)
                        <a href="{{ $href ?? '#' }}"
                            class="flex items-center justify-center rounded-xl px-12 h-10 text-oWhite w-full bg-oRed">
                            Huỷ vé
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
