<x-app-layout>
    <x-slot name="header">
        

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('master.master')

            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <form action="{{ route('addpost') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post</label>
                            <input name="post" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Write comment">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>
            </div>

            @foreach ($data as $data)
                <table class="table table-dark">
                    <thead class="flex">

                        <tr class="flex-row">
                            <th scope="col">Post</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>{{ $data->post }}</td>
                        </tr>

                    </tbody>
                </table>
            @endforeach



        </div>
    </div>
</x-app-layout>
