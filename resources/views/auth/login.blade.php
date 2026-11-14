<x-layouts.main>
    <x-slot:title>Iniciar sesión</x-slot:title>

    <div class="row my-5 justify-content-center">
        <div class="col col-md-5">

            <h1 class="text-center mb-5 fw-bold">Iniciar Sesión</h1>

            <form class="row g-3" action="{{ route('auth.login.process') }}" method="POST">
                <div class="col-12 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>


        </div>


    </div>
</x-layouts.main>