@extends('layouts.adminbase')

@section('title', $setting->company. ' / Settings')

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
                        <div class="form-group" hidden>
                            <label>Id</label>
                            <input class="form-control" name="id" value="{{$setting->id}}" type="text">
                        </div>
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-general" aria-controls="navs-justified-general" aria-selected="true">
                                        <i class="tf-icons bx bx-home"></i> General
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-contactpanel" aria-controls="navs-justified-general" aria-selected="false">
                                        <i class="tf-icons bx bx-user"></i> Contact
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-smtp" aria-controls="navs-justified-messages" aria-selected="false">
                                        <i class="tf-icons bx bx-message-square"></i> SMTP
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-about" aria-controls="navs-justified-messages" aria-selected="false">
                                        <i class="tf-icons bx bx-message-square"></i> About
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-contactus" aria-controls="navs-justified-messages" aria-selected="false">
                                        <i class="tf-icons bx bx-message-square"></i> Contact Us
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-references" aria-controls="navs-justified-messages" aria-selected="false">
                                        <i class="tf-icons bx bx-message-square"></i> References
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="navs-justified-general" role="tabpanel">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-fullname">Title</label>
                                                <input type="text" id="basic-default-fullname" name="title" class="form-control" value="{{$setting->title}}" maxlength="50" />
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-company">Company</label>
                                                <input type="text" id="basic-default-company" name="company" class="form-control" value="{{$setting->company}}" maxlength="50" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3"></div>

                                    <div class="mb-3">
                                        <span class="input-group-text">Keywords</span>
                                        <textarea class="form-control" aria-label="With textarea" name="keywords" maxlength="255">{{$setting->keywords}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <span class="input-group-text">Description</span>
                                        <textarea class="form-control" aria-label="With textarea" name="description" maxlength="255">{{$setting->description}}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Status</label>
                                        <select class="form-select" id="statusSettings" name="status" aria-label="Default select example">
                                            <option value="True">True</option>
                                            <option value="False">False</option>
                                        </select>
                                    </div>
                                    <script>
                                        document.getElementById("statusSettings").value = "{{$setting->status}}";
                                    </script>
                                    
                                    <div class="form-text"></div>
                                    
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Icon</label>
                                        <input class="form-control" type="file" id="formFile" name="icon" />
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                @if ($setting->icon)
                                                <img src="{{Storage::url($setting->icon)}}" alt class="w-px-40 h-auto rounded-circle">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="navs-justified-contactpanel" role="tabpanel">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-address">Address</label>
                                                <input type="text" id="basic-default-address" name="address" class="form-control" value="{{$setting->address}}" maxlength="150" />
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-email">Email</label>
                                                <input type="text" id="basic-default-email" name="email" class="form-control" value="{{$setting->email}}" maxlength="75" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3"></div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-phone">Phone</label>
                                                <input type="tel" id="basic-default-phone" name="phone" class="form-control" value="{{$setting->phone}}" maxlength="20" />
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-fax">Fax</label>
                                                <input type="text" id="basic-default-fax" name="fax" class="form-control" value="{{$setting->fax}}" maxlength="20" />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="navs-justified-smtp" role="tabpanel">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-port">SMTP Port</label>
                                                <input type="text" id="basic-default-port" name="smtpport" class="form-control" value="{{$setting->smtpport}}" maxlength="255" />
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-server">SMTP Server</label>
                                                <input type="text" id="basic-default-server" name="smtpserver" class="form-control" value="{{$setting->smtpserver}}" maxlength="75" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3"></div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-smtpemail">SMTP Email</label>
                                                <input type="email" id="basic-default-smtpemail" name="smtpemail" class="form-control" value="{{$setting->smtpemail}}" maxlength="75" />
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="basic-default-password">SMTP Password</label>
                                                <input type="text" id="basic-default-password" name="smtppassword" class="form-control" value="{{$setting->smtppassword}}" maxlength="15" />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="navs-justified-about" role="tabpanel">

                                    <div class="form-group">
                                        <textarea class="form-control" id="aboutus" name="aboutus" type="text">{!! $setting->aboutus !!}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#aboutus'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="navs-justified-contactus" role="tabpanel">

                                    <div class="form-group">
                                        <textarea class="form-control" id="contact" name="contact" type="text">{!! $setting->contact !!}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#contact'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="navs-justified-references" role="tabpanel">

                                    <div class="form-group">
                                        <textarea class="form-control" id="references" name="references" type="text">{!! $setting->references !!}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#references'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>

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