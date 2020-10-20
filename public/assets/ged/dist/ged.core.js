var dt_options = {
  "searching": false,
  "paging" : false,
  "lengthChange": false,
  "info": false,
  "language": {
    "url": APP_TABLE_LANG_FR
  }
};
var ged_is_loading = false;
function showLoader() {
  $('#ged-loader').modal({
    backdrop : 'static'
  }).modal('show');
  ged_is_loading = true;
}

function hideLoader() {
  $('#ged-loader').modal('hide');
  ged_is_loading = false;
}
function initTreeView(callback) {
  var key_count = 0;
  tree = [];
  showLoader();
  $.post(
      APP_GED_FOLDER_LIST_URL,
      {
          basePath: basePath
      },
      function(res) {
          tree = JSON.parse(res);
          hideLoader();
          callback();
      }
  );
}

function getRoles(id, type, name) {
  $('.uk-alert.path').html(formattedPath+' '+name);
  $.post(
    APP_GED_GET_RIGHTS_URL,
    {
      id: id,
      type: type
    }, function(res) {
        var data = JSON.parse(res);
        $("#modal-role").modal('show');
        for ( var i in data ){
          var enabled = data[i].is_active == 1 ? 'checked' : '';
          data[i].enabled = enabled;
        }
        var template = $('#role_tmpl').html();
        Mustache.parse(template);
        var rendered = Mustache.render(template, { roles : data});
        $('#role_target').html(rendered);
        $('#role_target input[type="checkbox"]').on('change', function(event){

          var code = $(this).attr('data-code');
          var check = $(this).prop('checked');

          $.post(
            APP_GED_SET_RIGHTS_URL,
            {
              id: $(this).attr('data-id'),
              item_id : id,
              checked : check ? 1 : 0,
              type : type
            }, function(res) {

              ged_notify('Les droits on été mis à jour',null,'fas fa-check','success');

              if ( check == true ){
                $('.'+code).show();
              } else {
                $('.'+code).hide();
              }
            }
          )
        });
      }
    );
}
function formatDMY(d, ts = false) {
  var date;
  if ( ts ){
    date = new Date(d.timestamp*1000);
  } else {
    date = new Date(d);
  }
    var day = date.getDate();
    if ( day < 10 ){ day = '0'+date.getDate() }
    return day+'/'+months[date.getMonth()]+'/'+date.getFullYear();
}
var table = $("#ged_datatable").DataTable(dt_options);

