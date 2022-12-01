@php
    $className = '';
    // echo $subPos;
    switch ($subPos) {
        case 'bottom':
            $className = 'top-full';
            break;
    
        default:
            // top
            $className = 'bottom-full';
            break;
    }
@endphp

@section('master_head')
    @parent
    @vite('resources/js/bookingBarSearch.js')
@endsection

<div class="flex items-center justify-center rounded-xl bg-oBlack px-4 p-3 space-x-3">
    <div class="flex rounded-xl divide-x divide-oBlack text-oBlack1">
        <label class="relative group flex items-center px-4 gap-4 h-10 bg-current rounded-l-xl">
            <span class="material-symbols-outlined text-oWhite">
                travel_explore
            </span>

            <input id="fromInp"
                class="peer outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-48"
                type="text" value="" placeholder="Điểm đón" name="from">

            <div id="fromSuggest"
                class="absolute {{ $className }} inset-x-0 bg-current rounded-md shadow-md min-w-[12rem] transition pointer-events-none opacity-0 peer-focus:pointer-events-auto peer-focus:opacity-100 hover:pointer-events-auto hover:opacity-100">

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

        <label class="relative group flex items-center px-4 gap-4 h-10 bg-current">
            <span class="material-symbols-outlined text-oWhite">
                flag
            </span>

            <input id="toInp"
                class="peer outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-48"
                type="text" value="" placeholder="Điểm đến" name="to">

            <div id="toSuggest"
                class="absolute {{ $className }} inset-x-0 bg-current rounded-md shadow-md min-w-[12rem] transition pointer-events-none opacity-0 peer-focus:pointer-events-auto peer-focus:opacity-100 hover:pointer-events-auto hover:opacity-100">

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

        <label class="relative group flex items-center px-4 gap-4 h-10 bg-current">
            <span class="material-symbols-outlined text-oWhite">
                event
            </span>

            <input
                class="peer outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-36 cursor-pointer"
                type="date" value="{{ date('Y-m-d') }}" placeholder="Thời gian" name="time">
        </label>
        <label class="relative group flex items-center px-4 gap-4 h-10 bg-current rounded-r-xl" title="Số người">
            <span class="material-symbols-outlined text-oWhite">
                person_add
            </span>

            <input
                class="peer outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3 w-20"
                type="number" value="1" placeholder="Số người" name="person_count">
        </label>
    </div>

    <div class="rounded-xl overflow-hidden divide-x">
        <button class="flex items-center px-5 h-10 bg-oYellow text-oWhite text-sm" type="submit">
            <span class="material-symbols-outlined">
                search
            </span>
        </button>
    </div>
</div>
