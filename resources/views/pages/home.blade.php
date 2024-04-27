<x-layouts.default>
    <x-navbar />
    <x-sidebar />
    <div class="content-wrapper">
        @php
            $breadcrumbs = [];
        @endphp

        <x-header title="Dashboard" :breadcrumbs="$breadcrumbs" />
        
        <section class="content">
            <div class="container-fluid">
                
                <div class="card">
                   
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.default>