@extends('layouts.adminbase')

@section('title', ' / Settings')

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Settings</h4>

    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">SETTINGS</h5>
                    <small class="text-muted float-end">Change Settings</small>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('admin.setting.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-general" aria-controls="navs-justified-general" aria-selected="true">
                                        <i class="tf-icons bx bx-home"></i> General
                                        <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-contact" aria-controls="navs-justified-contact" aria-selected="false">
                                        <i class="tf-icons bx bx-user"></i> Contact
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="false">
                                        <i class="tf-icons bx bx-message-square"></i> Messages
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-justified-general" role="tabpanel">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-fullname">Title</label>
                                                <input type="text" id="basic-default-fullname" name="title" class="form-control" value="burayabirşey" maxlength="50" />
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-company">Company</label>
                                                <input type="text" id="basic-default-company" name="company" class="form-control" value="burayabirşey" maxlength="50" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3"></div>
                                    <div class="mb-3">
                                        <span class="input-group-text">Keywords</span>
                                        <textarea class="form-control" aria-label="With textarea" name="keywords" maxlength="255">burayabirşey</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <span class="input-group-text">Description</span>
                                        <textarea class="form-control" aria-label="With textarea" name="description" maxlength="255">burayabirşey</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-justified-contact" role="tabpanel">
                                <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-address">Address</label>
                                                <input type="text" id="basic-default-address" name="address" class="form-control" value="burayabirşey" maxlength="150" />
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-email">Email</label>
                                                <input type="text" id="basic-default-email" name="email" class="form-control" value="burayabirşey" maxlength="75" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                                    <p>
                                        Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                                        cupcake gummi bears cake chocolate.
                                    </p>
                                    <p class="mb-0">
                                        Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                                        roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                                        jelly-o tart brownie jelly.
                                    </p>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->



@endsection