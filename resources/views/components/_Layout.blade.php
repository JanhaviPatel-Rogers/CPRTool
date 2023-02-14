<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Capital Program Reporting Tool</title>
    <link rel="stylesheet" href="~/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link href="~/lib/font-awesome/css/all.css" rel="stylesheet" />

    <link rel="stylesheet" href="~/css/sb-admin-2.css" />
    <link rel="stylesheet" href="~/css/blog-home.css" />
    <style>

        a,
        a:hover {
            color: inherit;
        }

        a:hover {
            text-decoration: none;
        }

        .bg-lightblue {
            background: var(--lightblue);
        }

        .bg-red {
            background: var(--red);
        }

        .text-red {
            color: var(--red);
        }

        .container-fluid-max {
            max-width: 1440px;
        }

        .cover {
            background: no-repeat center/cover;
        }

        .p-15 {
            padding: 15px;
        }

        /* SCROLL ANIMATIONS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .scroll .page-header {
            background: var(--red);
        }

        .scroll .hero {
            transform: scale(0.98);
        }


        /* BANNER SECTION
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .hero {
            background-attachment: fixed;
            transition: transform 0.5s ease-in-out;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient( rgba(0, 0, 0, 0.5) 0, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.1) 100% );
        }

        .hero .container-fluid {
            z-index: 10;
        }

        .platforms1 {
            padding: 40px;
        }

        .platforms2 {
            padding: 29px;
        }

        .platforms3 {
            padding: 18px;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="../asset/img/logo.png"width="160" height="30" alt="">
        </a>
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">

                        <a class="nav-link">
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>


{{--                    @if (User.Identity.IsAuthenticated)--}}
{{--                        {--}}
                        <li class="nav-item">

                            <a class="nav-link">
                                Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline">
                            <button type="submit" class="nav-link btn btn-link">Logout</button>
                            </form>
                        </li>




{{--                        }--}}
{{--                        else--}}
{{--                        {--}}
                        <li class="nav-item">
                            <a class="nav-link" asp-area="Identity" asp-page="Identity/Account/Register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" asp-area="Identity" asp-page="Identity/Account/Login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>

{{--                        }--}}




                </ul>

            </div>
        </div>
    </nav>

</header>
<div class="container-fluid">
    <main role="main" class="pb-3">
    </main>
</div>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Rogers 2021</span>
        </div>
    </div>
</footer>
<script src="~/lib/jquery/dist/jquery.min.js"></script>
<script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="~/js/site.js"></script>

</body>
</html>
