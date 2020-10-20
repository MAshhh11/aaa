
var item = function(){
  this.id = 0;
  this.key = 0;
  this.parent = -1;
  this.title = '';
  this.children = [];
  this.date_crea = '';
  this.folder = true;
  return this;
};

var basePath = APP_EXPLORER_BASEPATH;

var formattedPath = null;
var currentParent = null;
var currentFolder = null;

var selectedMove = '';
var moving = false;
var current_move = {};

var tree = [];
var uploader = null;
var can_open = true;
var is_start = true;

var check_icon = '<i class="material-icons">check</i> ';

var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];

Dropzone.autoDiscover = false;

initTreeView(function() {
  $("#tree").fancytree({
    source: tree,
    clickFolderMode: 1,
    //extensions: ["contextMenu", "dnd", "edit"],
    focusOnSelect: true,
    // contextMenu: {
    //   menu : items_folder,
    //   actions : function(node, action, options) {
    //     folderAction(action, options);
    //   }
    // },
    // dnd: {
    //     autoExpandMS: 400,
    //     focusOnClick: true,
    //     preventVoidMoves: true,
    //     preventRecursiveMoves: true,
    //     dragStart: function(node, data) {
    //       current_move.id = node.data.id;
    //       current_move.type = 'folder';
    //       return true;
    //     },
    //     dragEnter: function(node, data) {
    //       current_move.destination_id = node.data.id;
    //       return true;
    //     },
    //     dragDrop: function(node, data) {
    //       moveCurrentSelection(function() {
    //         data.otherNode.moveTo(node, data.hitMode);
    //       }, function() {
    //         data.otherNode.moveTo(node, data.hitMode);
    //       });
    //       return true;
    //     }
    // },
    dblclick: function(event, data){
      activateNode(data.node);
    },
    init: function() {
      var te = $("#tree").fancytree("getTree").getNodeByKey('0');
      te.sortChildren(function(a,b) {
        var x = a.title.toLowerCase(),
        y = b.title.toLowerCase();
        return x === y ? 0 : x > y ? 1 : -1;
      }, true);
      te.setExpanded(true);
      if (is_start) {
        activateNode(te);
      }
      is_start = false;
      $('.clndr_previous').on('click', function() {
        activateNode($("#tree").fancytree("getTree").getNodeByKey(currentParent.key.toString()));
      });
      //initDraggAndDropp();
      $('.fancytree-expander').mouseover(function(event) {
        can_open = false;
      });
      $('.fancytree-expander').mouseout(function(event) {
        can_open = true;
      });
    }
  }).on("mouseover", "span.fancytree-node", function(event){
    if ( moving ){
      var node = $.ui.fancytree.getNode(event);
      node.info(event.type);
    }
  });
  $(".fancytree-container").addClass("fancytree-connectors");
});

