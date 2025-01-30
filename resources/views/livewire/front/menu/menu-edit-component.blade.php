@section('page-title')
    Menu Edit
@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Menu</h4>
                </div>

                <div class="card-body">
                    <div class="row mt-3">
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
                                    <label for="title" class="form-label">Url <span
                                            class="text-danger">*</span></label>
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
                                    <span wire:loading wire:target="title, type"
                                        class="spinner-border text-primary ms-2" role="status">
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

</div>
