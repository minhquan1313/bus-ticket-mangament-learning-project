@extends('client.auth.auth_layout')
@section('title', 'Đăng ký')

@section('auth_form')
    <form action="{{ route('register') }}" method="POST" class="grid gap-2 text-oBlack2">
        <x-jet-validation-errors class="mb-4" />
        @csrf
        <label class="flex items-center px-4 gap-4 h-10 bg-current rounded-xl">
            <span class="material-symbols-outlined text-oWhite">
                call
            </span>

            <input class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                type="text" value="" placeholder="Số điện thoại" name="tel" autofocus>
        </label>

        <label class="relative flex items-center px-4 gap-4 h-10 bg-current rounded-xl">
            <span class="material-symbols-outlined text-oWhite">
                lock
            </span>

            <input class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                type="password" value="" placeholder="Mật khẩu" name="password">

            <div class="flex items-center cursor-pointer h-full" title='Toggle password'>
                <span id="password_toggle1" class="material-symbols-outlined text-oWhite">
                    visibility_off
                </span>
            </div>
        </label>
        <label class="relative flex items-center px-4 gap-4 h-10 bg-current rounded-xl">
            <span class="material-symbols-outlined text-oWhite">
                lock
            </span>

            <input class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                type="password" value="" placeholder="Nhập lạii Mật khẩu" name="password_confirmation">

            <div class="flex items-center cursor-pointer h-full" title='Toggle password'>
                <span id="password_toggle2" class="material-symbols-outlined text-oWhite">
                    visibility_off
                </span>
            </div>
        </label>

        <div class="flex divide-x divide-oBlack max-w-full rounded-xl overflow-hidden">
            <label class="flex flex-[3] items-center px-4 gap-4 h-10 bg-current overflow-hidden">
                <span class="material-symbols-outlined text-oWhite">
                    badge
                </span>

                <input class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                    type="text" value="" placeholder="Họ & tên đệm" name="surname">
            </label>

            <label class="flex flex-[2] items-center px-4 gap-4 h-10 bg-current overflow-hidden">
                <span class="material-symbols-outlined text-oWhite">
                    badge
                </span>

                <input class="w-full outline-none bg-transparent text-oWhite placeholder:text-sm placeholder:text-oBlack3"
                    type="text" value="" placeholder="Tên" name="name">
            </label>
        </div>

        <div class="grid gap-1">
            <button class="flex items-center justify-center px-5 h-10 bg-oYellow text-oWhite rounded-xl transition"
                type="submit">
                Đăng ký
            </button>

            <p class="text-xs text-oLightGray text-center">
                Hoặc
            </p>

            <a href="{{ route('auth.sign_in') }}"
                class="flex items-center justify-center px-5 h-10 bg-oGreen text-oWhite rounded-xl">
                Đăng nhập
            </a>
        </div>

        {{-- Error --}}
        {{-- <ul class="text-oRed text-sm">
            <li class="">
                abc
            </li>
            <li class="">
                abc
            </li>
        </ul> --}}

    </form>
@endsection
