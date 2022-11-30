    <form action="javascrip:;" method="post"
        class="relative text-oBlack1 bg-current flex rounded-xl border border-oBlack h-full">
        {{-- PREMIUM --}}
        <div class="group absolute top-0 left-0 rounded-tl-xl rounded-br-xl bg-oYellow shadow-xl drop-shadow-lg">
            <span class="material-symbols-outlined py-2 px-1 text-xl text-oWhite cursor-default">
                workspace_premium
            </span>

            <div
                class="absolute bottom-full left-1/2 -translate-x-1/2 transition opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto">
                <div class="mb-2 w-40 text-oW rounded-xl bg-current border border-oBlack">
                    <ul class=" text-oWhite p-3 space-y-1">
                        <li class="text-sm">
                            @include('client.booking.service_wifi')
                        </li>
                        <li class="text-sm">
                            @include('client.booking.service_bed')
                        </li>
                    </ul>
                </div>

                <div class="absolute bottom-0 left-1/2 w-2 aspect-square bg-current border border-transparent border-b-oBlack border-r-oBlack"
                    style="transform: translate(-50%,-50%) rotate(45deg)">
                </div>
            </div>
        </div>

        <a href="{{ route('booking.detail') }}" class="w-1/2 flex-shrink-0 overflow-hidden rounded-l-xl">
            <img src="/images/bus.jpg" alt="Img" class="w-full aspect-[13/17] object-cover">
        </a>

        <div class="flex flex-col text-oWhite">
            <div class="m-2 space-y-0.5">
                <p class="text-sm">Từ:
                    <span class="font-bold"> Thành Phố Hồ Chí Minh </span>
                </p>
                <p class="text-sm">Đến:
                    <span class="font-bold"> Tỉnh Thừa Thiên Huế </span>
                </p>
            </div>

            <div class="flex-1">
            </div>

            <p class="m-2 text-sm">Giá:
                <span class="text-oYellow font-bold"> 60.000đ </span>
            </p>
            <button type="submit" class="rounded-br-xl px-5 h-10 bg-oYellow text-oWhite w-full">
                Đặt ngay
            </button>
        </div>
    </form>
