<x-guest-layout>
    <div class="container">
        <form id="registro_usuario_form" name="registro_usuario_form" method="POST" class="row g-3"
            action="{{ route('register') }}">
            @csrf
            <div class="col-md-6">
                <h2 class="mb-4">Formulario de Registro</h2>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="col-md-6">
                <label for="surname" class="form-label">Apellidos:</label>
                <input type="text" id="surname" name="surname" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="dni" class="form-label">DNI:</label>
                <input type="text" id="dni" name="dni" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="password_confirmation" class="form-label">Repetir Contraseña:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                    required>
            </div>

            <div class="col-md-6">
                <label for="telephone" class="form-label">Teléfono:</label>
                <input type="tel" id="telephone" name="telephone" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="country" class="form-label">País:</label>
                <select id="country" name="country" class="form-select">
                    <option value="Argentina">Argentina</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Chile">Chile</option>
                    <!-- Otros países... -->
                </select>
            </div>

            <div class="col-md-12">
                <label for="bankingAccount" class="form-label">Número de cuenta bancaria:</label>
                <input type="text" id="bankingAccount" name="bankingAccount" class="form-control" required>
            </div>

            <div class="col-md-12">
                <label for="about" class="form-label">Sobre ti:</label>
                <textarea id="about" name="about" class="form-control" rows="5" required></textarea>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </form>
    </div>

</x-guest-layout>
