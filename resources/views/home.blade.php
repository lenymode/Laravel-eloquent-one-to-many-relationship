@include('master.master')

<nav class="navbar navbar-dark bg-dark">
    <a href="{{ route('login') }}">Dashboard</a>
</nav>





{{-- comments --}}
<div class="container mt-5">



    <div class="d-flex justify-content-center row">

        <div class="col-md-8">
            <div class="d-flex flex-column comment-section">
                @foreach ($comments as $comment)
                    <div class="bg-white p-2">
                        <div class="d-flex flex-row user-info">
                            <div class="d-flex flex-column justify-content-start ml-2"><span
                                    class="d-block font-weight-bold name ">{{ $comment->user->name }}</span>
                                {{-- <span class="date text-black-50">Shared publicly - Jan 2020</span> --}}
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="comment-text">{{ $comment->post }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="bg-white">
                </div>
                <form action="{{ route('addpost2') }}" method="POST">
                    @csrf
                    <div class="bg-light p-2">
                        <div class="d-flex flex-row align-items-start">

                            <input name="post" type="text" class="form-control ml-1 shadow-none textarea">
                        </div>
                        <div class="mt-2 text-right">
                            <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>
