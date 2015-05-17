/**
 * Created by VladHome on 5/16/2015.
 */
(function(){

    var makeBreadCrumb = function(){
       var el =  $('[data-id=breadcrumb]');
        if(el){
            var row = $('<div class="col-lg-12">');
           var h1 =  el.children('h1').addClass('page-header').appendTo(row);

            var ol =$('<ol class="breadcrumb">');
             el.children('a').each(function(index,item){
                 var a = $(item);
                 $('<li>').append(a).appendTo(ol);


             });

            $('<li>').text(h1.text()).appendTo(ol);
            row.append(ol);

            var h2 = el.children('h2').remove().text();
            var small =$('<small>').text('  '+h2).appendTo(h1)

            el.addClass('row').append(row);

        }

    }
    makeBreadCrumb();

    $('.panels-row').each(function(index,item){
        var row =$(item).addClass('row');


        row.children('h2').addClass('page-header');
        row.children('section').each(function(index,item){
            var item=$(item).remove();
            var col= $('<div class="col-md-3 col-sm-6">');
            var panel= $('<div class="panel panel-default text-center">');
            var head = $('<div class="panel-heading"><span class="fa-stack fa-5x"><i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-'+item.children('icon').text()+' fa-stack-1x fa-inverse"></i></span> </div>');
            var body = $('<div class="panel-body">').append(item.children('div'));
            panel.append(head).append(body);
        //    console.log(item);
            row.append(col.append(panel));

        })


    });

    //////////////////////////////////////////////////////
    $('.media-row').each(function(index,item){
        var row =$(item).addClass('row');
        var head = $('<div class="col-lg-12">').append(row.children('h2').addClass('page-header')).appendTo(row);

        var i=0;
        var col1=$('<div class="col-md-4">');
        var col2=$('<div class="col-md-4">');
        var col3=$('<div class="col-md-4">');
        var i=1;
        row.children('section').each(function(index,item){

            var item=$(item).remove();
            var h1=item.children('h1').addClass('media-heading');
            var media= $('<div class="media">');
            var head = $('<div class="pull-left"><span class="fa-stack fa-2x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-'+item.children('icon').text()+' fa-stack-1x fa-inverse"></i></span> </div>');
          //  h1 = $('<div class="media-heading">').text(h1);
            var body = $('<div class="media-body">').append(h1).append(item.children('div'));
            media.append(head).append(body);

            switch(i++){
                case 1:
                    col1.append(media);
                    break;
                case 2:
                    col2.append(media);
                    break;
                case 3:
                    col3.append(media);
                    break;

            }
            if(i>3) i=1;

            //    console.log(item);


        })
        row.append(col1);
        row.append(col2);
        row.append(col3);


    });



    $('.tabs-row').each(function(index,item){
        var row =$(item);
        var head = $('<div class="col-lg-12">').append(row.children('h2').addClass('page-header')).appendTo(row);

        var tabs = $('<div class="col-lg-12">');
        var tabsBody =$('<div class="tab-content">');
        var ui ='<ul class="nav nav-tabs nav-justified">';


        row.children('section').each(function(index,item){

            var item=$(item).remove();
            var h1=item.children('h1') ;
            var text = item.children('div') ;
            var icon = item.children('icon');
            ui+='<li><a href="#'+h1.text().replace(/ /g,'')+'" data-toggle="tab"><i class="fa fa-'+icon.text()+'"></i> '+h1.text()+'</a></li>';
            var body=$('<div class="tab-pane fade" id="'+h1.text().replace(/ /g,'')+'">').append(item.children('div'));
            tabsBody.append(body);
        })
        tabs.append(ui+'</ui>');
        tabs.append(tabsBody);
        row.append(tabs);

    });



$('[data-tmpl=item-project]').each(function(key,el){
        el=$(el);
    var title= $('<h3>').text(el.children('h1').remove().text());
    var img = el.children('img');
    var href= el.children('a');
    var href2= href.clone().text('');
    var text = el.children('div');
    var col = $('<div class="col-md-7">').append(href2.append(img)).appendTo(el);

    href.addClass('btn btn-primary');
     col =$('<div class="col-md-5">').append(title).append(text).append(href).appendTo(el);

    img.addClass('img-responsive img-hover');
    el.addClass('row');
    el.prepend('<br/>');
    el.append('<br/>');
  $('<hr/>').insertAfter(el);

  //  console.log(el);
});

})();