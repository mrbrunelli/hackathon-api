@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-12 col-xl-12">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="fs-5 fw-bold mb-0">Resumo Cadastros</h2>
                                </div>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">Cadastro</th>
                                    <th class="border-bottom" scope="col">Registros</th>
                                    <th class="border-bottom" scope="col">Ativos</th>
                                    <th class="border-bottom" scope="col">Inativos</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        Cores
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        3,225
                                    </td>
                                    <td class="fw-bolder text-gray-500">

                                    </td>
                                    <td class="fw-bolder text-gray-500">

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        Marcas
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        2,987
                                    </td>
                                    <td class="fw-bolder text-gray-500">

                                    </td>
                                    <td class="fw-bolder text-gray-500">

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-gray-900" scope="row">
                                        Veículos
                                    </th>
                                    <td class="fw-bolder text-gray-500">
                                        2,844
                                    </td>
                                    <td class="fw-bolder text-gray-500">

                                    </td>
                                    <td class="fw-bolder text-gray-500">

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection