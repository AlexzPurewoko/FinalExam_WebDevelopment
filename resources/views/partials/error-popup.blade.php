@if ($errors->any())
    <div id="error-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-red-600">Errors</h2>
                <button id="close-popup" class="text-gray-600 hover:text-gray-900">&times;</button>
            </div>
            <ul class="mt-4">
                @foreach ($errors->all() as $error)
                    <li class="text-red-600">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <script>
        document.getElementById('close-popup')?.addEventListener('click', function () {
            document.getElementById('error-popup').style.display = 'none';
        });
    </script>
@endif
