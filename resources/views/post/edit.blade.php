@extends ('layouts/app')

@section('title')
    Réseau Social Laravel - Création d'un post
@endsection

@section('content')
    <div class="container">

        <div class="row">

            <form class="col-4 mx-auto" action="{{ route('posts.update', $post) }}" method="POST">
                @csrf
                @method('PUT')
                <h2 class="text-center">Modifier un post</h1>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea required class="form-control" name="content" cols="30" rows="10">{{ $post->content }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" class="form-control" name="image" value="{{ $post->image }}"
                            id="image">
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <input required type="text" class="form-control" name="tags" value="{{ $post->tags }}"
                            id="tags">

                    </div>

                    <div class="d-flex justify-content-evenly mt-3">
                        <button type="submit" class="btn btn-primary ">Modifier</button>
                        <div class=" text-center">
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer le post</button>
                            </form>
                        </div>

                    </div>
            </form>



        </div>

    </div>
@endsection
