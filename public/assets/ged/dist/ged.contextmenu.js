var items_file = {
  'edit': {
      name: "Ouvrir",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">open_in_browser</i> ' + item.name);
          return 'context-menu-material';
      }
  },
  'download_original': {
      name: "Télécharger",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">file_download</i> ' + item.name);
          return 'context-menu-material';
      }
  },
  'rename': {
      name: "Renommer",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">wrap_text</i> ' + item.name);
          return 'context-menu-material';
      }
  },
  'move': {
      name: "Déplacer",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">sync_alt</i> ' + item.name);
          return 'context-menu-material';
      }
  },
  'delete': {
      name: "Supprimer",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">&#xE872;</i> ' + item.name);
          return 'context-menu-material md-color-red-600';
      }
  }
};
var items_folder = {
  'rename': {
      name: "Renommer",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">wrap_text</i> ' + item.name);
          return 'context-menu-material';
      }
  },
  'move': {
      name: "Déplacer",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">sync_alt</i> ' + item.name);
          return 'context-menu-material';
      }
  },
  'delete': {
      name: "Supprimer",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">&#xE872;</i> ' + item.name);
          return 'context-menu-material md-color-red-600';
      }
  }
};
if ( APP_ACCESS_RIGHTS ){
  items_file['role'] = items_folder['role'] = {
      name: "Gestion des droits",
      icon: function(opt, $itemElement, itemKey, item){
          $itemElement.html('<i class="material-icons">security</i> ' + item.name);
          return 'context-menu-material';
      }
  };
}
function initMove(type, id) {

  current_move.id = id;
  current_move.type = type;

  initTreeView(function() {
    $("#tree_move").fancytree({
      source: tree,
      activate: function(event, data){
        current_move.destination_id = data.node.data.id;
        $('.move_item').off('click').on('click', function() {

          $('#modal-move').modal('hide');
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
        });
      },
      init: function() {
        var te = $("#tree_move").fancytree("getTree").getNodeByKey('0');
        te.sortChildren(function(a,b) {
          var x = a.title.toLowerCase(),
          y = b.title.toLowerCase();
          return x === y ? 0 : x > y ? 1 : -1;
        }, true);
        te.setExpanded(true);
        activateNode(te);
      }
    });
    $('#modal-move').modal('show');
  });
}
function folderAction(key,options) {
  switch (key) {
    case 'move':
      initMove('folder', options.$trigger.attr('data-id'));
      break;
    case 'rename':

      var path = options.$trigger.attr('data');
      if ( path == null ){
        var node = $.ui.fancytree.getNode(options.$trigger);
        path = node.data.path;
      }

      Swal.fire({
        title: 'Renommer le dossier',
        text : options.$trigger.attr('title'),
        showCancelButton: true,
        input: 'text',
        confirmButtonColor: '#385e9d',
        confirmButtonText: 'Renommer',
        cancelButtonText: 'Annuler',
      }).then((result) => {
        if (result.value != null) {
          $.post(
            APP_GED_RENAME_URL,
            {
              path : path,
              name : result.value,
              type : 'folder'
            },
            function() {

              initTreeView(function() {
                $("#tree").fancytree("getTree").reload(tree);
                render();
              });

            }
          );
        }
      });

      break;
    case 'role':
        var item_id = options.$trigger.attr('data-id');
        var title = options.$trigger.attr('title');

        if ( title == null ){
          title = '';
        }
        if ( item_id == null ){
          var node = $.ui.fancytree.getNode(options.$trigger);
          item_id = node.data.id;
        }
        getRoles(item_id, 'folder', title, true);
        break;
    case 'delete':

      var path = options.$trigger.attr('data');
      if ( path == null ){
        var node = $.ui.fancytree.getNode(options.$trigger);
        path = node.data.path;
      }
      Swal.fire({
        title: 'Êtes-vous sur de vouloir faire cela ?',
        text: "Cette action est définitive.",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#385e9d',
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler',
      }).then((result) => {
        if (result.value) {
          $.post(
            APP_GED_REMOVE_FOLDER_URL,
            {
              path : path
            },
            function() {
              $("#tree").fancytree("getTree").getNodeByKey(options.$trigger.attr('key')).remove();
              render();
              ged_notify('L\'élément à été supprimé',null,'fas fa-check','success')
            }
          );
        }
      })
      break;

  }
}
function fileAction(key, options) {
  switch (key) {
    case 'edit':
      openGedFile(options.$trigger.attr('id'));
      break;
    case 'move':
      initMove('file', options.$trigger.attr('data-id'));
      break;
    case 'download_original':
      var url = APP_GED_ABSOLUTE_URL+options.$trigger.attr('file');

      var e = document.createElement('a');
      e.setAttribute('href',url );
      e.setAttribute('download', options.$trigger.attr('title'));
      e.style.display = 'none';
      document.body.appendChild(e);
      e.click();
      document.body.removeChild(e);
      break;
    case 'rename':
      Swal.fire({
        title: 'Renommer le fichier',
        text : options.$trigger.attr('title'),
        showCancelButton: true,
        input: 'text',
        confirmButtonColor: '#385e9d',
        confirmButtonText: 'Renommer',
        cancelButtonText: 'Annuler',
      }).then((result) => {
        if (result.value != null) {
          $.post(
            APP_GED_RENAME_URL,
            {
              id : options.$trigger.attr('id'),
              name : result.value,
              type : 'file'
            },
            function() {
              render();
            }
          );
        }
      });
      break;
    case 'role':
        getRoles(options.$trigger.attr('data-id'), 'file', options.$trigger.attr('file'), true);
        break;
    case 'delete':
      Swal.fire({
        title: 'Êtes-vous sur de vouloir faire cela ?',
        text: "Cette action est définitive.",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#385e9d',
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler',
      }).then((result) => {
        if (result.value) {
          $.post(
            APP_GED_REMOVE_URL,
            {
              ged_id : options.$trigger.attr('id')
            },
            function() {
              render();
              ged_notify('L\'élément à été supprimé',null,'fas fa-check','success')

            }
          );
        }
      })
      break;

  }
}
$.contextMenu({
  selector: 'tr.folder.actions',
  callback: function(key, options) {
    folderAction(key,options);
  },
  items: items_folder
});
$.contextMenu({
  selector: 'tr.file.actions',
  callback: function(key, options) {
    fileAction(key, options);
  },
  items: items_file
});
