<nav id="navbar">
    <div class="logo"><a href="index.php">Canadian National Parks</a></div>

    <!-- Hamburger Menu Button -->
    <button class="navbar-toggler" onclick="toggleNavbar()">
        ☰
    </button>

    <!-- Navigation Links -->
    <div class="nav-menu" id="nav-menu">
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">All Parks</a></li>
        </ul>
    </div>
</nav>

<script>
function toggleNavbar() {
    document.getElementById("nav-menu").classList.toggle("active");
}
</script>
