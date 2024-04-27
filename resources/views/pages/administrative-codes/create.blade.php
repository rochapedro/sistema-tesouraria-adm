<x-layouts.default>
    <x-navbar />
    <x-sidebar />
    <div class="content-wrapper">
        @php
            $breadcrumbs = [
                ['url' => route('administrative-codes.index'), 'label' => 'Códigos Administrativos', 'active' => false],
                ['label' => 'Cadastrar código administrativo', 'active' => true]
            ];
        @endphp

        <x-header title="Códigos Administrativos" :breadcrumbs="$breadcrumbs" />

        <section class="content">
            <div class="container-fluid">
                <div class="mb-3 d-flex justify-content-end">
                    <a href="{{ route('administrative-codes.index') }}">
                        <button type="button" class="btn btn-primary">
                            Voltar
                        </button>
                    </a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastrar código administrativo</h3>
                    </div>

                    <div class="card-body">

                        <form id="quickForm" novalidate="novalidate" data-bitwarden-watching="1" action="{{ route('administrative-codes.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror"
                                    id="description" name="description" value="{{ old('description') }}" placeholder="Informe o código administrativo">
                                @error('description')
                                    <span id="description-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary" data-bitwarden-clicked="1">Cadastrar</button>
                        </form>
                    </div>
                </div>

                @if (session()->has('success'))
                    <script>
                        window.addEventListener('load', function() {
                            alert('Código administrativo cadastrado com sucesso.');
                        });
                    </script>
                @endif
            </div>
        </section>
    </div>
</x-layouts.default>
