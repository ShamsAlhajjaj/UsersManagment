

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
All users        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Register at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {{-- @dd('xxxx',$users) --}}
    @foreach ($users as $item)
        
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{  $item->name  }}</td>
      <td>{{  $item->email  }}</td>
      <td>{{  $item->created_at  }}</td>
      <td><a href="user/{{$item->id}}">
        show
    </a></td>
    </tr>
    @endforeach

  </tbody>
</table>                </div>
            </div>
        </div>
    </div>
</x-app-layout>



