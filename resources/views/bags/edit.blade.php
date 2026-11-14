<x-layouts.main>
    <x-slot:title>Editar mochila</x-slot:title>
    <div class="container">
    <h1 class="text-center my-5">Editar una mochila</h1>

         @if($errors->any())
            <div class="alert alert-danger">Los datos enviados no son correctos. Revisa los campos con errores y vuelve a intentarlo.</div>
        @endif

        <form action="{{ route('bags.update', ['id' => $bag->bag_id]) }}" id="contactForm" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">

            
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nombre de la mochila*</label>
                    <input type="text" id="name" name="name"
                    @class([ 'form-control', 'is-invalid' => $errors->has('name'), ])
                    @error('name') aria-invalid="true" aria-errormessage="error-name"@enderror value="{{ old('name', $bag->name) }}" >
                    @error('name') <div class="text-danger" id="error-name">{{ $message }}</div>@enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="photo" class="form-label">Reemplazar Foto*</label>
                    <input type="file" id="photo" name="photo"
                        @class(['form-control', 'is-invalid' => $errors->has('photo')])
                        @error('photo') aria-invalid="true" aria-errormessage="error-photo" @enderror>

                        @error('photo')
                            <div class="text-danger" id="error-photo">{{ $message }}</div>
                        @enderror
                </div>


                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Categoría*</label>
                    <select id="category" name="category"
                    @class([ 'form-select', 'is-invalid' => $errors->has('category'), ])
                    @error('category') aria-invalid="true" aria-errormessage="error-category" @enderror >
                        <option value="">Seleccione una opción</option>
                        <option value="Urbana" {{ old('category', $bag->category) == 'Urbana' ? 'selected' : '' }}>Urbana</option>
                        <option value="De viaje" {{ old('category', $bag->category) == 'De viaje' ? 'selected' : '' }}>De viaje</option>
                    </select>
                    @error('category') <div class="text-danger" id="error-category">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="gender" class="form-label">Género*</label>
                    <select id="gender" name="gender"
                    @class([ 'form-select', 'is-invalid' => $errors->has('gender'), ])
                    @error('gender') aria-invalid="true" aria-errormessage="error-gender" @enderror >
                        <option value="">Seleccione una opción</option>
                        <option value="Unisex" {{ old('gender', $bag->gender) == 'Unisex' ? 'selected' : '' }}>Unisex</option>
                        <option value="Mujer" {{ old('gender', $bag->gender) == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                        <option value="Hombre" {{ old('gender', $bag->gender) == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                    </select>
                    @error('gender') <div class="text-danger" id="error-gender">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="price" class="form-label">Precio*</label>
                    <input type="number" id="price" name="price"
                    @class([ 'form-control', 'is-invalid' => $errors->has('price'), ])
                    @error('price') aria-invalid="true" aria-errormessage="error-price" @enderror value="{{ old('price', $bag->price) }}" >
                    @error('price') <div class="text-danger" id="error-price">{{ $message }}</div> @enderror
                </div>


                <div class="col-md-6 mb-3">
                    <label for="liters" class="form-label">Litros*</label>
                    <input type="number" id="liters" name="liters"
                    @class([ 'form-control', 'is-invalid' => $errors->has('liters'), ])
                    @error('liters') aria-invalid="true" aria-errormessage="error-liters" @enderror value="{{ old('liters', $bag->liters) }}" >
                    @error('liters') <div class="text-danger" id="error-liters">{{ $message }}</div> @enderror
                </div>


                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label">Descripción*</label>
                    <textarea id="description" name="description" rows="4"
                    @class([ 'form-control', 'is-invalid' => $errors->has('description'), ])
                    @error('description') aria-invalid="true" aria-errormessage="error-description"
                    @enderror >{{ old('description', $bag->description) }}</textarea>
                    @error('description') <div class="text-danger" id="error-description">{{ $message }}</div> @enderror
                </div>

                
                <div class="col-md-12 mb-3 mt-3">
                    <button type="submit" class="btn btn-primary button-form">Actualizar</button>
                </div>

            </div>
        </form>
    </div>
</x-layouts.main>