<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $Lang->get('THEME__CUSTOMIZATION') ?></h3>
        </div>
        <div class="card-body">
          <form method="post" enctype="multipart/form-data" data-ajax="false">
            <div class="row">
              <div class="col-md-4">
                <?= $this->element('form.input.upload.img', $form_input) ?>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label>Bouton IP</label>
                  <input type="text" class="form-control" name="ip" value="<?= $config['ip'] ?>">
                </div>
                <div class="form-group">
                  <label>Texte des news</label>
                  <input type="text" class="form-control" name="news_text" value="<?= $config['news_text'] ?>">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  $('#addFeature').on('click', function(e) {
    e.preventDefault();

    var i = $(this).attr('data-i');
    i = parseInt(i) + 1;

    var append = '<hr>';

    append += '<div id="feature-'+i+'">';

      append += '<button style="color:#a94442;" type="button" class="btn btn-link pull-right delete-feature" data-id="'+i+'">Supprimer</button>';

      append += '<div class="form-group">';
        append += '<label>Titre</label>';
        append += '<input type="text" class="form-control" name="homepage_features['+i+'][title]">';
      append += '</div>';

      append += '<div class="form-group">';
        append += '<label>Icône <small><a href="http://fontawesome.io/icons/">Liste des icônes disponibles</a></small></label>';
        append += '<div class="input-group">';
          append += '<span class="input-group-addon">fa fa-</span>';
          append += '<input type="text" class="form-control" name="homepage_features['+i+'][icon]">';
        append += '</div>';
      append += '</div>';

      append += '<div class="form-group">';
        append += '<label>Message</label>';
        append += '<input type="text" class="form-control" name="homepage_features['+i+'][message]">';
      append += '</div>';

    append += '</div>';

    $('#features').append(append);
    $(this).attr('data-i', i);

    deleteFeature();

  });

  function deleteFeature() {
    $('.delete-feature').unbind('click');
    $('.delete-feature').on('click', function(e) {
      e.preventDefault();

      var id = $(this).attr('data-id');
      var el = $('#feature-'+id);

      $(el).slideUp(150, function() {
        $(this).remove();
      });
    })
  }

  deleteFeature();
</script>