function render(){

  showLoader();
  //$('#tree').addClass('disabled');
  $('#ged').animate({opacity: 0},function() {
    if ( table != null){
      table.destroy();
    }
    $('#output tr').remove();

    var current = $("#tree").fancytree("getTree").getNodeByKey(currentFolder.key);

    $.post(
      APP_GED_GET_RIGHTS_URL,
      {
        id: currentFolder.data.id,
        type: 'folder'
      }, function(res) {
          var data = JSON.parse(res);
          if ( data.length == 0 ){
            $('.restrictions li').show();
          }
          for (var i = 0; i < data.length; i++) {
            var el = data[i];
            if ( el.is_active == 1 ){
              $('.'+el.code).show();
            } else {
              $('.'+el.code).hide();
            }
          }

      }
    );

    if ( current.children != null ){
      for ( var i in current.children ){

        var icon;
        if ( current.children[i].title != 'Corbeille' ){
          icon = 'folder';
        } else {
          icon = 'delete';
        }

        var template = $('#folder_tmpl').html();
        Mustache.parse(template);

        current.children[i].icon = icon;
        current.children[i].created_at = formatDMY(current.children[i].data.created_at);
        current.children[i].updated_at = formatDMY(current.children[i].data.updated_at);

        current.children[i].actions = 'no_actions';

        var act = folders_actions[current.children[i].type];
        if (act) {
          if ( act.length ) {
            for (var j = 0; j < APP_USER_ROLES.length; j++) {
              var ur = _.findWhere(act, { slug : APP_USER_ROLES[j] });
              if (ur != null ) {
                if ( ur.action.indexOf('folder') !== -1 ) {
                  current.children[i].actions = 'actions';
                }
              }
            }
          }
        } else {
          current.children[i].actions = 'actions';
        }

        var rendered = Mustache.render(template, current.children[i]);
        $('#output').append(rendered);
        $('.no_actions').on('contextmenu', function(e) {
          e.preventDefault()
        });
      }
    }
    getFilesList();
  });
}
function getFilesList() {
  $.post(
    APP_GED_FILE_LIST_URL,
    {
      id: currentFolder.data.id
    },function(f) {
      var files = JSON.parse(f);
      for ( var i in files ){
        var file = files[i];
        var template = $('#file_tmpl').html();
        Mustache.parse(template);

        file.created_at = formatDMY(file.created_at);
        file.updated_at = formatDMY(file.updated_at);
        file.actions = 'no_actions';

        var act = folders_actions[currentFolder.type];
        if (act) {
          if ( act.length ) {
            for (var i = 0; i < APP_USER_ROLES.length; i++) {
              var ur = _.findWhere(act, { slug : APP_USER_ROLES[i] });
              if (ur != null ) {
                if ( ur.action.indexOf('file') !== -1 ) {
                  file.actions = 'actions';
                }
              }
            }
          }
        } else {
          file.actions = 'actions';
        }

        var rendered = Mustache.render(template, file);
        $('#output').append(rendered);

      }
      $('#ged tr').css('cursor','pointer').on('click', function() {
        $(this).toggleClass('row_checked');
      });
      $('tr').on('dblclick', function() {
        if ( $(this).attr('type') == 'folder'){

          activateNode($("#tree").fancytree("getTree").getNodeByKey($(this).attr('key')));
        } else if ( $(this).attr('type') == 'file'){
          openGedFile($(this).attr('id'));
        }
      });

      hideLoader();
      $('#tree').removeClass('disabled');
      $('#ged').animate({opacity: 1});

      table = $("#ged_datatable").DataTable(dt_options);
      //initDraggAndDropp();

      $('.action').on('click', function(e) {
        e.preventDefault();
        var y = $(this).offset().top - 5;
        var x = $(this).offset().left - 5;

        $(this).parent('td').parent('tr').contextMenu({x: x, y: y});
      });
    }
  );
}
function initDraggAndDropp() {


  $( "#ged_datatable .file, #ged_datatable .folder" ).draggable({
    start: function() {
      moveItem($(this))
    },
    end: function() {
      moving = false;
    },
    opacity: 0.8,
    helper: "clone"
  });

  $( "#ged_datatable .folder, span.fancytree-node" ).droppable({
    classes: {
      "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {

      if ( $(this).hasClass('fancytree-node') ){

        var node = $.ui.fancytree.getNode(event);
        node.info(event.type);
        current_move.destination_id = node.data.id;

      } else {
        current_move.destination_id = $(this).attr('data-id');
      }
      moving = false;
      moveCurrentSelection(function() {

        initTreeView(function() {
          $("#tree").fancytree("getTree").reload(tree);
          var node = $("#tree").fancytree("getTree").getNodeByKey(currentFolder.key);
          activateNode(node);
          $("#modal-folder").modal('hide');
        });
      },function() {

        initTreeView(function() {
          $("#tree").fancytree("getTree").reload(tree);
          var node = $("#tree").fancytree("getTree").getNodeByKey(currentFolder.key);
          activateNode(node);
          $("#modal-folder").modal('hide');
        });
      });
    }
  });
}
function moveItem(data) {

  current_move.id = data.attr('data-id');
  current_move.type = data.attr('type');
  moving = true;
}
function moveCurrentSelection(onSuccess, onRestrict) {
  showLoader();
  $.post(
    APP_GED_CHECK_MOVE_URL,
    current_move,
    function(res) {
      var data = JSON.parse(res);
      if ( data.alert != undefined ){

        var template = $('#restriction_tmpl').html();
        Mustache.parse(template);
        var rendered = Mustache.render(template, { roles : data.roles });

        Swal.fire({
          title: 'Déplacement',
          html : rendered,
          showCancelButton: true,
          cancelButtonColor: '#385e9d',
          confirmButtonText: 'Continuer le déplacement',
          cancelButtonText: 'Annuler',
        }).then((result) => {
          if (result.value) {
            $.post(
              APP_GED_MOVE_URL,
              current_move,
              function() {
                $.post(
                  APP_GED_GET_RIGHTS_URL,
                  {
                    id: current_move.id,
                    type: current_move.type
                  }, function(res) {
                    hideLoader();
                    onRestrict();
                    ged_notify('L\'élément à été déplacé',null,'fas fa-check','success');
                })
              }
            );
          } else {
            hideLoader();
          }
        })

      } else {
        $.post(
          APP_GED_MOVE_URL,
          current_move,
          function() {
            $.post(
              APP_GED_GET_RIGHTS_URL,
              {
                id: current_move.id,
                type: current_move.type
              }, function(res) {
                onSuccess();
                  hideLoader();
                ged_notify('L\'élément à été déplacé',null,'fas fa-check','success')
            })
          }
        );
      }
    }
  );
}
function ged_notify(title, message, icon, type) {
  $.notify({
      icon : icon,
      title: title,
      message : message == null ? formattedPath : message
    },{
      type: type,
      offset: { x: 15, y: 15 },
      spacing: 10,
      placement: {
    		from: "top",
    		align: "center"
    	},
      template : '<div data-notify="container" class="alert alert-dismissible alert-{0} alert-notify" role="alert"><span class="alert-icon" data-notify="icon"></span> <div class="alert-text"</div> <span class="alert-title" data-notify="title">{1}</span> <span data-notify="message">{2}</span></div><button type="button" class="close" data-notify="dismiss" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
  });
}
