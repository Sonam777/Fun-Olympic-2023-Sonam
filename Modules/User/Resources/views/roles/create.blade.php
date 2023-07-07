@extends('setting::layouts.master')

@section('title', 'Create Role')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('style')
    <style>
        .custom-control-label {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Role <i class="bi bi-check"></i>
                        </button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Role Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="permissions">Permissions <span class="text-danger">*</span></label>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="select-all">
                                    <label class="custom-control-label" for="select-all">Give All Permissions</label>
                                </div>
                            </div>

                            <div class="row">

                                <!-- User Management Permission -->
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            User Mangement
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_user_management" name="permissions[]"
                                                               value="access_user_management" {{ old('access_user_management') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_user_management">Access</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="edit_own_profile" name="permissions[]"
                                                               value="edit_own_profile" {{ old('edit_own_profile') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_own_profile">Own Profile</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- subscriber -->
                                {{-- <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Subscriber
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_subscriber" name="permissions[]"
                                                               value="access_subscriber" {{ old('access_subscriber') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_subscriber">Access</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Settings -->
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Settings
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_settings" name="permissions[]"
                                                               value="access_settings" {{ old('access_settings') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_settings">Access</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sliders Permission -->
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Sliders
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_sliders" name="permissions[]"
                                                               value="access_sliders" {{ old('access_sliders') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_sliders">Access</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="show_sliders" name="permissions[]"
                                                               value="show_sliders" {{ old('show_sliders') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_sliders">View</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="create_sliders" name="permissions[]"
                                                               value="create_sliders" {{ old('create_sliders') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_sliders">Create</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="edit_sliders" name="permissions[]"
                                                               value="edit_sliders" {{ old('edit_sliders') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_sliders">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="delete_sliders" name="permissions[]"
                                                               value="delete_sliders" {{ old('delete_sliders') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_sliders">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tournaments Permission -->
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Tournaments
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_tournaments" name="permissions[]"
                                                               value="access_tournaments" {{ old('access_tournaments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_tournaments">Access</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="show_tournaments" name="permissions[]"
                                                               value="show_tournaments" {{ old('show_tournaments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_tournaments">View</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="create_tournaments" name="permissions[]"
                                                               value="create_tournaments" {{ old('create_tournaments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_tournaments">Create</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="edit_tournaments" name="permissions[]"
                                                               value="edit_tournaments" {{ old('edit_tournaments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_tournaments">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="delete_tournaments" name="permissions[]"
                                                               value="delete_tournaments" {{ old('delete_tournaments') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_tournaments">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Blogs Permission -->
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Blogs
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_blogs" name="permissions[]"
                                                               value="access_blogs" {{ old('access_blogs') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_blogs">Access</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="show_blogs" name="permissions[]"
                                                               value="show_blogs" {{ old('show_blogs') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_blogs">View</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="create_blogs" name="permissions[]"
                                                               value="create_blogs" {{ old('create_blogs') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_blogs">Create</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="edit_blogs" name="permissions[]"
                                                               value="edit_blogs" {{ old('edit_blogs') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_blogs">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="delete_blogs" name="permissions[]"
                                                               value="delete_blogs" {{ old('delete_blogs') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_blogs">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Events Permission -->
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Events
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_events" name="permissions[]"
                                                               value="access_events" {{ old('access_events') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_events">Access</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="show_events" name="permissions[]"
                                                               value="show_events" {{ old('show_events') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_events">View</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="create_events" name="permissions[]"
                                                               value="create_events" {{ old('create_events') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_events">Create</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="edit_events" name="permissions[]"
                                                               value="edit_events" {{ old('edit_events') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_events">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="delete_events" name="permissions[]"
                                                               value="delete_events" {{ old('delete_events') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_events">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Match Permission -->
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Match
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_match" name="permissions[]"
                                                               value="access_match" {{ old('access_match') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_match">Access</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="show_match" name="permissions[]"
                                                               value="show_match" {{ old('show_match') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_match">View</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="create_match" name="permissions[]"
                                                               value="create_match" {{ old('create_match') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_match">Create</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="edit_match" name="permissions[]"
                                                               value="edit_match" {{ old('edit_match') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_match">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="delete_match" name="permissions[]"
                                                               value="delete_match" {{ old('delete_match') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_match">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gallery Permission -->
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <div class="card h-100 border-0 shadow">
                                        <div class="card-header">
                                            Gallery
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="access_gallery" name="permissions[]"
                                                               value="access_gallery" {{ old('access_gallery') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="access_gallery">Access</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="show_gallery" name="permissions[]"
                                                               value="show_gallery" {{ old('show_gallery') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="show_gallery">View</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="create_gallery" name="permissions[]"
                                                               value="create_gallery" {{ old('create_gallery') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="create_gallery">Create</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="edit_gallery" name="permissions[]"
                                                               value="edit_gallery" {{ old('edit_gallery') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="edit_gallery">Edit</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="delete_gallery" name="permissions[]"
                                                               value="delete_gallery" {{ old('delete_gallery') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="delete_gallery">Delete</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#select-all').click(function() {
                var checked = this.checked;
                $('input[type="checkbox"]').each(function() {
                    this.checked = checked;
                });
            })
        });
    </script>
@endsection
