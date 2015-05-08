<div class="container-fluid submit-line">

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h3 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Propose une phrase !
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

              <form action="home/post_contact.php" method="POST">
                    <textarea required id="inputmessage" rows="1" placeholder="Ta super punchline" name="message" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                    <input required type="text" placeholder="Ton mail, pour qu'on te réponde" name="mail" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                    <button type="submit" class="submit btn">Envoyer</button>
              </form>

        </div>
      </div>
    </div>
  </div>

</div>