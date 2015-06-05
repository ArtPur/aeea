
Runner.Pdf=function(){this.maxwidth=0;this.maxheight=0;this.pdfbuilt=0;var selfLink=this;this.CalcMaxPage=function(){this.maxwidth=0;this.maxheight=0;var minleft=999999,mintop=999999;containers=$('[name="page"]').each(function(ind,element){if($('table[class*="runner-c-grid"]',element).length>0){element=$('table[class*="runner-c-grid"]',element).eq(0).get(0);}
if(element.offsetWidth>selfLink.maxwidth){selfLink.maxwidth=element.offsetWidth;}
if(element.offsetHeight>selfLink.maxheight){selfLink.maxheight=element.offsetHeight;}});if(!containers.length){$('div[class^="runner-s-"], div[class^="rnr-s-"]').each(function(index,element){var el=$(element).children(':eq(0)');if(el.hasClass('runner-c-pdf')||el.hasClass('rnr-c-pdf')||!el.length){return;}
if(el[0].offsetLeft+el[0].offsetWidth>selfLink.maxwidth){selfLink.maxwidth=el[0].offsetLeft+el[0].offsetWidth;}
if(el[0].offsetTop+el[0].offsetHeight>selfLink.maxheight){selfLink.maxheight=el[0].offsetTop+el[0].offsetHeight;}
if(el[0].offsetLeft<minleft){minleft=el[0].offsetLeft;}
if(el[0].offsetTop<mintop){mintop=el[0].offsetTop;}});}
this.maxwidth=this.maxwidth||document.body.scrollWidth;this.maxheight=this.maxheight||document.body.scrollHeight;if(mintop<999999){this.maxheight-=mintop;}
if(minleft<999999){this.maxwidth-=minleft;}};this.RunPDF=function(){this.CalcMaxPage();var connector=window.location.href.indexOf('?')>=0?'&':'?';$el=$('<iframe></iframe>').css({'position':'absolute','left':'-1000px'}).appendTo('body');$el.attr('src',window.location.href+connector+'pdf=1&width='+this.maxwidth+'&height='+this.maxheight+'&rndval='+Math.random());if($('.progress_bar').length==0){this.SetContent('<p>'+Runner.lang.constants.TEXT_PDF_BUILD1
+'<br><span style="display:block;background:white;border:solid black 1px;width:100px;height:20px;">'
+'<span class=progress_bar style="display:block;background:#6080FF;width:1px;height:100%"></span>'
+'</span><br>'
+'<span class=progress_percent></span>% '
+Runner.lang.constants.TEXT_PDF_BUILD2+'</p>');}
this.pdfbuilt=0;};this.SetProgress=function(total,progress){if(isNaN(total)||isNaN(progress)){return;}
var count=Math.floor(progress*100/total);count=count>100?100:count;$('.progress_bar').css('width',count+"px");$('.progress_percent').html(count);}
this.SetContent=function(content){var $printPageCont=$('[class*="printpdf"]'),$viewPageCont=$('[class*="viewpdf"]');if($printPageCont.length){$printPageCont.html(content);}
if($viewPageCont.length){$viewPageCont.html(content);}}
$('.pdflink').click(function(){selfLink.RunPDF();return false;});};Runner.Pdf=new Runner.Pdf();