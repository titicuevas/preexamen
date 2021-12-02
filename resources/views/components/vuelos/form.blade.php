@csrf
<div class="mb-6">
    <label for="vuelos"
        class="text-sm font-medium text-gray-900 block mb-2 @error('vuelos') text-red-500 @enderror">
        Vuelos
    </label>
    <input type="text" name="vuelos" id="vuelos"
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('vuelos') border-red-500 @enderror"
        value="{{ old('vuelos', $aeropuertos->vuelos) }}">
    @error('vuelos')
        <p class="text-red-500 text-sm mt-1">
            {{ $message }}
        </p>
    @enderror
</div>
<div class="mb-6">
    <label for="aeropuertos"
        class="text-sm font-medium text-gray-900 block mb-2 @error('aeropuertos') text-red-500 @enderror">
        Aeropuertos
    </label>
    <input type="text" name="aeropuertos" id="aeropuertos"
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('aeropuertos') border-red-500 @enderror"
        value="{{ old('aeropuertos', $aeropuertos->vuelos) }}">
    @error('aeropuertos')
        <p class="text-red-500 text-sm mt-1">
            {{ $message }}
        </p>
    @enderror
</div>
<button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Enviar</button>
<a href="/vuelos"
    class="text-white border-green-700 border-2 bg-green-700 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Volver</a>
