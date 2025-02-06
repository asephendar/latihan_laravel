<x-layout_admin>
    <div class="container">
        <x-breadcrumbs :items="[
            [
                'label' => 'Home',
                'url' => '/',
                'icon' => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z',
            ],
            [
                'label' => 'Documents',
                'url' => '/documents',
                'icon' => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z',
            ],
            [
                'label' => 'Add Document',
                'icon' =>
                    'M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
            ],
        ]" />
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold">Manage Medicines</h2>
            <a href="{{ route('medicines.create') }}" class="btn btn-primary btn-sm text-white">Add Medicine</a>
        </div>

        {{-- @dd($medicines) --}}
        <div class="overflow-x-auto mt-12">
            <table class="table table-xs">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Expiry_date</th>
                        <th>Manufacturer</th>
                        <th>Category</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicinesPaginated as $medicine)
                        <tr>
                            <td>{{ $medicine['id'] }}</td>
                            <td>{{ $medicine['name'] }}</td>
                            <td>{{ $medicine['price'] ?? '' }}</td>
                            <td>{{ $medicine['quantity'] }}</td>
                            <td>{{ $medicine['expiry_date'] }}</td>
                            <td>{{ $medicine['manufacturer'] }}</td>
                            <td>{{ $medicine['category'] }}</td>
                            <td class="text-center">
                                <!-- Tombol Lihat -->
                                <a href="{{ route('medicines.show', $medicine['id']) }}" class="btn btn-ghost btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path
                                            d="M21.544 11.045c.304.426.456.64.456.955c0 .316-.152.529-.456.955C20.178 14.871 16.689 19 12 19c-4.69 0-8.178-4.13-9.544-6.045C2.152 12.529 2 12.315 2 12c0-.316.152-.529.456-.955C3.822 9.129 7.311 5 12 5c4.69 0 8.178 4.13 9.544 6.045" />
                                        <path d="M15 12a3 3 0 1 0-6 0a3 3 0 0 0 6 0" />
                                    </svg>
                                </a>

                                <!-- Tombol Edit -->
                                <a href="{{ route('medicines.edit', $medicine['id']) }}"
                                    class="btn btn-warning btn-ghost btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="orange" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path
                                            d="m16.214 4.982l1.402-1.401a1.982 1.982 0 0 1 2.803 2.803l-1.401 1.402m-2.804-2.804l-5.234 5.234c-1.045 1.046-1.568 1.568-1.924 2.205S8.342 14.561 8 16c1.438-.342 2.942-.7 3.579-1.056s1.16-.879 2.205-1.924l5.234-5.234m-2.804-2.804l2.804 2.804" />
                                        <path
                                            d="M21 12c0 4.243 0 6.364-1.318 7.682S16.242 21 12 21s-6.364 0-7.682-1.318S3 16.242 3 12s0-6.364 1.318-7.682S7.758 3 12 3" />
                                    </svg>
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('medicines.destroy', $medicine['id']) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-ghost btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="red" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <path
                                                d="m19.5 5.5l-.62 10.025c-.158 2.561-.237 3.842-.88 4.763a4 4 0 0 1-1.2 1.128c-.957.584-2.24.584-4.806.584c-2.57 0-3.855 0-4.814-.585a4 4 0 0 1-1.2-1.13c-.642-.922-.72-2.205-.874-4.77L4.5 5.5M3 5.5h18m-4.944 0l-.683-1.408c-.453-.936-.68-1.403-1.071-1.695a2 2 0 0 0-.275-.172C13.594 2 13.074 2 12.035 2c-1.066 0-1.599 0-2.04.234a2 2 0 0 0-.278.18c-.395.303-.616.788-1.058 1.757L8.053 5.5m1.447 11v-6m5 6v-6" />
                                        </svg>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Expiry_date</th>
                        <th>Manufacturer</th>
                        <th>Category</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </tfoot>
            </table>
            <!-- Pagination -->
            <div class="mt-3">
                {{ $medicinesPaginated->links() }}
            </div>
        </div>
    </div>
</x-layout_admin>
