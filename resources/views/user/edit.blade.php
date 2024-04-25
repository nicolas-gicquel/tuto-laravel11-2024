@extends ('layouts/app')

@section('title')
    Réseau Social Laravel - Mon compte
@endsection

@section('content')
    <div class="container">

        <h1>Mon compte</h1>

        <h3 class="pb-3">Modifier mes informations </h3>

        <div class="row">

            <form class="col-4 mx-auto" action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="pseudo">Nouveau pseudo</label>
                    <input required type="text" class="form-control" placeholder="modifier" name="pseudo"
                        value="{{ $user->pseudo }}" id="pseudo">
                </div>

                <div class="form-group">
                    <label for="image">Nouvelle image</label>
                    <input type="text" class="form-control" placeholder="modifier" name="image"
                        value="{{ $user->image }}" id="image">
                </div>

                <div class="d-flex justify-content-evenly mt-3">
                    <button type="submit" class="btn btn-primary ">Valider</button>

                    <div class=" text-center">
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer le compte</button>
                        </form>
                    </div>
                </div>
            </form>



        </div>

    </div>
@endsection
