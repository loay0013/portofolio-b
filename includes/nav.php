
<nav class="has-background-black navbar p-5 container" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a class="logo p-3 " href="index.php">>/Lasellah></a>
        <a role="button" class="navbar-burger has-text-white" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

        <div class="navbar-menu has-background-black navbar-end" id="navMenu">
                    <a class="nav-item p-3"  href="index.php#ommig"> <p>Om mig</p></a>
                    <a class="nav-item p-3" href="index.php#projekter"><p>Projekter</p></a>
                    <a class="nav-item p-3" href="index.php#kontakt"><p>Kontakt</p></a>
        </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
el.addEventListener('click', () => {

// Get the target from the "data-target" attribute
const target = el.dataset.target;
const $target = document.getElementById(target);

// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
el.classList.toggle('is-active');
$target.classList.toggle('is-active');

});
});

});
</script>