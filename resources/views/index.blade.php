<!doctype html>
<html lang="en">

<head>
    <title>Home Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg bg-warning p-3 fixed-top">
            <div class="container">
              <a class="navbar-brand text-uppercase fw-lighter fs-3 text-primary" href="#">Atul Gaurav</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 fs-5 text-uppercase">
                  <li class="nav-item">
                    <a class="nav-link mx-3 active" aria-current="page" href="#education">Education</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link mx-3" aria-current="page" href="#skills">Skills</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-3" aria-current="page" href="#experience">Experience</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-3" aria-current="page" href="#profile">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-3" aria-current="page" href="#projects">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-3" aria-current="page" href="#certifications">Certifications</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-3" aria-current="page" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        {{-- banner --}}
        <div class="container-fluid" style="height: 50vw;">
            <img src="{{url('/')}}/images/atul.jpg" alt="" class="img-fluid object-fit-cover z-0 position-absolute" style="width: 100%; height: 50vw; opacity: 0.5;">
            <div class="z-1 position-absolute" style="width: 100%; margin-top: 15vw;">
                <h1 class="display-3 text-uppercase text-center text-dark fw-bold">Hi <span class="text-primary">,</span> I am <br><span>Atul</span><br><span>Gaurav</span> <span class="text-primary">.</span></h1>
                <h1 class="text-uppercase text-center fw-lighter text-dark fs-3" style="margin-top: 4vw;">Web Developer and Data Scientist</h1>
                <h1 class="text-center m-3"><a href="#contact" class="btn btn-primary p-3 float-center" style="margin-top: 2vw; width: 20vw;">Drop me a Line</a></h1>
            </div>
        </div>

        {{-- about me --}}
        <div class="container border-bottom">
            <h1 class="text-center fw-lighter text-uppercase p-4">About Me</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7" style="margin-top:6vw;">
                    <p class="fs-4 fw-bold p-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores eos magnam veritatis
                         dolores, eaque aliquam odit ratione quod reiciendis iste libero itaque natus voluptate
                         excepturi perspiciatis nostrum vitae, aut consequuntur!</p>
                    <p class="fs-5 p-3 border-bottom">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error maxime architecto itaque
                         optio corporis minus praesentium amet voluptatem nulla quasi harum incidunt id fugit officiis,
                         reprehenderit, neque earum nam. Voluptatem? Lorem ipsum, dolor sit amet consectetur adipisicing elit
                          Dolorum dolore sunt sapiente earum recusandae ipsa aperiam debitis tenetur, rerum qui adipisci, ipsum,
                          ut itaque dignissimos praesentium nisi asperiores vero aliquam.</p>
                    <div class="row p-3 fs-6">
                        <div class="col-lg-3">
                            <p>Phone</p>
                            <p>7858966922</p>
                        </div>
                        <div class="col-lg-5">
                            <p>Email</p>
                            <p>sayhitoag@gmail.com</p>
                        </div>
                        <div class="col-lg-4">
                            <p>Website</p>
                            <p>atulgaurav.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-top: 6vw; margin-left: 2vw;">
                    <div class="justify-content-center">
                        <img src="{{url('/')}}/images/atul12.png" alt="" class="img-fluid mt-4" style="height: 25vw; width:25vw;">
                        <nav class="nav justify-content-center p-3 bg-danger mb-4" style="width: 25vw;">
                            <a href="" class="nav-item mx-4">a</a>
                            <a href="" class="nav-item mx-4">a</a>
                            <a href="" class="nav-item mx-4">a</a>
                            <a href="" class="nav-item mx-4">a</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{-- Education --}}
        <div id="education"></div>
        <div class="container border-bottom" style="margin-top: 12vw;">
            <h1 class="text-center fw-lighter text-uppercase p-4">Education</h1>
        </div>
        <div class="container" style="margin-top: 7vw;">
            <div class="row">
                <div class="col-lg-3">
                    <p>2020 - 2022</p>
                    <p class="fw-lighter">Masters in Mathematics</p>
                </div>
                <div class="col-lg-3">
                    <p>2016 - 2019</p>
                    <p class="fw-lighter">Bachelors in Mathematics</p>
                </div>
                <div class="col-lg-3">
                    <p>2008 - 2010</p>
                    <p class="fw-lighter">Intermediate in Science</p>
                </div>
                <div class="col-lg-3">
                    <p>2007 - 2008</p>
                    <p class="fw-lighter">Matriculation</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 mx-0"><hr></div>
                <div class="col-lg-3 mx-0"><hr></div>
                <div class="col-lg-3 mx-0"><hr></div>
                <div class="col-lg-3 mx-0"><hr></div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <p class="text-uppercase">Nalanda Open University</p>
                    <p>Patna, Bihar</p>
                    <p class="fw-lighter">Passed with 60% marks</p>
                </div>
                <div class="col-lg-3">
                    <p class="text-uppercase">Nalanda Open University</p>
                    <p>Patna, Bihar</p>
                    <p class="fw-lighter">Passed with 71% marks</p>
                </div>
                <div class="col-lg-3">
                    <p class="text-uppercase">D.A.V. Public School</p>
                    <p>cantt. road, khagaul, Patna, Bihar.</p>
                    <p class="fw-lighter">Passed with 78.2% marks</p>
                </div>
                <div class="col-lg-3">
                    <p class="text-uppercase">D.A.V. Public School</p>
                    <p>B.S.E.B. patna, Bihar.</p>
                    <p class="fw-lighter">Passed with 81% marks</p>
                </div>
            </div>
        </div>

        {{-- Skills --}}
        <div id="skills"></div>
        <div class="container border-bottom" style="margin-top: 12vw;">
            <h1 class="text-center fw-lighter text-uppercase p-4">Skills</h1>
        </div>
        <div class="container" style="margin-top: 7vw;">
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-uppercase mx-4">Laravel</p>
                    <div class="progress m-3">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-uppercase mx-4">Django</p>
                    <div class="progress m-3">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-uppercase mx-4">Laravel</p>
                    <div class="progress m-3">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-uppercase mx-4">Django</p>
                    <div class="progress m-3">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-uppercase mx-4">Laravel</p>
                    <div class="progress m-3">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-uppercase mx-4">Django</p>
                    <div class="progress m-3">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="text-uppercase mx-4">Laravel</p>
                    <div class="progress m-3">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-uppercase mx-4">Django</p>
                    <div class="progress m-3">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Experience --}}
        <div id="experience"></div>
        <div class="container border-bottom" style="margin-top: 12vw;">
            <h1 class="text-center fw-lighter text-uppercase p-4">Experience</h1>
        </div>
        <div class="container" style="margin-top: 7vw;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <h4 class="card-title px-3 pt-2">Jun 2022 - Nov 2022</h4>
                        <h2 class="card-title px-3">Lead Generation Specialist</h2>
                        <ul class="card-text p-3 list-group">
                            <li class="list-group-item">Lens Feedy Photography</li>
                            <li class="list-group-item">Finding Leads, Web Research, Documentation work</li>
                            <li class="list-group-item">Skills - Canva, Google Docs, Google Sheets, MS-excel, etc.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 d-flex" style="height: 20vw;"><div class="vr"></div></div>
                <div class="col-lg-5"></div>
            </div>
        </div>

        {{-- Profiles --}}
        <div id="profile"></div>
        <div class="container border-bottom" style="margin-top: 12vw;">
            <h1 class="text-center fw-lighter text-uppercase p-4">Profiles</h1>
        </div>
        <div class="container" style="margin-top: 7vw;">
            <div class="row">
                <div class="col-lg-3 border-end border-bottom">
                    <div class="fs-2 text-center opacity-50"><a href="" class="text-decoration-none"><i class="bi bi-linkedin"></i><p class="fs-4">Linkedin</p></a></div>
                </div>
                <div class="col-lg-3 border-end border-bottom">
                    <div class="fs-2 text-center opacity-50"><i class="bi bi-facebook"></i><p class="fs-4">Facebook</p></div>
                </div>
                <div class="col-lg-3 border-end border-bottom">
                    <div class="fs-2 text-center opacity-50"><i class="bi bi-facebook"></i><p class="fs-4">Facebook</p></div>
                </div>
                <div class="col-lg-3 border-bottom">
                    <div class="fs-2 text-center opacity-50"><i class="bi bi-facebook"></i><p class="fs-4">Facebook</p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 border-end">
                    <div class="fs-2 text-center opacity-50"><i class="bi bi-facebook"></i><p class="fs-4">Facebook</p></div>
                </div>
                <div class="col-lg-3 border-end">
                    <div class="fs-2 text-center opacity-50"><i class="bi bi-facebook"></i><p class="fs-4">Facebook</p></div>
                </div>
                <div class="col-lg-3 border-end">
                    <div class="fs-2 text-center opacity-50"><i class="bi bi-facebook"></i><p class="fs-4">Facebook</p></div>
                </div>
                <div class="col-lg-3">
                    <div class="fs-2 text-center opacity-50"><i class="bi bi-facebook"></i><p class="fs-4">Facebook</p></div>
                </div>
            </div>
        </div>

        {{-- Projects --}}
        <div id="projects"></div>
        <div class="container border-bottom" style="margin-top: 12vw;">
            <h1 class="text-center fw-lighter text-uppercase p-4">Projects</h1>
        </div>
        <div class="container" style="margin-top: 7vw;">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Laravel Website
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Laravel Website
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                            <div class="list-group-item">
                                    <p></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Laravel Website
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        Laravel Website
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Certifications --}}
        <div id="certifications"></div>
        <div class="container border-bottom" style="margin-top: 12vw;">
            <h1 class="text-center fw-lighter text-uppercase p-4">Certifications</h1>
        </div>
        <div class="container" style="margin-top: 7vw;">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="" alt="" class="card-img">
                        <div class="card-body">
                            <h2 class="card-title">Python Basic Certificate</h2>
                            <div class="list-group">
                                <p class="list-group-item">Issuer : Hackerrank</p>
                                <p class="list-group-item">Credentials : </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="" alt="" class="card-img">
                        <div class="card-body">
                            <h2 class="card-title">Python Basic Certificate</h2>
                            <div class="list-group">
                                <p class="list-group-item">Issuer : Hackerrank</p>
                                <p class="list-group-item">Credentials : </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="" alt="" class="card-img">
                        <div class="card-body">
                            <h2 class="card-title">Python Basic Certificate</h2>
                            <div class="list-group">
                                <p class="list-group-item">Issuer : Hackerrank</p>
                                <p class="list-group-item">Credentials : </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contact --}}
        <div id="contact"></div>
        <div class="container border-bottom" style="margin-top: 12vw;">
            <h1 class="text-center fw-lighter text-uppercase p-4">Contact Me</h1>
        </div>
        <div class="container" style="margin-top: 7vw;">
            <div class="row">
                <div class="col-lg-6 m-2">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Name :" class="form-control m-3">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email :" class="form-control m-3">
                            </div>
                        </div>
                        <input type="text" name="subject" placeholder="Subject :" class="form-control m-3">
                        <textarea name="message" placeholder="Message :" class="form-control m-3"></textarea>
                        <br><button class="btn btn-primary my-3 form-control ms-3">Submit</button>
                    </form>
                </div>
                <div class="col-lg-5 m-2">
                    <h2 class="fw-lighter mx-3">Atul Gaurav</h2>
                    <p class="text-uppercase mx-3">Web Developer</p>
                    <p class="m-3">Phone</p>
                    <p class="fw-lighter m-3">7858966922</p>
                    <p class="m-3">Email</p>
                    <p class="fw-lighter m-3">sayhitoag@gmail.com</p>
                    <p class="m-3">Website</p>
                    <p class="fw-lighter m-3">atulgaurav.com</p>
                    <nav class="nav justify-content-center p-3 mb-4">
                        <a href="" class="nav-item mx-4">a</a>
                        <a href="" class="nav-item mx-4">a</a>
                        <a href="" class="nav-item mx-4">a</a>
                        <a href="" class="nav-item mx-4">a</a>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <footer>
    <!-- place footer here -->
    <div class="container border-bottom" style="margin-top: 12vw;">
        <p class="text-center fw-lighter text-uppercase p-4">© Copyright Atul Gaurav | All rights reserved.</p>
    </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
