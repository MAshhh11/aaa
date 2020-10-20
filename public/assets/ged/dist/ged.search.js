var $input = $('#search_input');
var $results = $('#search_results');
var $search_result = $('#all_search_results');
var search_table = null;

var search = '';
var filter = '';

var xhr = null;
// $input.on('keyup', function() {
//
//   search = $(this).val();
//   if ( xhr != null ){
//     xhr.abort()
//   }
//   if ( search != ''){
//     renderSearch()
//   }
// });
$('.toggle_search').on('click', function() {
  $('#ged, #search, #ged_header, #search_header').toggle()
});
$('.filters a').on('click', function() {
  filter = $(this).attr('data-filter');
});
$('#search_form').on('submit', function(e) {
  e.preventDefault();
  $('.submitSearch').addClass('disabled');
  search = $(this).find('input').val();
  renderSearch();
});

function renderSearch() {
  searchIn = [];
  $('.searchIn .active').each(function(index, el) {
    searchIn.push($(this).attr('data-search'));
  });
  xhr = $.post(
    APP_GED_SEARCH_URL,
    {
      search : search,
      filter : filter,
      searchIn : searchIn
    }, function(res) {
      $('.submitSearch').removeClass('disabled');
      var data = JSON.parse(res);
      for (var i = 0; i < data.folders.length; i++) {

        data.folders[i].actions = 'actions';
        if ( data.folders[i].type != '' && data.folders[i].type != null ){
          data.folders[i].actions = 'no_actions';
        }

        // ADD CHECK RIGHTS FOR ROLES // ACTIONS
      }
      if ( data.files.length > 0 || data.folders.length > 0 ){

        var template = $('#result_tmpl').html();
        Mustache.parse(template);

        var rendered = Mustache.render(template, data);
        $search_result.html(rendered);

        if ( search_table != null){
          search_table.destroy();
        }
        search_table = $("#search-table").DataTable({
          "language": {
            "url": APP_TABLE_LANG_FR
          },
          "searching": false
        });

        highlight(search);

        $('#search tr').css('cursor','pointer').on('click', function() {
          $(this).toggleClass('row_checked');
        });

        $('tr').off('dblclick').on('dblclick', function() {
          if ( $(this).attr('type') == 'folder'){
            activateNode($("#tree").fancytree("getTree").getNodeByKey($(this).attr('key')));
          } else if ( $(this).attr('type') == 'file'){
            openGedFile($(this).attr('id'));
          }
        });
        $('.no_actions').on('contextmenu', function(e) {
          e.preventDefault()
        });
        $('.action').off('click').on('click', function(e) {
          e.preventDefault();
          var y = $(this).offset().top - 5;
          var x = $(this).offset().left - 190;

          $(this).parent('td').parent('tr').contextMenu({x: x, y: y});
        });

      } else {
        $search_result.html('Aucun résultat pour cette recherche.');
      }
        hideLoader();
    }
  )
}

function highlight(text) {

  $('#search_results td').each(function(index, el) {
    innerHTML = $(this).html();

    var index = innerHTML.indexOf(text);
    if (index >= 0) {
     innerHTML = innerHTML.substring(0,index) + "<span class='highlight'>" + innerHTML.substring(index,index+text.length) + "</span>" + innerHTML.substring(index + text.length);
     $(this).html(innerHTML)
    }
  });
}
