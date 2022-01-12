<x-layout>

    <form action="{{ route ('alumnos.store', [],false )}}" method="POST">

        <x-alumnos.from :alumno = "$alumno" />
    </form>
</x-layout>
