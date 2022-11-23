<div class="card m-2" style="width: 18rem;">
    <img src="{{ asset('storage/images/book/' . $book->image) }}" class="card-img-top" alt="book image">
    <div class="card-body">
        <h5 class="card-title">{{ $book->title }}</h5>
        <p class="card-text mb-0">by</p>
        <p class="card-text">{{ $book->author }}</p>
        <a href="{{ route('view-book', ['id' => $book->id]) }}" class="btn btn-primary">Detail</a>
    </div>
</div>
