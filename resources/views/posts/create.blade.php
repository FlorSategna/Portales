<x-layouts.main>
    <x-slot:title>Crear un post</x-slot:title>
    <div class="container">
        <h1 class="text-center my-5">Crear un post nuevo</h1>
       
        @if($errors->any())
            <div class="alert alert-danger">
                Los datos enviados no son correctos. Revisa los campos con errores y vuelve a intentarlo.
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
            
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Título*</label>
                    <input type="text" id="title" name="title"
                        @class(['form-control', 'is-invalid' => $errors->has('title')])
                        @error('title') aria-invalid="true" aria-errormessage="error-title" @enderror
                        value="{{ old('title') }}">
                        @error('title') <div class="text-danger" id="error-title">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Categoría*</label>
                    <select id="category" name="category"
                        @class(['form-select', 'is-invalid' => $errors->has('category')])
                        @error('category') aria-invalid="true" aria-errormessage="error-category" @enderror>
                        <option value="">Seleccione una opción</option>
                        <option value="Urbana">Urbana</option>
                        <option value="De viaje">De viaje</option>
                    </select>
                        @error('category') <div class="text-danger" id="error-category">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="published_at" class="form-label">Fecha de publicación*</label>
                    <input type="date" id="published_at" name="published_at"
                        @class(['form-control', 'is-invalid' => $errors->has('published_at')])
                        @error('published_at') aria-invalid="true" aria-errormessage="error-published_at" @enderror
                        value="{{ old('published_at') }}">
                        @error('published_at') <div class="text-danger" id="error-published_at">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="tag" class="form-label">Etiqueta*</label>
                    <input type="text" id="tag" name="tag"
                        @class(['form-control', 'is-invalid' => $errors->has('tag')])
                        @error('tag') aria-invalid="true" aria-errormessage="error-tag" @enderror
                        value="{{ old('tag') }}">
                        @error('tag') <div class="text-danger" id="error-tag">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="content" class="form-label">Contenido*</label>
                    <textarea id="content" name="content" rows="6"
                        @class(['form-control', 'is-invalid' => $errors->has('content')])
                        @error('content') aria-invalid="true" aria-errormessage="error-content" @enderror>{{ old('content') }}</textarea>
                        @error('content') <div class="text-danger" id="error-content">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-12 mb-3 mt-3">
                    <button type="submit" class="btn btn-primary button-form">Cargar</button>
                </div>

            </div>
        </form>
    </div>
</x-layouts.main>