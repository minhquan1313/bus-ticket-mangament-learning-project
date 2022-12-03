@extends('layout.client')
@section('title', 'Đặt vé')

@section('body')
    <div class="space-y-6 py-6">
        <div class="flex">
            <form action="{{ route('booking.index') }}" method="GET" class="mx-auto">
                @include('client.booking_bar', [
                    'subPos' => 'bottom',
                    'tinh' => $tinh,
                    'from' => $_GET['from'] ?? '',
                    'to' => $_GET['to'] ?? '',
                    'time' => $_GET['time'] ?? date('Y-m-d'),
                    'person_count' => $_GET['person_count'] ?? '1',
                ])
            </form>
        </div>
        {{-- {{ date('Y-m-d H:i:s') }} --}}
        {{-- @php
            $d = new DateTime(date('Y-m-d H:i:s'));
            echo $d->format('Y-m-d H:i:s');
        @endphp --}}
        @if (count($chuyen_va_xe) > 0)

            <p class="text-center text-2xl font-semibold">Các chuyến được tìm thấy</p>
            <div class="container space-y-6">
                <div class="bg-oBlack2 rounded-xl">
                    <ul class="grid grid-cols-4 gap-5 p-5">
                        @foreach ($chuyen_va_xe as $cvx)
                            <li>
                                @include('client.booking.ticket_card', [
                                    'type' => 'bookNow',
                                    'href' => route('booking.detail', ['chuyen_id' => $cvx->chuyen_id]),
                                    'cvx' => $cvx,
                                ])
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
@endsection
