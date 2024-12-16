<form class="d-flex flex-column flex-sm-row align-items-center gap-2" action="{{ route('blog.search') }}" method="GET">
    <div class="col-auto">
        <input type="text" class="form-control textSearchBlog" name="search" placeholder="yazı ara" value="{{ request('search') }}">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-secondary btnSearchBlog">Ara</button>
    </div>
</form>