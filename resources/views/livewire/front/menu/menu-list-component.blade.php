@section('page-title')
    Menu List
@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Menu</h4>

                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addMenu">Add
                        Menu</button>
                </div>

                <div class="card-body">

                    <div class="row mt-3">
                        @if ($menus->count() > 0)
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Url</th>
                                            <th>Sub</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $index => $menu)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $menu->title }}</td>
                                                <td>{{ $menu->url }}</td>
                                                <td>{{ $menu->parent->title ?? 'N/A' }}</td>
                                                <td>{{ \Carbon\Carbon::parse($menu->created_at)->format('d, M Y') }}
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('menu.edit', ['id' => $menu->id]) }}"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fa-solid fa-eye"></i></a>
                                                        <button data-bs-toggle="modal" type="button"
                                                            class="btn btn-danger shadow btn-xs sharp"
                                                            data-bs-target="#confirmDeleteModal"
                                                            onclick="setDeleteUrl('{{ route('menu.delete', [$menu->id]) }}');">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p class="text-center text-info">No record found</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="addMenu">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="storeMenu">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Title <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="title"
                                    class="form-control @error('title') is-invalid @enderror" wire:model="title"
                                    placeholder="Enter title">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Url <span class="text-danger">*</span></label>
                                <input type="text" id="title"
                                    class="form-control @error('url') is-invalid @enderror" wire:model="url"
                                    placeholder="Enter url">
                                @error('url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Order <span
                                        class="text-danger">*</span></label>
                                <input type="number" id="title"
                                    class="form-control @error('url') is-invalid @enderror" wire:model="order"
                                    placeholder="Enter Order">
                                @error('order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="type" class="form-label">Parent<span
                                        class="text-danger">*</span></label>
                                <select id="type" class="form-control @error('type') is-invalid @enderror"
                                    wire:model="parent_id">
                                    <option value="">Select Type</option>
                                    @foreach ($menus as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end mt-3 position-relative">
                                <!-- Button (Visible when not loading) -->
                                <button type="submit" class="btn btn-primary" wire:loading.remove
                                    wire:target="title, type">
                                    Save
                                </button>

                                <!-- Loader (Visible when loading) -->
                                <span wire:loading wire:target="title, type" class="spinner-border text-primary ms-2"
                                    role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
