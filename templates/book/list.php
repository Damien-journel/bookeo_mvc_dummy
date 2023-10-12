<?php require_once _ROOTPATH_ . '\templates\header.php'; ?>

<h1>Liste complète</h1>
<?php foreach($books as $book): ?>
<div class="row text-center mb-3">
    <div class="col-md-4 my-2 d-flex">
        <div class="card">
            <img src="/uploads/books/3-zai-zai-zai-zai.jpg" class="card-img-top" alt="Zaï Zaï Zaï Zaï">
            <div class="card-body">
                <h5 class="card-title"><?php echo $book->getTitle(); ?></h5>
                <p class="card-text"><?php echo $book->getDescription(); ?></p>
                <a href="index.php?controller=book&amp;action=show&amp;id=<?php echo $book->getId(); ?>" class="btn btn-primary">Lire la suite</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>

<div class="row">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                <a class="page-link" href="index.php?controller=book&action=list&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>




<?php require_once _ROOTPATH_ . '\templates\footer.php'; ?>