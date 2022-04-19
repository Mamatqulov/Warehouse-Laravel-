@if($products->count() > 0)

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            {{ $products->links() }}
        </ul>
    </nav>
@endif
