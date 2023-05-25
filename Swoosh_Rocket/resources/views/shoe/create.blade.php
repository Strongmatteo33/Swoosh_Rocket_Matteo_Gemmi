<!-- Pagina ADMIN per aggiungere nuovi prodotti -->

<x-layout>
    
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form action="{{route('store')}}" method="POST" class="p-5 shadow" enctype="multipart/form-data">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
                @csrf

                <div class="mb-3">
                    <h2>Aggiungi Scarpa</h2>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Nome Scarpa</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" class="form-control" id="price" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="size" class="form-label">Taglia</label>
                    <input type="text" name="size" class="form-control" id="size" value="{{ old('size') }}">
                </div>
                <div class="mb-3">
                    <label for="style" class="form-label">Style</label>
                    <input type="text" name="style" class="form-control" id="style" value="{{ old('size') }}">
                </div>
                <div class="mb-3">
                    <label for="colorway" class="form-label">Colorway</label>
                    <input type="text" name="colorway" class="form-control" id="colorway" value="{{ old('size') }}">
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Immagine</label>
                    <input type="file" name="cover" class="form-control" id="cover">
                </div>
                
                <button type="submit" class="btn btn-primary">Inserisci la scarpa</button>
            </form>
        </div>
    </div>
</div>

</x-layout>