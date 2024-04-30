<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/products">Products</a></li>
    </ul>
</nav>

<h1>Show Product Page</h1>
<h2><?= $product ?></h2>
<p><?= $description ?></p>

<a href="/products/<?= $id?>/edit">Edit product</a>
<br>
<a href="/products/<?= $id?>/delete">Delete products</a>
</body>
</html>