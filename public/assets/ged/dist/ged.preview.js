    var baseURL = APP_EXPLORER_BASEPATH;
    var msAllowedExtensions = [
      'doc','docx','ppt','pptx','xls','xlsx','xlsm','dot','dotx','csv'
    ];
    var googleAllowedExtensions = [
      'pdf','ai','psd'
    ];
    var imagesAllowedExtensions = [
      'png','jpg','jpeg','bmp','svg','tiff'
    ];
    var videosAllowedExtensions = [
      'mov','mp4','webm'
    ];
    var audioAllowedExtensions = [
      'mp3','wav'
    ];
    var txtAllowedExtensions = [
      'txt','htm','html','ini','xml'
    ];

    var title = $('.preview-title');
    var modal = $('#modal-preview');
    var modal_restore = $('#modal-restore');

    var doc = $('#modal-preview iframe');
    var image = $('#modal-preview img');
    var video = $('#modal-preview video');
    var audio = $('#modal-preview audio');
    var txt = $('#modal-preview textarea');

    var revisions = [];
    var aE;
    var offset = 250;

    doc
    .css('height',window.innerHeight - offset)
    .css('width','100%');

    video
    .css('max-height',window.innerHeight - offset)
    .css('width','100%');

    image
    .css('max-height',window.innerHeight - offset)
    .css('width','auto');

    audio
    .css('width','100%');

    var basePath = 'GED';
    var ged_file;

    initModal();

    function setPreview(url) {

      doc.hide();
      image.hide();
      video.hide();
      audio.hide();
      txt.hide();

      var ext_found = false;

      for ( var i in msAllowedExtensions){
        if ( aE == msAllowedExtensions[i]){
          doc.show()
          .attr('src','https://view.officeapps.live.com/op/view.aspx?src='+url);
          doc.on('load',function(){

          });
        }
      }
      for ( var i in googleAllowedExtensions){
        if ( aE == googleAllowedExtensions[i]) {
          doc.show()
          .attr('src','https://docs.google.com/viewer?url='+url+'&embedded=true');
          doc.on('load',function(){

          });
        }
      }
      for ( var i in imagesAllowedExtensions){
        if ( aE == imagesAllowedExtensions[i]) {
          image.show()
          .attr('src',url);

        }
      }
      for ( var i in videosAllowedExtensions){
        if ( aE == videosAllowedExtensions[i]) {
          video.find('source')
          .attr('type','video/mp4')
          .attr('src',url);
          video.eq(0).load();
          video.show();

        }
      }
      for ( var i in audioAllowedExtensions){
        if ( aE == audioAllowedExtensions[i]) {
          audio.find('source')
          .attr('type','audio/mpeg')
          .attr('src',url);
          audio.eq(0).load();
          audio.show();

        }
      }
      for ( var i in txtAllowedExtensions){
        if ( aE == txtAllowedExtensions[i]) {
          $.get(url,{}, function(data) {
             txt.html(data).show();

          });
        }
      }
      modal.modal('show');
      hideLoader();
    }
    var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];
    function formatDate(date) {
        var date = new Date(date);
        var day = date.getDate();
        if ( day < 10 ){ day = '0'+date.getDate() }
        return day+'/'+months[date.getMonth()]+'/'+date.getFullYear();
    }
    function updateRevisions() {
      var j = revisions.length;
      $('.ged_revisions').html('');
      for ( var i in revisions ){
        var name;
        if ( j == revisions.length && revisions.length > 1 ){
          name = 'Dernière version';
          aE = revisions[i].file.split('.').pop();
          setPreview(revisions[i].url);
          $('.ged_current_file').html(revisions[i].name);
          $('.ged_download').attr('href',revisions[i].url);
          $('.ged_download').attr('download',revisions[i].name);
        } else if ( j == 1 ) {
          name = 'Version d\'origine';
          if ( revisions.length == 1 ){
            $('.ged_current_file').html(revisions[i].name);
            $('.ged_download').attr('href',revisions[i].url);
            $('.ged_download').attr('download',revisions[i].name);
          }
        } else {
          name = 'Version '+j;
        }

        $('.ged_revisions').append('<option value="'+i+'">'+name+' ('+revisions[i].date+')</option>');
        j--;
      }
    }
    function initModal(){

      $('.ged_revisions').on('change', function() {
        var r = revisions[$(this).val()];
        $('.ged_current_file').html(r.name);
        $('.ged_download').attr('href',r.url);
        $('.ged_download').attr('download',r.name);

        aE = r.file.split('.').pop();
        setPreview(r.url);
      });

      $('#ged_file').on('change',function() {
        $('.ged_submit').show();
      });

      $('.ged_submit').on('click', function() {

        var formData = new FormData($('#ged_uploader')[0]);
        showLoader();

        $.ajax({
          url : APP_GED_REVISION_URL,
          type: 'POST',
          data : formData,
          success : function(res) {

            $('.ged_submit').hide();
            hideLoader();

            var new_file = JSON.parse(res);

            revisions.unshift({
              file : new_file.realname,
              name : new_file.name,
              url : APP_REVISIONS_ABSOLUTE_URL+new_file.realname,
              date : formatDate(new_file.created_at.date)
            });
            updateRevisions();

            $('#ged_file').val('');
            $('.ged_current_file').html(new_file.name);

            aE = new_file.realname.split('.').pop();
            setPreview(APP_REVISIONS_ABSOLUTE_URL+new_file.realname);
          },
          cache: false,
          contentType: false,
          processData: false
        });
      });
    }
    function addGedRequest(selector, url, callback, isModal = false) {
      if ( ged_file == undefined ){ ged_file = {}; }
      $(selector).off('click').on('click', function() {
        $(this)
        .attr('disabled','true')
        .addClass('disabled');
        showLoader();
        $.post({
          url : url,
          data : { ged_id : ged_file.file_id },
          success : function(res) {
            hideLoader();

            callback(res, ged_file.file_id);

            if ( isModal ){
              modal.modal('hide');
              modal_restore.modal('hide');
            }

            $(selector)
            .removeAttr('disabled')
            .removeClass('disabled');
            $('li.ng-scope.active a').trigger('click');
          },
          error : function(e) {
            $(selector)
            .removeAttr('disabled')
            .removeClass('disabled');
          }
        });
      });
    }
    var copy;
    function setClipboardURL(url){
      $('.ged_public').off('click')
      .html('<i class="material-icons">content_copy</i> Copier le lien').removeClass('md-btn-primary');
      copy = new ClipboardJS('.ged_public', { text:
        function() {
          return  url;
        }
      });
    }
    function openGedFile(id){

      showLoader();
      $.post({
        url : APP_GED_FILE_URL,
        data : {
          id : id
        },
        success : function(data){
          setTimeout(function() {
            hideLoader();
          },250);
          ged_file = JSON.parse(data);
          if ( !ged_file.deleted && ged_file.file_id != 0 ){

            var file_url = APP_GED_ABSOLUTE_URL+ged_file.realname;
            ged_file.absolute_url = file_url;

            aE = ged_file.realname.split('.').pop();

            title.html(formattedPath);

            setPreview(ged_file.absolute_url);

            $('#ged_id').val(ged_file.file_id);
            $('.ged_name').html(ged_file.name);
            $('.ged_type').html(ged_file.type);
            $('.ged_origin').html(ged_file.realname);
            $('.ged_author').html(ged_file.author);
            $('.ged_date_add').html(formatDate(ged_file.created_at.date));
            $('.ged_date_edit').html(formatDate(ged_file.updated_at.date));

            revisions = [];
            revisions.push({
              file : ged_file.realname,
              name : ged_file.name,
              url : ged_file.absolute_url,
              date : formatDate(ged_file.created_at.date)
            });

            for ( var i in ged_file.revisions ){
              var f = ged_file.revisions[i];
              revisions.push({
                file : f.realname,
                name : ged_file.name,
                url : APP_REVISIONS_ABSOLUTE_URL+f.realname,
                date : formatDate(f.created_at.date)
              });
            }

            revisions.reverse();
            updateRevisions();

          } else if (ged_file.file_id != 0) {

            var trash_path = path.substr(0, path.lastIndexOf("\\"));
            trash_path.replace(/\\[^\\]+$/,"");

            modal_restore.modal('show');
            hideLoader();

            $('.ged_name').html(ged_file.file);
          }
        }
      });
    }
