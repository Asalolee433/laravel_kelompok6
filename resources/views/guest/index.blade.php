<x-app-layout>
    <div class="jadwal">
        <h1 class="text-3xl font-bold mb-4">Jadwal Lapangan Futsal</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Hari</th>
                    <th class="py-2 px-4 border-b">Jam</th>
                    <th class="py-2 px-4 border-b">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jadwal as $item)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $item->hari }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->jam }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>