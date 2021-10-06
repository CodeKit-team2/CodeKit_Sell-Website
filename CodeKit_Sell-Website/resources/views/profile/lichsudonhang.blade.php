@extends('profile.temp')
@section('content')
    <div>

    </div>
    <div class="">
        <p class="font-semibold text-2xl pl-3 pt-3">Lịch sử đơn hàng</p>
        
      {{----------------------------------------------- --}}
            <div class="w-full">
                <div class="bg-white shadow-md rounded mt-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-5 text-left">Mã đơn hàng</th>
                                <th class="py-3 px-6 text-left">Ngày mua</th>
                                <th class="py-3 px-6 text-center">Tổng tiền</th>
                                <th class="py-3 px-6 text-center">Trạng thái</th>
                                <th class="py-3 px-6 text-center">Bình luận</th>
                            </tr>
                        </thead>

                        @foreach ($users as $v)
                        
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-4 text-left whitespace-nowrap">
                                    <div class="flex justify-center pr-14">
                                        <a href="" class="font-medium text-blue-400">{{ $v->o_id }}</a>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="text-md text-black">{{$v->o_created_at}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <span class="text-md text-black">{{$v->o_cost}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        @if ($v->o_state == 1)
                                            <span class="text-md text-black">Đã giao</span>
                                        @else <span class="text-md text-black">Chưa giao</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center max-w-xl">
                                    <div class="flex item-center justify-center">
                                        <span class="text-md text-black">{{$v->o_comment}}</span>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

    </div>
@endsection