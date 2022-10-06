<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>

<body>
    <div class="logo">
        <div class="d-grid mt-4 ms-4">
            <img width="150px" src="{{asset('img/devin.png')}}" alt="">
        </div>
    </div>
    <div class="pembukaan">
        <div class="row">
            <div class="col-md-6">
                <h1 class="d-grid ms-4 mt-3">Lorem ipsum dolor <span class="fw-bold"> sit amet, consectetur </span> adipiscing elit. Placerat ac massa</h1>
                <p class="ms-4 mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, impedit.</p>
                <!-- <label for="inputPassword5" class="form-label ms-4">Password</label> -->
                <!-- <input type="text" id="inputPassword5" class="form-control ms-4 mt-5 rounded-pill" aria-describedby="passwordHelpBlock" placeholder="Cari yang kamu butuh"> -->
                <div class="d-flex justify-content-center px-5">
                    <div class="search">
                        <input type="text" class="search-input" placeholder="Cari yang kamu butuh" name="">
                        <a href="#" class="search-icon"> <i class="bi bi-search"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/hp.png')}}" width="330px" class="" alt="" style="margin-left:auto; margin-right:auto ; margin: top 10px; margin-bottom:auto; display:block;">
            </div>
        </div>


    </div>
    <!-- Ini adalah Konten -->
    <div class="konten">
        <div class="row">
            <h3 class="text-center">Kamu bisa melihat spesifikasi komputer <br> di semua lab RPL</h3>
        </div>
        <div class="row">
            <div class="col-md-4 mt-4">

                <div class="container">
                    <div class="card">
                        <div class="imgBx">
                            <!-- <img src="https://assets.codepen.io/4164355/shoes.png"> -->
                        </div>
                        <div class="contentBx">
                            <h2>Lab 1</h2>
                            <div class="size">
                                <p>Lihat spesifikasi PC yang ada di Lab 1</p>
                            </div>
                            <a href="#">Lihat Lab</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="container">
                    <div class="card">
                        <div class="imgBx">
                            <!-- <img src="https://assets.codepen.io/4164355/shoes.png"> -->
                        </div>
                        <div class="contentBx">
                            <h2>Lab 2</h2>
                            <a href="#">Lihat Lab</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="container">
                    <div class="card">
                        <div class="imgBx">
                            <!-- <img src="https://assets.codepen.io/4164355/shoes.png"> -->
                        </div>
                        <div class="contentBx">
                            <h2>Lab 3</h2>
                            <a href="#">Lihat Lab</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>

    </div>
    <!-- Ini adalah Footer -->

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <div class="icon-sosmed">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><img width="30" src="{{asset('img/Group 8.png')}}" alt=""></a></li>
            </div>
            <div class="icon-sosmed">
                <li class="nav-item "><a href="#" class="nav-link px-2 text-muted"><img width="30" src="{{asset('img/Group 9.png')}}" alt=""></a></li>
            </div>
            <div class="icon-sosmed">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><img width="30" src="{{asset('img/Group 10.png')}}" alt=""></a></li>
            </div>
            <div class="icon-sosmed">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><img width="30" src="{{asset('img/Group 11.png')}}" alt=""></a></li>
            </div>

        </ul>
        <p class="text-center">&copy; 2022. All Right Reserved</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        const searchFocus = document.getElementById('search-focus');
        const keys = [{
                keyCode: 'AltLeft',
                isTriggered: false
            },
            {
                keyCode: 'ControlLeft',
                isTriggered: false
            },
        ];

        window.addEventListener('keydown', (e) => {
            keys.forEach((obj) => {
                if (obj.keyCode === e.code) {
                    obj.isTriggered = true;
                }
            });

            const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

            if (shortcutTriggered) {
                searchFocus.focus();
            }
        });

        window.addEventListener('keyup', (e) => {
            keys.forEach((obj) => {
                if (obj.keyCode === e.code) {
                    obj.isTriggered = false;
                }
            });
        });
    </script>
</body>

</html>