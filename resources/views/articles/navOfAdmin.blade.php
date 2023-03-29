<div class="container">
    <div class=" admin-nav">
        <a class="{{ request()->is('admin') ? 'active' : '' }} nav-link " href="{{ route('admin.index') }}"> admin
            article </a>
        <a class="{{ request()->is('categories') ? 'active' : '' }} nav-link " href="{{ route('category.index') }}">
            admin categorise </a>
        <a class="{{ request()->is('newsBlog') ? 'active' : '' }} nav-link " href="{{ route('news.index') }}"> admin news
        </a>
    </div>
</div>