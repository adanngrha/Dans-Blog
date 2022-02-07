<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="#">Dan's Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link {{ ($active === "Home") ? "active" : "" }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($active === "About") ? "active" : "" }}" href="/about">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($active === "All Posts") ? "active" : "" }}" href="/blogs">Blogs</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($active === "Categories") ? "active" : "" }}" href="/categories">Categories</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ ($active === "Authors") ? "active" : "" }}" href="/authors">Authors</a>
        </li>
    </ul>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? "active" : "" }} "><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
        </li>
    </ul>
    </div>
</div>
</nav>
