<!-- resources/views/categories/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add New Category</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>2024-08-26</td>
                <td>
                    <!-- Nút Sửa -->
                    <a href="#" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <!-- Nút Xóa -->
                    <form action="#" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="ti-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>2024-08-26</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">
                        <i class="ti ti-cut"></i>
                    </a>
                    <form action="#" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="ti ti-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>2024-08-26</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="#" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="ti-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>