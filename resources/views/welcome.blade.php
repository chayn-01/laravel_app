<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-blue-600 shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-white text-xl font-bold">Lost & Found</h1>

            <div class="space-x-4">
                <a href="#" class="text-white hover:underline">Home</a>
                <a href="#" class="text-white hover:underline">Report Item</a>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="max-w-5xl mx-auto px-4 mt-10">

        <!-- HEADER -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800">
                Lost and Found Items
            </h2>
            <p class="text-gray-500">
                Report and find lost belongings easily
            </p>
        </div>

        <!-- FORM -->
        <div class="bg-white p-6 rounded-xl shadow-md mb-10 max-w-xl mx-auto">
            <h3 class="text-xl font-semibold mb-4">Report Lost Item</h3>

            <form>
                <input type="text" placeholder="Item Name"
                    class="w-full mb-3 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input type="text" placeholder="Location"
                    class="w-full mb-3 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                <textarea placeholder="Description"
                    class="w-full mb-3 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>

                <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                    Submit
                </button>
            </form>
        </div>

        <!-- TABLE -->
        <div class="bg-white p-6 rounded-xl shadow-md">
            <h3 class="text-xl font-semibold mb-4">Reported Items</h3>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-200 text-left">
                            <th class="p-3">Item</th>
                            <th class="p-3">Location</th>
                            <th class="p-3">Description</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-t">
                            <td class="p-3">Wallet</td>
                            <td class="p-3">Library</td>
                            <td class="p-3">Black leather wallet</td>
                        </tr>

                        <tr class="border-t">
                            <td class="p-3">Phone</td>
                            <td class="p-3">Cafeteria</td>
                            <td class="p-3">Samsung phone with blue case</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>