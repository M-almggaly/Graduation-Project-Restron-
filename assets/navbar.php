
  <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-2">
                        <a href="../dashboard/index.php" class="nav-item nav-link active">Home</a>
                        <a href="../dashboard/add-order.php" class="nav-item nav-link">add-order</a>
                        <a href="../dashboard/update-order.php" class="nav-item nav-link">update-order</a>
                        <a href="../dashboard/delete-order.php" class="nav-item nav-link">delete-order</a>
                    </div>
                    <a href="../MSP/login.html" class="imagm" style="width: 10%;"><img src="../img/Untitled-2.png" alt="" style="width: 73%; margin-left: 2rem;"></a>
                </div>
            </nav>
<style>
    body{
        background-color: #e9ecef;
    }
    .navbar-dark .navbar-nav .nav-link {
    width: 100%;
}
.ms-auto {
    margin-left: 0 !important;
    width: 100%;
}

    /* table */

    table{
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
}
h2{
    text-align: center;
    background-color: rgba(15, 15, 15, 0.815);
    color: #fff;
    border-left-style: groove;
}
tr{
    transition: all .2s ease-in;
    cursor: pointer;
}
th,
td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}
#headeruser {
    background-color: rgba(15, 15, 15, 0.815);
    color: #fff;
}
#popu:hover {
    background-color: #f5f5f5;
    transform: scale(1.02);
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
}
/* madi query */
@media only screen and (max-width: 768px) {
    table{
        width: 90%;
    }
    
}

/* img */

img, svg {
    vertical-align: middle;
    width: 41%;
    height: auto;
}
    /*** Button ***/
.btn {
    font-family: 'Nunito', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
    color: #FFFFFF;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 2px;
}
    .navbar-dark .navbar-nav .nav-link {
    position: relative;
    margin-left: 25px;
    padding: 35px 0;
    font-size: 15px;
    text-transform: uppercase;
    font-weight: 500;
    outline: none;
    transition: .5s;
}

.sticky-top.navbar-dark .navbar-nav .nav-link {
    padding: 20px 0;
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    color: #FEA116 !important;
}

.navbar-dark .navbar-brand img {
    max-height: 60px;
    transition: .5s;
}

.sticky-top.navbar-dark .navbar-brand img {
    max-height: 45px;
}

@media (max-width: 991.98px) {
    .sticky-top.navbar-dark {
        position: relative;
    }

    .navbar-dark .navbar-collapse {
        margin-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-nav .nav-link,
    .sticky-top.navbar-dark .navbar-nav .nav-link {
        padding: 10px 0;
        margin-left: 0;
    }

    .navbar-dark .navbar-brand img {
        max-height: 45px;
    }
}

@media (min-width: 992px) {
    .navbar-dark {
        width: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: black;
        color: white;
    }
    
    .sticky-top.navbar-dark {
        position: fixed;
        background: var(--dark) !important;
    }
}


</style>