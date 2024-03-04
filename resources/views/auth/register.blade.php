@php
    $paises = [
        'Afganistán',
        'Albania',
        'Alemania',
        'Andorra',
        'Angola',
        'Antigua y Barbuda',
        'Arabia Saudita',
        'Argelia',
        'Argentina',
        'Armenia',
        'Australia',
        'Austria',
        'Azerbaiyán',
        'Bahamas',
        'Bangladés',
        'Barbados',
        'Baréin',
        'Bélgica',
        'Belice',
        'Benín',
        'Bielorrusia',
        'Birmania',
        'Bolivia',
        'Bosnia y Herzegovina',
        'Botsuana',
        'Brasil',
        'Brunéi',
        'Bulgaria',
        'Burkina Faso',
        'Burundi',
        'Bután',
        'Cabo Verde',
        'Camboya',
        'Camerún',
        'Canadá',
        'Catar',
        'Chad',
        'Chile',
        'China',
        'Chipre',
        'Ciudad del Vaticano',
        'Colombia',
        'Comoras',
        'Corea del Norte',
        'Corea del Sur',
        'Costa de Marfil',
        'Costa Rica',
        'Croacia',
        'Cuba',
        'Dinamarca',
        'Dominica',
        'Ecuador',
        'Egipto',
        'El Salvador',
        'Emiratos Árabes Unidos',
        'Eritrea',
        'Eslovaquia',
        'Eslovenia',
        'España',
        'Estados Unidos',
        'Estonia',
        'Etiopía',
        'Filipinas',
        'Finlandia',
        'Fiyi',
        'Francia',
        'Gabón',
        'Gambia',
        'Georgia',
        'Ghana',
        'Granada',
        'Grecia',
        'Guatemala',
        'Guyana',
        'Guinea',
        'Guinea-Bisáu',
        'Guinea Ecuatorial',
        'Haití',
        'Honduras',
        'Hungría',
        'India',
        'Indonesia',
        'Irak',
        'Irán',
        'Irlanda',
        'Islandia',
        'Islas Marshall',
        'Islas Salomón',
        'Israel',
        'Italia',
        'Jamaica',
        'Japón',
        'Jordania',
        'Kazajistán',
        'Kenia',
        'Kirguistán',
        'Kiribati',
        'Kuwait',
        'Laos',
        'Lesoto',
        'Letonia',
        'Líbano',
        'Liberia',
        'Libia',
        'Liechtenstein',
        'Lituania',
        'Luxemburgo',
        'Madagascar',
        'Malasia',
        'Malaui',
        'Maldivas',
        'Malí',
        'Malta',
        'Marruecos',
        'Mauricio',
        'Mauritania',
        'México',
        'Micronesia',
        'Moldavia',
        'Mónaco',
        'Mongolia',
        'Montenegro',
        'Mozambique',
        'Namibia',
        'Nauru',
        'Nepal',
        'Nicaragua',
        'Níger',
        'Nigeria',
        'Noruega',
        'Nueva Zelanda',
        'Omán',
        'Países Bajos',
        'Pakistán',
        'Palaos',
        'Panamá',
        'Papúa Nueva Guinea',
        'Paraguay',
        'Perú',
        'Polonia',
        'Portugal',
        'Reino Unido',
        'República Centroafricana',
        'República Checa',
        'República de Macedonia',
        'República del Congo',
        'República Democrática del Congo',
        'República Dominicana',
        'República Sudafricana',
        'Ruanda',
        'Rumania',
        'Rusia',
        'Samoa',
        'San Cristóbal y Nieves',
        'San Marino',
        'San Vicente y las Granadinas',
        'Santa Lucía',
        'Santo Tomé y Príncipe',
        'Senegal',
        'Serbia',
        'Seychelles',
        'Sierra Leona',
        'Singapur',
        'Siria',
        'Somalia',
        'Sri Lanka',
        'Suazilandia',
        'Sudán',
        'Sudán del Sur',
        'Suecia',
        'Suiza',
        'Surinam',
        'Tailandia',
        'Tanzania',
        'Tayikistán',
        'Timor Oriental',
        'Togo',
        'Tonga',
        'Trinidad y Tobago',
        'Túnez',
        'Turkmenistán',
        'Turquía',
        'Tuvalu',
        'Ucrania',
        'Uganda',
        'Uruguay',
        'Uzbekistán',
        'Vanuatu',
        'Venezuela',
        'Vietnam',
        'Yemen',
        'Yibuti',
        'Zambia',
        'Zimbabue',
    ];
