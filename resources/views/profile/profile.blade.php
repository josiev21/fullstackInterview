<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="text-align:center;">
                @foreach ($employeeProfile as $ep )
                    <p>name : {{$ep->name}}</p>
                    <p>position : {{$ep->position}}</p>
                    <p>department: {{$ep->department}}</p>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
