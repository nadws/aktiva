<div>
    <button class="form-control mb-5" type="button" data-bs-target="#tambah" data-bs-toggle="modal">Click</button>
    <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="table1_length"><label>Show <select wire:model="showPage" name="table1_length"
                            aria-controls="table1" class="form-select form-select-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries</label></div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="table1_filter" class="dataTables_filter">
                    <label>Search:
                    <input wire:model="search" type="search"
                            class="form-control form-control-sm" placeholder="" aria-controls="table1"></label></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table dataTable no-footer" id="" aria-describedby="table1_info">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (empty($db))
                            <tr class="odd">
                                <td valign="top" colspan="6" class="dataTables_empty">No data available in table
                                </td>
                            </tr>
                        @else
                            @foreach ($db as $no => $d)
                                <tr>
                                    <td>{{ $no + $db->firstItem() }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->email }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>

                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-5">
                {{-- <div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Showing 0 to 0 of 0
                    entries</div> --}}
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="table1_paginate">
                    {{ $db->links() }}
                </div>
            </div>
        </div>
    </div>

    <form wire:submit.prevent='simpan'>
        <div wire:ignore.self id="tambah" class="modal fade" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            tambah
                        </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" wire:model="nama">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
