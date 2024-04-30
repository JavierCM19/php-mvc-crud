<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/products">Products</a></li>
    </ul>
</nav>

<h1>New Product</h1>

<form action="/products/create" method="post">

<!-- include the form contents from the new form.php -->
<?php require "form.php" ?>

</form>

</body>
</html>