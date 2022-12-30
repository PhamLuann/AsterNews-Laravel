@extends('admin.layouts.admin')
@section('title', 'Admin')
@section('content')
    <div class="min-h-screen">
        <div class="flex justify-center mt-11 mb-2">
            <div class="w-4/5 flex items-center justify-between">
                <p class="text-primary text-2xl font-bold m-0">All User</p>
                <a href="{{route('admin.create')}}" class="text-primary text-xl">New User</a>
            </div>
        </div>
        @include('partials.__alert')
        <div class="w-full flex justify-center relative">
            <table class="table-auto w-4/5">
                <thead class="bg-gray-200">
                <tr class="border-2">
                    <th class="border">No</th>
                    <th class="border">Name</th>
                    <th class="border">Email</th>
                    <th class="border text-center">Role</th>
                    <th class="border text-center">Create By</th>
                    <th class="border text-center">Update By</th>
                    <th class="border text-center">Last login</th>
                    <th class="border text-center">Create at</th>
                    <th class="border text-center">Update at</th>
                    <th class="border text-center"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr class="border-2">
                        <td class="border">{{ $loop->iteration + ($users->currentPage() -1) * $users->perPage() }}</td>
                        <td class="border">{{$user['name']}}</td>
                        <td class="border">{{$user['email']}}</td>
                        <td class="border text-center">{{$user['role']}}</td>
                        <td class="border text-center">{{$user['createBy']}}</td>
                        <td class="border text-center">{{$user['updateBy']}}</td>
                        <td class="border text-center">{{$user['last_login']}}</td>
                        <td class="border text-center">{{$user['created_at']}}</td>
                        <td class="border text-center">{{$user['updated_at']}}</td>
                        <td class="flex justify-center">
                            @if($user['id'] == $admin['id'])

                            @else
                                <form action="{{route('admin.delete')}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="text" value="{{$user['id']}}" name="id" hidden="">
                                    <button type="submit" class="px-3 py-1 bg-red-600 rounded-md">Delete</button>
                                </form>
                                <form action="{{route('admin.update', [$user['id']])}}" method="get">
                                    <button type="submit" class="px-3 py-1 bg-yellow-300 rounded-md ml-2">Update</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="w-full flex justify-center mt-4">
            {{ $users->links() }}
        </div>
    </div>
@stop
