<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
{{-- Dashboard --}}
<style>
    body {
        font-family: Arial, sans-serif;
    }

    nav {
        background-color: #333;
        color: #fff;
        padding: 1rem;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    nav ul li {
        margin-right: 1rem;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
    }

    h1 {
        color: #333;
    }

    p {
        color: #666;
    }

    /* menu responsive */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        background-color: #333;
        color: white;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 0.5rem 1rem;
    }

    .navbar-burger {
        display: none;
        cursor: pointer;
        flex-direction: column;
        justify-content: space-around;
        height: 24px;
        width: 30px;
    }

    .navbar-burger span {
        background: white;
        height: 2px;
        width: 100%;
    }

    .navbar-menu {
        display: flex;
    }

    .navbar-menu ul {
        list-style: none;
        display: flex;
        padding: 0;
        margin: 0;
    }

    .navbar-menu ul li {
        margin: 0 1rem;
    }

    @media (max-width: 768px) {
        .navbar-burger {
            display: flex;
        }

        .navbar-menu {
            display: none;
            flex-direction: column;
            width: 100%;
        }

        .navbar-menu ul {
            flex-direction: column;
        }

        .navbar-menu ul li {
            margin: 0;
            border-bottom: 1px solid #444;
        }
    }

    .navbar-menu.is-active {
        display: flex;
    }

    .navbar-menu.is-active {
        display: flex;
    }

    /* end menu responsive*/

    /* warna is selected menu */
    .navbar-menu .navbar-start .active {
        font-weight: bold;
        color: #ff0000;
    }

    /* banner dropdown */
    /* CSS untuk Dropdown Menu */
    .navbar .has-dropdown .dropdown {
        display: none;
        position: absolute;
        background-color: #fff;
        /* Ganti dengan warna yang Anda inginkan */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .navbar .has-dropdown:hover .dropdown {
        display: block;
    }

    .navbar .has-dropdown .dropdown li {
        list-style: none;
    }

    .navbar .has-dropdown .dropdown li a {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
        /* Ganti dengan warna yang Anda inginkan */
    }

    .navbar .has-dropdown .dropdown li a:hover {
        background-color: #f2f2f2;
        /* Ganti dengan warna yang Anda inginkan */
    }

    /* end banner */

</style>

{{-- login page --}}
{{-- <style media="screen">
    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #080710;
    }

    .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .background .shape {
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
    }

    .shape:first-child {
        background: linear-gradient(#1845ad,
                #23a2f6);
        left: -80px;
        top: -80px;
    }

    .shape:last-child {
        background: linear-gradient(to right,
                #ff512f,
                #f09819);
        right: -30px;
        bottom: -80px;
    }

    form {
        height: 520px;
        width: 400px;
        background-color: rgba(255, 255, 255, 0.13);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
        padding: 50px 35px;
    }

    form * {
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }

    form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }

    label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }

    input {
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
    }

    ::placeholder {
        color: #e5e5e5;
    }

    button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .social {
        margin-top: 30px;
        display: flex;
    }

    .social div {
        background: red;
        width: 150px;
        border-radius: 3px;
        padding: 5px 10px 10px 5px;
        background-color: rgba(255, 255, 255, 0.27);
        color: #eaf0fb;
        text-align: center;
    }

    .social div:hover {
        background-color: rgba(255, 255, 255, 0.47);
    }

    .social .fb {
        margin-left: 25px;
    }

    .social i {
        margin-right: 4px;
    }
</style> --}}
