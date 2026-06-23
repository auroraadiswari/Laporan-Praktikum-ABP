<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar produk";
    }

    public function create()
    {
        return "Ini adalah halaman tambah produk";
    }

    public function store(Request $request)
    {
        return "Data produk berhasil disimpan";
    }

    public function show($id)
    {
        return "Ini adalah detail produk dengan ID: " . $id;
    }

    public function edit($id)
    {
        return "Ini adalah halaman edit produk dengan ID: " . $id;
    }

    public function update(Request $request, $id)
    {
        return "Data produk dengan ID " . $id . " berhasil diperbarui";
    }

    public function destroy($id)
    {
        return "Data produk dengan ID " . $id . " berhasil dihapus";
    }
}