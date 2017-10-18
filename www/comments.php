<!--Раздел комментариев-->
<div class="container-fluid ">
    <div class="row">
        <div class="col-12 comments-header">
            <p>Выводим коментарии</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-0 col-sm-2"></div>
        <div class="col">
            <div class="row">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/php/comments-print.php'; ?>
                <div class="col-12 col-sm-6 col-md-4" id="result_add_comments"></div>
            </div>
        </div>
        <div class=" col-0 col-sm-2"></div>
    </div>
</div>