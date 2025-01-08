<?php
use App\Services\Page;
Page::part('head');
Page::part('navbar');
?>
<div class="container">
<p class="display-2">Домашняя страница</p>
<p class="display-7">Залогинься, друг мой, залогинься!</p>
<a class="btn btn-primary" href="/login" role="button">Login In</a>
</div>
</body>
</html>

