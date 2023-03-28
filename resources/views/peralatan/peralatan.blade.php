<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ ucwords($title) }}</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">{{ ucwords($title) }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs float-start" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Lunas</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Cicilan</a>
                    </li>

                </ul>
                <button data-bs-target="#tambah" data-bs-toggle="modal" class="btn btn-md btn-primary float-end"><i
                        class="fas fa-plus-square"></i> Tambah</button>
            </div>

            <div class="card-body">
                @livewire('datatables')
            </div>
        </div>
    </section>

    <form action="{{ route('peralatan.create') }}" method="post">
        @csrf
        <x-modal id="tambah" title="Tambah Peralatan" size="modal-lg">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="tgl" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">No ID</label>
                        <input type="text" name="noid" class="form-control">
                    </div>

                </div>
            </div>
        </x-modal>
    </form>
    @section('scripts')
        <script>
            document.addEventListener('livewire:load', function() {
                Livewire.on('hideModal', function(data) {
                    $("#tambah").modal('hide')
                });
            });
            
        </script>
    @endsection

</x-app-layout>
