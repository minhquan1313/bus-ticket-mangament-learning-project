@php
    $title = 'Đặt ngay';
    $colorClass = 'bg-oYellow';
@endphp

@isset($type)
    @php
        // $objTit = ['seeDetail' => ['t' => 'Xem chi tiết', 'c' => 'bg-oGreen'], 'cancled' => ['t' => 'Đã huỷ chuyến', 'c' => 'bg-oRed'], 'bookNow' => ['t' => 'Đặt ngay', 'c' => 'bg-oYellow']];
        $objColor = ['bg-oGreen', 'bg-oBlack3', 'bg-oBlack3', 'bg-oRed'];
        
        // var_dump($objColor, $type);
        // $title = $objTit[$type]['t'];
        // $colorClass = $objTit[$type]['c'];
        
        $title = $type->ten;
        $colorClass = $objColor[$type->trang_thai_id - 1];
    @endphp
@endisset

<div class="relative text-oBlack1 bg-current flex rounded-xl border border-oBlack h-full">
    {{-- PREMIUM --}}
    @if ($cvx->xe->loai == 'VIP')
        <div class="group absolute top-0 left-0 rounded-tl-xl rounded-br-xl bg-oYellow shadow-xl drop-shadow-lg">
            <span class="material-symbols-outlined py-2 px-1 text-xl text-oWhite cursor-default">
                workspace_premium
            </span>

            <div
                class="absolute bottom-full left-1/2 -translate-x-1/2 transition opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto">
                <div class="mb-2 w-40 text-oW rounded-xl bg-current border border-oBlack">
                    <ul class=" text-oWhite p-3 space-y-1">
                        @if ($cvx->xe->wifi)
                            <li class="text-sm">
                                @include('client.booking.service_wifi')
                            </li>
                        @endif

                        @if ($cvx->xe->bed)
                            <li class="text-sm">
                                @include('client.booking.service_bed')
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="absolute bottom-0 left-1/2 w-2 aspect-square bg-current border border-transparent border-b-oBlack border-r-oBlack"
                    style="transform: translate(-50%,-50%) rotate(45deg)">
                </div>
            </div>
        </div>
    @endif

    <a href="{{ $href ?? '#' }}" class="w-1/2 flex-shrink-0 overflow-hidden rounded-l-xl">
        <img src="{{ $cvx->xe->hinh_anh }}" alt="Img" class="w-full aspect-[13/17] object-cover">
    </a>

    <div class="flex flex-1 flex-col text-oWhite">
        <div class="m-2 space-y-0.5">
            <p class="text-sm">Từ:
                <span class="font-bold"> {{ $cvx->from }} </span>
            </p>
            <p class="text-sm">Đến:
                <span class="font-bold"> {{ $cvx->to }} </span>
            </p>
        </div>

        <div class="flex-1">
        </div>
        <p class="m-2 text-sm">Giá:
            <span class="text-oYellow font-bold">
                {{ $cvx->xe->gia_tien + round(($cvx->do_dai * 0.3) / 1000) * 1000 * ($cvx->ve_xe->so_nguoi ?? $_GET['person_count']) }}
                đ</span>
        </p>
        <a href="{{ $href ?? '#' }}"
            class="flex items-center justify-center rounded-br-xl px-5 h-10 text-oWhite w-full {{ $colorClass }}">
            {{ $title }}
        </a>
    </div>
</div>
