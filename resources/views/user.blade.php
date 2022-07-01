<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('master.master')

            <table class="table table-striped text-left ">
               
               
               <a href="{{route('newuser')}}">
                <button  type="button" class="btn btn-outline-primary">Create new user</button>
             </a>
               
               
                <thead>
                    <tr>
                        <th scope="col">Users</th>
                        <th scope="col">Email</th>
                      
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr>
                            @if ($user->is_verified == false)
                                <td class="text-left" scope="row">{{ $user->name }}
                                <td class="text-left" scope="row">{{ $user->email }}
                                    <div class="col-md-12 bg-light text-right">
                                        <form action="{{route('block',['user' => $user ])}}" method="POST">
                                            @csrf 
                                            <button type="submit" class="btn btn-warning">Block</button>
                                        </form>
                                        
                                        {{-- route('blog.by.slug', ['slug' => 'someslug']) --}}
                                    </div>
                                </td>
                            @else
                                <td class="text-left" scope="row">
                                    <strike>{{ $user->name }} </strike>
                                    
                                    <div class="col-md-12 bg-light text-right">
                                        <form action="{{route('delete',['user' => $user])}}" method="POST">
                                            @csrf 
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <form action="{{route('unblock',['user' => $user])}}" method="POST">
                                            @csrf 
                                            <button type="submit" class="btn btn-info">Unblock</button>
                                        </form>
                                    </div>
                                </td>
                            @endif


                        </tr>
                    @endforeach



                </tbody>
            </table>



        </div>
    </div>
</x-app-layout>
