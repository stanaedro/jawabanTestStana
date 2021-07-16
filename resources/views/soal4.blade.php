<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Soal Test - Stana Edro Swargara</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">Stana Edro Swargara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal1') }}">Soal1</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal2') }}">Soal2</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal3') }}">Soal3</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal4') }}">Soal4</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/soal5') }}">Soal5</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>SOAL 4</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container">
        <div class="row justify-content-left">
            <div>
                <h3>Person</h3>
                <br>
                <table class="table" id="table">
                    <thead>
                        <th>ID</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Detail</th>
                    </thead>
                    <tbody id="list_data">

                    </tbody>
                </table>

                <h3>Detail Person</h3>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Email</th>
                        <th>Avatar</th>
                    </thead>
                    <tbody id="detail_data">
                    </tbody>
                </table>

                <template id="template_list">
                    <tr>
                        <td id="number"></td>
                        <td id="first_name"></td>
                        <td id="last_name"></td>
                        <td id="email"></td>
                        <td><img src="" id="avatar"></td>
                        <td><button class="btn btn-primary" onclick="getDetailApi(2);">Detail</button></td>
                    </tr>
                </template>

                <template id="template_detail">
                    <tr>
                        <td id="number"></td>
                        <td id="first_name"></td>
                        <td id="last_name"></td>
                        <td id="email"></td>
                        <td><img src="" id="avatar"></td>
                    </tr>
                </template>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <script>
        const personTemplate = document.querySelector("#template_list");
        const peopleContainer = document.querySelector("#list_data");

        const detailTemplate = document.querySelector("#template_detail");
        const detailContainer = document.querySelector("#detail_data");

        // menampilkan list data
        async function getListApi() {
            const req = await fetch("https://reqres.in/api/users?page=2");
            const resp = await req.json();
            for (const person of resp.data) {
                let clone = document.importNode(personTemplate.content, true);
                clone.querySelector("#number").textContent = person.id;
                clone.querySelector("#first_name").textContent = person.first_name;
                clone.querySelector("#last_name").textContent = person.last_name;
                clone.querySelector("#email").textContent = person.email;
                clone.querySelector("#avatar").src = person.avatar;

                // clone.querySelector("#email").textContent = person.email;
                peopleContainer.appendChild(clone);

            }
        }
        async function getDetailApi(id) {
            const req = await fetch("https://reqres.in/api/users/" + id);
            const resp = await req.json();
            let x = 1;
            let clone = document.importNode(detailTemplate.content, true);
            clone.querySelector("#number").textContent = resp['data']['id'];
            clone.querySelector("#first_name").textContent = resp['data']['first_name'];
            clone.querySelector("#last_name").textContent = resp['data']['last_name'];
            clone.querySelector("#email").textContent = resp['data']['email'];
            clone.querySelector("#avatar").src = resp['data']['avatar'];
            detailContainer.appendChild(clone);
        }

        getListApi();

        // getDetailApi(2);
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('/js/scripts.js')}}"></script>
</body>

</html>