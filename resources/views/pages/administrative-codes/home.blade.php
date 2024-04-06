<x-layouts.default>
    <x-navbar />
    <x-sidebar />
    <div class="content-wrapper">
        @php
            $breadcrumbs = [['url' => route('administrative-codes.index'), 'label' => 'Códigos Administrativos', 'active' => true]];
            $headers = ['Descrição'];
        @endphp

        <x-header title="Códigos Administrativos" :breadcrumbs="$breadcrumbs" />
        
        <section class="content">
            <div class="container-fluid">
                <div class="mb-3 d-flex justify-content-end">
                    <a href="{{ route('administrative-codes.create') }}">
                        <button type="button" class="btn btn-primary">
                            Cadastrar novo código administrativo
                        </button>
                    </a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Códigos administrativos</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Descrição</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($administrative_codes as $administrative_code)
                                <tr>
                                    <td>{{ $administrative_code->id }}</td>
                                    <td>{{ $administrative_code->description }}</td>
                                    <td style="width: 95px">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                            <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>

                @if (session()->has('success'))
                <script>
                    window.addEventListener('load', function() {
                        alert('Código cadastrado com sucesso.');
                    });
                </script>
                @endif
            </div>
        </section>
    </div>
</x-layouts.default>