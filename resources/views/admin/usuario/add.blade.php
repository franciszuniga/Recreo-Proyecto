@extends('layouts.config')
@section('content')
    @include('admin.header')
    <div id="layoutSidenav">
        @include('admin.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header page-header-dark bg-gradient-primary-to-secondary mt-1">
                    <div class="page-header-content">
                        <div class="row justify-content-center">
                            <div class="col-12 col-xl-auto">
                                <h1 class="page-title">
                                    AGREGAR USUARIO
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body page-body-light pt-3 px-2">
                    <div class="card card-header-actions">
                        <div class="card-header">
                            Datos personales
                        </div>
                        <div class="card-body">
                            <img src="..." class="img-thumbnail" alt="...">
                            <form class="d-flex" role="addphotography">
                                <a href="#"> <button type="button" class="btn btn-primary" enable><em
                                            class='bx bxs-camera-plus'></em> Cargar Foto</button></a>

                            </form>
                            <br>
                            <div class="row g-3">
                                <br>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="DNI" aria-label="DNI">
                                    <br>
                                    <form class="d-flex" role="addDNI">
                                        <br>
                                        <a href="#"> <button type="button" class="btn btn-primary" enable><em
                                                    class='bx bx-search-alt'></em> Buscar</button></a>
                                    </form>
                                </div>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label for="disabledTextInputApellidoP" class="form-label">Apellido Paterno</label>
                                    <input readonly type="text" id="disabledTextInputApellidoP" class="form-control"
                                        placeholder="">
                                    <label for="disabledTextInputApellidoM" class="form-label">Apellido Materno</label>
                                    <input readonly type="text" id="disabledTextInputApellidoM" class="form-control"
                                        placeholder="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
