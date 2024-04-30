
<nav>
  <ul>
    <li><a href="/">Home</a></li>
  </ul>
</nav>
<h1>Products</h1>
<?php foreach ($products as $product) : ?>
<p>
  <a href="/products/<?= htmlspecialchars($product['id']) ?>/show">
    <?= htmlspecialchars($product["name"]) ?>
  </a>
</p>
<?php endforeach; ?>

<a href="/products/new">New Product</a>

</body>
</html>
