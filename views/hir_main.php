<form action="<?= SITE_ROOT ?>hir" method="post">

                    <div class="fields">
                        <div class="field half">
                            <label for="name">Név</label>
                            <input type="text" name="name" id="name" />
                            <p class='text-danger' id="hibaN"></p>
                        </div>
                        <div class="field">
                            <label for="message">Hír</label>
                            <textarea name="message" id="message" rows="5"></textarea>
                            <p class='text-danger' id="hibaM"></p>
                        </div>
                    </div>
                    <ul class="actions" style="list-style-type: none;">
                        <li><a href="" class="button submit" name="gomb">Hír létrehozása</a></li>
                    </ul>
</form>