function activateNode(node) {

  if ( can_open ){

    $('#action-folder, #action-file').hide();

    var act = folders_actions[node.type];
    if (act) {
      if ( act.length ) {
        for (var i = 0; i < APP_USER_ROLES.length; i++) {
          var ur = _.findWhere(act, { slug : APP_USER_ROLES[i] });
          if (ur != null ) {
            for (var j = 0; j < ur.action.length; j++) {
              $('#action-'+ur.action[j]).show();
            }
          }
        }
      }
    }

    if ( !$('#ged').is(':visible') ){
      $('#ged, #search, #ged_header, #search_header').toggle()
    }

    var root = node.getParentList();
    if ( node.parent ){
      currentParent = node.parent;
    }
    currentFolder = node;
    node.setActive();
    render();

    if( currentFolder.key == '0'){
      $('.clndr_previous').fadeOut()
    } else {
      $('.clndr_previous').fadeIn()
    }

    currentPath = currentFolder.data.path;
    var html = currentFolder.data.path.replace(new RegExp("/", 'g'), ' / ');

    if ( node.title == 'Corbeille' ){
      $('.empty_btn').show();
    } else {
      $('.empty_btn').hide();
    }
    if ( root.length < 5 ){
      $('.path').html(html);
    } else {
      $('.path').html('.../'+root[root.length-1].title+'/'+node.title);
    }
    formattedPath = html;

    $('.add_folder').off('click').on('click', function() {

      if ( $('#add_folder_name').val() != ''){

        var restriction = $('#folder_restriction').serializeArray();
        var restrict = [];
        for ( var i in restriction ){
          restrict.push(restriction[i].name)
        }
        $.post(
          APP_GED_ADD_FOLDER_URL,
          {
            root: currentFolder.data.id,
            name: $('#add_folder_name').val(),
            path: $('#add_folder_name').val().toLowerCase()+'/',
            key: currentFolder.key,
            //restrictions : restrict
          }, function(res) {

            if ( res == 'already exist'){
              ged_notify('Ce nom de dossier est déjà utilisé. Veuillez saisir un autre nom pour créer le dossier.',null,'fas fa-check','danger');
              $("#modal-folder").modal('hide');

            } else if ( res == 'error'){
              ged_notify('Vous n\'avez pas les droits suffisants pour effectuer cette action.',null,'fas fa-check','danger');
              $("#modal-folder").modal('hide');

            } else {
              initTreeView(function() {
                $("#tree").fancytree("getTree").reload(tree);
                $("#tree").fancytree("getTree").expandAll();
                $("#modal-folder").modal('hide');

                var te = $("#tree").fancytree("getTree").getNodeByKey(currentFolder.key);
                te.setExpanded(true);
                activateNode(te);

                ged_notify('Le dossier à été ajouté',null,'fas fa-check','success')
              });
            }
          }
        )
      } else {

        ged_notify('Veuillez saisir le nom du dossier.',null,'fas fa-warning','warning')
      }
    });
    if ( uploader != null ){
      Dropzone.forElement("#uploader").destroy();
    }
    uploader = $('#uploader').dropzone({
      url: APP_GED_UPLOAD_URL+"?destination_id="+currentFolder.data.id ,
      paramName: "file",
      addRemoveLinks: true,
      dictRemoveFile: 'Supprimer',
      dictCancelUpload: 'Annuler',
      timeout: 999999999999,
      maxFilesize: 999999999999,
      dictDefaultMessage: 'Cliquez ici ou déposez vos fichiers',
      dictDefaultmessage: check_icon+"Importer dans le dossier en cours",
      init: function() {
        this.on("success", function(file) {

            current_files = this.files;
            this.removeFile(file);

            // disabled for sorop club restrictions

            // var restriction = $('#file_restriction').serializeArray();
            // var restrict = [];
            // for ( var i in restriction ){
            //   restrict.push(restriction[i].name)
            // }
            // $.post(
            //   APP_GED_SET_FILE_RESTRICTION_URL,
            //   {
            //     name: file.name,
            //     destination_id: currentFolder.data.id,
            //     restrictions : restrict
            //   }, function(res) {
            //     render(node.key - tree[0].id);
            //     $("#modal-uploader").modal('hide');
            //
            //     ged_notify('Le fichier à été ajouté',null,'fas fa-check','success')
            // })

            render();
            $("#modal-uploader").modal('hide');

            ged_notify('Le fichier à été ajouté',null,'fas fa-check','success')

            // // end disabled
        });
      }
    });
  }
}

addGedRequest('.ged_remove', APP_GED_REMOVE_URL, function(){
  activateNode($("#tree").fancytree("getTree").getNodeByKey(currentFolder.key));
  ged_notify('Le fichier a été supprimé',null,'fas fa-check','success')

}, true);
addGedRequest('.ged_restore', APP_GED_RESTORE_URL, function(){ render() }, true);
addGedRequest('.ged_empty', APP_GED_EMPTY_URL, function(){ render() });
