<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $medicines = Medicine::all();
        $medicines = [
            ['id' => 1, 'name' => 'Paracetamol', 'price' => 5000, 'quantity' => 50, 'expiry_date' => '2023-12-31', 'manufacturer' => 'Pharma Inc.', 'category' => 'Pain Relief'],
            ['id' => 2, 'name' => 'Aspirin', 'price' => 3000, 'quantity' => 100, 'expiry_date' => '2024-06-30', 'manufacturer' => 'Health Corp.', 'category' => 'Pain Relief'],
            ['id' => 3, 'name' => 'Ibuprofen', 'price' => 7000, 'quantity' => 75, 'expiry_date' => '2024-11-30', 'manufacturer' => 'Med Solutions', 'category' => 'Pain Relief'],
            ['id' => 4, 'name' => 'Metformin', 'price' => 25000, 'quantity' => 80, 'expiry_date' => '2024-08-31', 'manufacturer' => 'Pharma Inc.', 'category' => 'Diabetes'],
            ['id' => 5, 'name' => 'Lisinopril', 'price' => 30000, 'quantity' => 90, 'expiry_date' => '2025-03-31', 'manufacturer' => 'Health Corp.', 'category' => 'Blood Pressure'],
            ['id' => 6, 'name' => 'Levothyroxine', 'price' => 20000, 'quantity' => 110, 'expiry_date' => '2024-09-30', 'manufacturer' => 'Med Solutions', 'category' => 'Thyroid'],
            ['id' => 7, 'name' => 'Atorvastatin', 'price' => 45000, 'quantity' => 130, 'expiry_date' => '2025-02-28', 'manufacturer' => 'Pharma Inc.', 'category' => 'Cholesterol'],
            ['id' => 8, 'name' => 'Albuterol', 'price' => 35000, 'quantity' => 140, 'expiry_date' => '2024-07-31', 'manufacturer' => 'Health Corp.', 'category' => 'Asthma'],
            ['id' => 9, 'name' => 'Simvastatin', 'price' => 35000, 'quantity' => 100, 'expiry_date' => '2024-12-31', 'manufacturer' => 'Pharma Inc.', 'category' => 'Cholesterol'],
            ['id' => 10, 'name' => 'Omeprazole', 'price' => 40000, 'quantity' => 200, 'expiry_date' => '2025-06-30', 'manufacturer' => 'Health Corp.', 'category' => 'Acid Reflux'],
            ['id' => 11, 'name' => 'Amlodipine', 'price' => 45000, 'quantity' => 150, 'expiry_date' => '2024-11-30', 'manufacturer' => 'Med Solutions', 'category' => 'Blood Pressure'],
            ['id' => 12, 'name' => 'Losartan', 'price' => 50000, 'quantity' => 120, 'expiry_date' => '2025-01-31', 'manufacturer' => 'Pharma Inc.', 'category' => 'Blood Pressure'],
            ['id' => 13, 'name' => 'Gabapentin', 'price' => 55000, 'quantity' => 180, 'expiry_date' => '2024-10-31', 'manufacturer' => 'Health Corp.', 'category' => 'Nerve Pain'],
        ];

        // Pagination manual menggunakan Laravel Collection
        $currentPage = Paginator::resolveCurrentPage() ?: 1;
        $perPage = 10; // Item per halaman
        $medicineCollection = collect($medicines);
        $currentPageItems = $medicineCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $medicinesPaginated = new LengthAwarePaginator($currentPageItems, count($medicineCollection), $perPage, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
        ]);

        return view('dashboards.admin.medicines.index', compact('medicinesPaginated'));
        // return view('dashboards.admin.medicines.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
