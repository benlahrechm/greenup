$('#affmore').click(function () {show_more();});

function show_more() {
    $('#sport').animate({height: "450px"}, 1000);
    $('#affmore').remove();
}

function test(pageNumber)
{

  var page="#page-"+pageNumber;
  $('.selection').hide()
  $(page).show()

}

$(function() {
     $("#content").ready(function(){$("#page-1").show(); $('#pagi').show();});
        $('#pagi').pagination({
            items: $('.selection').size(),
            itemsOnPage: 1,
            cssStyle: "light-theme",
            onPageClick: function(pageNumber){test(pageNumber);}
        });
    });