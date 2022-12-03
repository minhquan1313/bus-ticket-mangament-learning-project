<header class="sticky top-0 z-10 bg-oBlack px-5 flex items-center">
    <ul class="flex flex-1">
        @php
            $routeKey = 'r';
            $routeTitle = 'n';
            $hd = [[$routeKey => 'home', $routeTitle => 'Trang chủ'], [$routeKey => 'booking.index', $routeTitle => 'Đặt vé']];
        @endphp
        @foreach ($hd as $nav)
            <li>
                <a href="{{ route($nav[$routeKey]) }}"
                    class="p-3 block text-sm hover:text-oYellow transition {{ Request::route()->getName() == $nav['r'] ? 'text-oYellow' : 'text-oLightGray' }} ">{{ $nav['n'] }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('home') }}" class="flex items-center justify-center aspect-square bg-oBlack1 p-1 rounded-full h-9">
        <svg class="scale-75" width="24" height="28" viewBox="0 0 24 28" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11.24 0H3.51398C3.16327 0 2.87894 0.288265 2.87894 0.643833C2.87894 0.9994 3.16327 1.28767 3.51398 1.28767H6.81499C6.11855 1.72986 5.49059 2.27294 4.95137 2.89686H0.635043C0.28433 2.8969 0 3.1852 0 3.54077C0 3.89634 0.28433 4.1846 0.635043 4.1846H4.03268C3.30002 5.44432 2.8789 6.91154 2.8789 8.47676C2.8789 10.298 3.44852 11.9869 4.4164 13.3702H2.61456C2.26384 13.3702 1.97951 13.6585 1.97951 14.014C1.97951 14.3696 2.26384 14.6579 2.61456 14.6579H5.52481C5.92077 15.0344 6.3528 15.3723 6.81499 15.6658H0.700545C0.349832 15.6658 0.0655027 15.9541 0.0655027 16.3096C0.0655027 16.6652 0.349832 16.9535 0.700545 16.9535H11.24C15.8503 16.9535 19.601 13.1508 19.601 8.47672C19.601 3.80264 15.8503 0 11.24 0ZM14.3248 12.702C14.3131 12.712 14.3015 12.7221 14.2889 12.7313C14.2747 12.7417 14.2602 12.7514 14.2455 12.7605C13.397 13.3742 12.3594 13.7356 11.24 13.7356C10.1206 13.7356 9.08293 13.3742 8.23439 12.7605C8.21968 12.7514 8.20521 12.7417 8.19105 12.7313C8.17849 12.722 8.16689 12.7119 8.15518 12.702C6.88054 11.7429 6.05285 10.206 6.05285 8.47676C6.05285 5.57699 8.37979 3.21784 11.24 3.21784C14.1001 3.21784 16.4271 5.57699 16.4271 8.47676C16.4271 10.2061 15.5994 11.7429 14.3248 12.702Z"
                fill="#F7B538" />
            <path
                d="M20.388 8.61686C20.388 7.13462 20.0236 5.73417 19.3782 4.4967C21.6287 5.47027 23.2031 7.67628 23.2031 10.2358C23.2031 11.2496 22.9523 12.2482 22.4754 13.1407L23.3204 15.8683C23.3865 16.0815 23.327 16.3129 23.1663 16.4705C23.0488 16.5856 22.8911 16.6476 22.7301 16.6476C22.6702 16.6476 22.6098 16.639 22.551 16.6216L19.7651 15.7943C18.8535 16.2611 17.8336 16.5068 16.7981 16.5068C16.4707 16.5068 16.149 16.4825 15.8348 16.4358C18.5587 14.8495 20.388 11.9387 20.388 8.61686Z"
                fill="#F7B538" />
            <path
                d="M9.66239 8.47674C9.66239 9.01175 9.87202 9.52485 10.2452 9.90316C10.6183 10.2815 11.1244 10.494 11.6521 10.494C12.1798 10.494 12.6859 10.2815 13.0591 9.90316C13.4322 9.52485 13.6418 9.01175 13.6418 8.47674C13.6418 7.94173 13.4322 7.42863 13.0591 7.05032C12.6859 6.67201 12.1798 6.45947 11.6521 6.45947C11.1244 6.45947 10.6183 6.67201 10.2452 7.05032C9.87202 7.42863 9.66239 7.94173 9.66239 8.47674"
                fill="#F7B538" />
            <path
                d="M5.38036 25.0848C5.38036 25.973 4.73526 26.4901 3.67841 26.4901H1.5647V23.6132H3.62351C4.66664 23.6132 5.38036 24.17 5.38036 25.0848ZM5.1333 21.0677C5.1333 21.9162 4.51566 22.3802 3.49998 22.3802H1.5647V19.742H3.49998C4.51566 19.742 5.1333 20.2325 5.1333 21.0677ZM6.94505 25.2439C6.94505 24.1435 6.12153 23.1624 5.10585 22.9901C6.02545 22.6719 6.72545 21.9958 6.72545 20.8821C6.72545 19.5829 5.65486 18.509 3.63723 18.509H0V27.723H3.81566C5.76467 27.723 6.94505 26.6492 6.94505 25.2439Z"
                fill="#F7B538" />
            <path
                d="M15.4944 20.4181H13.9297V24.4882C13.9297 25.8272 13.1748 26.5166 12.0218 26.5166C10.8826 26.5166 10.1277 25.8272 10.1277 24.4882V20.4181H8.57677V24.7136C8.57677 26.7552 9.92186 27.8291 11.6924 27.8291C12.5846 27.8291 13.4356 27.4712 13.9297 26.848V27.723H15.4944V20.4181Z"
                fill="#F7B538" />
            <path
                d="M23.2 25.6814C23.1176 23.0431 18.849 23.8651 18.849 22.3935C18.849 21.903 19.2883 21.5715 20.1255 21.5715C20.9765 21.5715 21.4843 22.009 21.5392 22.6454H23.1039C23.0216 21.1871 21.8961 20.2988 20.1804 20.2988C18.3961 20.2988 17.2706 21.2401 17.2706 22.4068C17.2706 25.0848 21.6628 24.2628 21.6628 25.6946C21.6628 26.1984 21.1824 26.5696 20.2765 26.5696C19.4118 26.5696 18.8216 26.0791 18.7667 25.4825H17.1471C17.2157 26.8083 18.4922 27.8424 20.3039 27.8424C22.0882 27.8424 23.2 26.9143 23.2 25.6814Z"
                fill="#F7B538" />
        </svg>
    </a>
    <div class="flex-1 flex justify-end">
        @include('client.header.user')
    </div>
</header>
