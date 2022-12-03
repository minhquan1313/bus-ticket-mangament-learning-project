@php
    $user = Auth::user();
@endphp

<div class="relative hover:shadow-md transition rounded-full bg-current text-oBlack1  group">
    <div class="flex items-center p-1 space-x-2 cursor-pointer text-oLightGray">

        <span class="material-symbols-outlined">
            menu
        </span>
        @if ($user)
            <p class="whitespace-nowrap text-sm">{{ $user->surname . ' ' . $user->name }}</p>
            <img src="{{ $user->profile_photo_path }}" alt="" class="h-6 w-auto rounded-full object-cover">
        @else
            <span class="material-symbols-outlined">
                account_circle
            </span>
        @endif
    </div>

    <div
        class="absolute right-0 top-full translate-y-2 bg-current rounded-md shadow-lg min-w-[8rem] transition pointer-events-none opacity-0 group-hover:pointer-events-auto group-hover:opacity-100 focus-within:pointer-events-auto focus-within:opacity-100">

        {{-- Hidden bridge --}}
        <div class="absolute inset-x-0 bottom-full h-2"></div>

        <ul class="py-1">
            @if ($user)
                <li>
                    <a href="{{ route('user.profile') }}"
                        class="px-2 py-1 block text-right text-sm text-oLightGray hover:bg-oYellow hover:text-oWhite transition">
                        Thông tin
                    </a>
                </li>
                <li>
                    <form action="{{ route('user.logout') }}" method="post" class="block ">
                        @csrf
                        <button type="submit"
                            class="w-full text-right px-2 py-1 text-sm text-oLightGray hover:bg-oYellow hover:text-oWhite transition">
                            Đăng xuất
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('auth.sign_in') }}"
                        class="px-2 py-1 block text-right text-sm text-oLightGray hover:bg-oYellow hover:text-oWhite transition">
                        Đăng nhập
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.sign_up') }}"
                        class="px-2 py-1 block text-right text-sm text-oLightGray hover:bg-oYellow hover:text-oWhite transition">
                        Đăng ký
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
