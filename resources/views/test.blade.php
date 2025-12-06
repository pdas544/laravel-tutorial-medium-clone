<x-guest-layout>
    <div class="p-8">
        <!-- Color Test -->
        <div class="mb-6 p-4 bg-red-500 text-white rounded-lg">
            This should have a red background (bg-red-500)
        </div>

        <!-- Responsive Test -->
        <div class="mb-6">
            <div class="text-sm md:text-lg lg:text-xl font-bold text-blue-600">
                This text should get larger on bigger screens
            </div>
        </div>

        <!-- Flex/Grid Test -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-green-400 p-4 rounded border">Box 1</div>
            <div class="bg-yellow-400 p-4 rounded">Box 2</div>
            <div class="bg-purple-400 p-4 rounded">Box 3</div>
        </div>

        <!-- Hover Effect Test -->
        <button class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition">
            Hover over me
        </button>
    </div>
</x-guest-layout>
