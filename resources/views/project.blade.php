<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpriverthemes.com/HTML/drake/home6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 03:12:25 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drake - OnePage Portfolio HTML5 Template</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Font -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com/') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com/') }}" crossorigin>
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap') }}"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Stylesheet -->
    <link rel="stylesheet"
        href="{{ asset('../../../maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/smooth-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        .content-width {
            max-width: 100%;
            width: 100%;
            margin-left: 0;
        }
    </style>
</head>

<body class="home6-page">

    <div class="page-loader">
        <div class="bounceball"></div>
    </div>



    <div class="global-color">
        <div class="inner">
            <div class="overlay"></div>
            <div class="global-color-option">
                <span class="close-settings">
                    <i class="las la-times"></i>
                </span>
                <h2>Configuration</h2>
                <div class="global-color-option-inner">
                    <p>Colors</p>
                    <div class="color-boxed">
                        <a href="#" class="clr-active" onclick="color1();"></a>
                        <a href="#" onclick="color2();"></a>
                        <a href="#" onclick="color3();"></a>
                        <a href="#" onclick="color4();"></a>
                        <a href="#" onclick="color5();"></a>
                        <a href="#" onclick="color6();"></a>
                        <a href="#" onclick="color7();"></a>
                        <a href="#" onclick="color8();"></a>
                    </div>

                    <p>THREE DIMENSIONAL SHAPES</p>
                    <ul class="themes">
                        <li><a href="home1.html">Earth Lines Sphere</a></li>
                        <li><a href="home2.html">3D Abstract Ball</a></li>
                        <li><a href="home3.html">Water Waves</a></li>
                        <li><a href="home4.html">Liquids Wavy</a></li>
                        <li class="active"><a href="home6.html">Solid Color</a></li>
                        <li><a href="home5.html">Simple Strings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <section class="portfolio-area page-section scroll-to-page" id="portfolio">
                <div class="custom-container">
                    <div class="portfolio-content content-width">
                        <div class="section-header">
                            <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                <i class="las la-grip-vertical"></i> portofolio
                            </h4>
                            <h1 class="scroll-animation" data-animation="fade_from_bottom"> <span>Project</span> saya
                            </h1>
                        </div>
                        <div class="gap-3 d-flex justify-content-end">
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success"
                                style="">Tambah</a>
                            <a href="{{ url('logout') }}" class="btn btn-danger" style="">Keluar</a>
                        </div>
                        <table class="table mt-3" border="1">
                            <thead style="color: white">
                                <tr>
                                    <th style="border-right: 1px solid white;">NO</th>
                                    <th style="border-right: 1px solid white;">Project</th>
                                    <th style="border-right: 1px solid white;">Teknologi</th>
                                    <th style="border-right: 1px solid white;">Tugas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style="color:white">
                                @foreach ($projects as $project)
                                    <tr>
                                        <td style="border-right:1px solid white">{{ $loop->iteration }}</td>
                                        <td style="border-right:1px solid white">{{ $project->project }}</td>
                                        <td style="border-right:1px solid white">{{ $project->teknologi }}</td>
                                        <td style="border-right:1px solid white">{{ $project->tugas }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $project->id }}"
                                                    class="btn btn-primary me-3" style="">Edit</a>
                                                <form id="deleteForm{{ $project->id }}"
                                                    action="{{ route('project.hapus', $project->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="button"
                                                        onclick="confirmDelete({{ $project->id }})">Hapus</button>
                                                </form>
                                            </div>

                                            <script>
                                                function confirmDelete(id) {
                                                    if (confirm("Apakah Anda yakin ingin menghapus data?")) {
                                                        document.getElementById('deleteForm' + id).submit();
                                                    }
                                                }
                                            </script>

                                            @csrf
                                        </td>
                                    </tr>

                                    {{-- Modal button edit --}}
                                    <div class="modal fade" id="editModal{{ $project->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ Route('project.update', $project->id) }}"
                                                    method="post" enctype="multipart">
                                                    <div class="modal-body">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" name="project" class="form-control"
                                                            placeholder="Masukkan project disini">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </section>

            {{-- Modal button tambah --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ Route('project.create') }}" method="post" enctype="multipart">
                            <div class="modal-body">
                                @csrf
                                <input type="text" name="project" class="form-control Add mb-2"
                                    placeholder="Masukkan project disini">
                                <input type="text" name="teknologi" class="form-control Add mb-2"
                                    placeholder="Masukkan teknologi yang digunakan">
                                <input type="text" name="tugas" class="form-control Add"
                                    placeholder="Mengerjakan bagian apa">
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="Remove()" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </main>

    >
    </div>

    </div>
    </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/color.js') }}"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        @endif
    </script>
    <script>
        function Remove() {
            var elements = document.getElementsByClassName("Add");
            console.log(elements);
            for (var i = 0; i < elements.length; i++) {
                elements[i].value = "";
            }
        }
    </script>

</body>

<!-- Mirrored from wpriverthemes.com/HTML/drake/home6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Feb 2024 03:12:25 GMT -->

</html>
