<div class="relative hover:shadow-md transition rounded-full bg-current text-oBlack1  group">
    <div class="flex items-center p-1 space-x-2 cursor-pointer text-oLightGray">
        <span class="material-symbols-outlined">
            menu
        </span>

        <span class="material-symbols-outlined">
            account_circle
        </span>
    </div>

    <div
        class="absolute right-0 top-full translate-y-2 bg-current rounded-md shadow-md min-w-[8rem] transition pointer-events-none opacity-0 group-hover:pointer-events-auto group-hover:opacity-100">

        {{-- Hidden bridge --}}
        <div class="absolute inset-x-0 bottom-full h-2"></div>

        <ul class="py-1">
            <li class="">
                <a href="#"
                    class="px-2 py-1 block text-right text-sm text-oLightGray hover:bg-oYellow hover:text-oWhite transition">
                    Đăng nhập
                </a>
            </li>
            <li class="">
                <a href="#"
                    class="px-2 py-1 block text-right text-sm text-oLightGray hover:bg-oYellow hover:text-oWhite transition">
                    Đăng ký
                </a>
            </li>
        </ul>
    </div>
</div>
