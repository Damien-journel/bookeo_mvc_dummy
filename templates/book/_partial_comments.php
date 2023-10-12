<div class="col-md-12 col-lg-8 col-xl-8">
    <div class="card">
        <div class="card-body p-4">
            <h2>Commentaires</h2>
            <div class="row">
            <?php foreach ($comments as $comment): ?>
                <div class="col">
                    <div class="d-flex flex-start bg-body-tertiary p-2 my-1">
                        <div class="flex-grow-1 flex-shrink-1">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-1">
                                        <span class="small">
                                            <?= $comment->getUser()->getLastName() ?> - <?= $comment->getComment() ?>
                                        </span>
                                    </p>
                                </div>
                                <p class="small mb-0">
                                    <?= $comment->getContent() ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

            <form method="POST">
                <div class="mb-3">
                    <label for="comment" class="form-label">Commenter</label>
                    <textarea type="text" class="form-control " id="comment" name="comment" rows="5"></textarea>
                </div>
                <input type="hidden" name="book_id" value="82">
                <input type="hidden" name="user_id" value="2">



                <input type="submit" name="saveComment" class="btn btn-primary" value="Commenter">

            </form>

        </div>
    </div>
</div>