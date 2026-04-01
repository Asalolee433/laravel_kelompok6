<x-app-layout>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
        .edit {
            animation: slideIn 2s ease-in-out;
            padding: 100px;
            border: 5px solid #aaa;
            background-color: #202020;
            color: white;
        }
        .edit h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .edit form {
            background-color: #524f4f;
            padding: 15px;
            border-radius: 10px;
        }
        .edit form div {
            margin-bottom: 15px;
        }
        .edit form label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .edit form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .edit form button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <div class="edit">
        <h1 class="text-3xl font-bold mb-4">Edit Jadwal Lapangan Futsal</h1>
        <form action="{{ route('dashboard.update', $jadwal->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="nama_hari" class="block text-gray-700 font-bold mb-2">Nama Hari:</label>
                <input type="text" name="nama_hari" id="nama_hari" value="{{ $jadwal->nama_hari }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>
            <div class="mb-4">
                <label for="tipe_hari" class="block text-gray-700 font-bold mb-2">Tipe Hari:</label>
                <input type="text" name="tipe_hari" id="tipe_hari" value="{{ $jadwal->tipe_hari }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
                <input type="text" name="status" id="status" value="{{ $jadwal->status }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
        </form>
    </div>
</x-app-layout>