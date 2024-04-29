@extends ('layouts/app')

@section('title')
    Réseau Social Laravel - Création d'un post
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <form class="col-4 mx-auto" action="{{ route('posts.store')}}" method="POST">
                @csrf
                <h2 class="text-center">Création d'un post</h1>
                <div class="form-group">
                    <label for="content">Contenu</label>
                    {{-- <input required type="text" class="form-control" placeholder="modifier" name="pseudo"
                        value="{{ $user->pseudo }}" id="pseudo"> --}}
                    <textarea required class="form-control" name="content"  cols="30" rows="10">Contenu du post</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control"  name="image"
                         id="image">
                </div>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input required type="text" class="form-control" name="tags"
                        id="tags">
                    
                </div>

                <div class="d-flex justify-content-evenly mt-3">
                    <button type="submit" class="btn btn-primary ">Poster</button>

                    
                </div>
            </form>

            <a  class="text-center mt-2" href="{{ url()->previous() }}">Revenir à la page précédente</a>



        </div>

    </div>
@endsection
