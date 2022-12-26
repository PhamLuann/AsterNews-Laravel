@extends('admin.layouts.admin')
@section('title', 'Admin')
@section('content')
    <div class="min-h-screen">
        <div class="flex justify-center mt-11 mb-2">
            <div class="w-4/5 flex items-center justify-between">
                <p class="text-primary text-2xl font-bold m-0">All User</p>
                <a href="{{route('user.create')}}" class="text-primary text-xl">New User</a>
            </div>
        </div>
        @include('admin.partials.__alert')
        <div class="w-full flex justify-center relative">
            <table class="table-auto w-4/5">
                <thead class="bg-gray-200">
                <tr class="border-2">
                    <th class="border">No</th>
                    <th class="border">Name</th>
                    <th class="border">Email</th>
                    <th class="border">Password</th>
                    <th class="border">Role</th>
                    <th class="border"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr class="border-2">
                        <td>{{ $loop->iteration + ($users->currentPage() -1) * $users->perPage() }}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['password']}}</td>
                        <td>{{$user['role']}}</td>
                        <td class="flex justify-center">
                            <form action="{{route('user.delete')}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="text" value="{{$user['id']}}" name="id" hidden="">
                                <button type="submit" class="px-3 py-1 bg-red-600 rounded-md">Delete</button>
                            </form>
                            <form action="{{route('user.update', [$user['id']])}}" method="get">
                                <button type="submit" class="px-3 py-1 bg-yellow-300 rounded-md ml-2">Update</button>
                            </form>
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