@endphp
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
                <x-input-label for="name" :value="__('Nombre: ')" />
                @if ($errors->has('name'))
                    <x-text-input id="name" type="text" name="name" :value="old('name')" class="input-error"
                        required autofocus autocomplete="name" />
                @else
                    <x-text-input id="name" type="text" name="name" :value="old('name')" class="" required
                        autofocus autocomplete="name" />
                @endif
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="col-md-6">
                <x-input-label for="surname" :value="__('Apellido: ')" />
                @if ($errors->has('surname'))
                    <x-text-input id="surname" class="input-error" type="text" name="surname" :value="old('surname')"
                        required autocomplete="surname" />
                @else
                    <x-text-input id="surname" class="" type="text" name="surname" :value="old('surname')" required
                        autocomplete="surname" />
                @endif
                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
            </div>

            <div class="col-md-6">
                <x-input-label for="dni" :value="__('DNI: ')" />
                @if ($errors->has('dni'))
                    <x-text-input id="dni" class="input-error" type="text" name="dni" :value="old('dni')"
                        required autocomplete="dni" />
                @else
                    <x-text-input id="dni" class="" type="text" name="dni" :value="old('dni')"
                        required autocomplete="dni" />
                @endif
                <x-input-error :messages="$errors->get('dni')" class="mt-2" />
            </div>

            <div class="col-md-6">
                <x-input-label for="email" :value="__('Email: ')" />
                @if ($errors->has('email'))
                    <x-text-input id="email" class="input-error" type="text" name="email" :value="old('email')"
                        required autocomplete="email" />
                @else
                    <x-text-input id="email" class="" type="text" name="email" :value="old('email')"
                        required autocomplete="email" />
                @endif
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="col-md-6">
                <x-input-label for="password" :value="__('Password')" />
                @if ($errors->has('password'))
                    <x-text-input id="password" class="input-error" type="password" name="password" required
                        autocomplete="password" oncopy="return false" onpaste="return false" oncut="return false" />
                @else
                    <x-text-input id="password" class="" type="password" name="password" required
                        autocomplete="password" oncopy="return false" onpaste="return false" oncut="return false" />
                @endif
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="col-md-6">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="" type="password" name="password_confirmation"
                    required autocomplete="new-password" oncopy="return false" onpaste="return false"
                    oncut="return false" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="col-md-6">
                <x-input-label for="telephone" :value="__('Telefono: ')" />
                @if ($errors->has('telephone'))
                    <x-text-input id="telephone" class="input-error" type="tel" name="telephone" :value="old('telephone')"
                        autocomplete="telephone" />
                @else
                    <x-text-input id="telephone" class="" type="tel" name="telephone" :value="old('telephone')"
                        autocomplete="telephone" />
                @endif
                <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
            </div>

            <div class="col-md-6">
                <x-input-label for="country" :value="__('País: ')" />
                <select id="country" name="country" class="form-select">
                    <option value="" selected disabled>Seleccionar</option>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais }}">{{ $pais }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-12">
                <x-input-label for="bankingAccount" :value="__('Número de cuenta bancaria: ')" />
                @if ($errors->has('bankingAccount'))
                    <x-text-input id="bankingAccount" class="input-error" type="text" name="bankingAccount"
                        :value="old('bankingAccount')" required autocomplete="bankingAccount" />
                @else
                    <x-text-input id="bankingAccount" class="" type="text" name="bankingAccount"
                        :value="old('bankingAccount')" required autocomplete="bankingAccount" />
                @endif
                <x-input-error :messages="$errors->get('bankingAccount')" class="mt-2" />
            </div>

            <div class="col-md-12">
                <x-input-label for="about" :value="__('Sobre ti:')" />
                @if ($errors->has('about'))
                    @php
                        $aboutValue = old('about');
                    @endphp
                    <textarea id="about" name="about" class="input-error" rows="5" autocomplete="about">{{ $aboutValue }}</textarea>
                @else
                    <textarea id="about" name="about" class="" rows="5" :value="old('about')" autocomplete="about"></textarea>
                @endif
                <x-input-error :messages="$errors->get('about')" class="mt-2" />
            </div>

            <button type="submit" class="btn btn-primary">Registrarse</button>

        </form>
    </div>

</x-guest-layout>
