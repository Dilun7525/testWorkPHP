<!--FOrms -->
<div class="container-fluid cont-bg">
    <div class="row">
        <div class="col-0 col-sm-2"></div>
        <div class="col">
            <div class="row">
                <div class="col"></div>
                <div class="col-4 col-sm-3 wrap-images-form">
                    <img src="img/contact-icon.png" alt="">

                </div>
                <div class="col"></div>
            </div>
            <form action="php/submit_forms.php"
                  method="POST"
                  id="form-comments"
                  class="text-forms">

                <div class="row">
                    <!--Колонка имя, E-Mail-->
                    <div class="col-12 col-sm-5">

                        <div class="row">
                            <div class="form-group text-forms">
                                <label for="FieldName">Имя <sup class="stars">*</sup></label>
                                <input type="text" name="name" class="form-control cont-form-bg" id="FieldName" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label for="FieldEmail">E-Mail <sup class="stars">*</sup></label>
                                <input type="email" name="email" class="form-control cont-form-bg" id="FieldEmail" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <!--Колонка коментариев и кнопки-->
                    <div class="col-12 col-sm-6">
                        <fieldset class="form-group">
                            <label for="FieldTextArea">Комментарий <sup class="stars">*</sup></label>
                            <textarea type="text" name="comment" id="FieldTextArea" class="form-control cont-form-bg"  rows="5"></textarea>
                        </fieldset>
                    </div>
                </div>
            </form>
            <script src="js/ajax.js">
            </script>
            <div class="row row-btn">
                <div class="col text-right">
                    <button name="btn-form" onclick="call()" class="btn form-btn-color ">Записать</button>
                </div>
            </div>
        </div>
        <div class="col-0 col-sm-2"></div>
    </div>
</div>
<!--FOrms -->