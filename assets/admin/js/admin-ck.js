var attachments=[],selectedAttachment=[],att="",modalAction="",gy={Global:{init:function(){var e=this;this.oPrettySelect();this.oResponsiveNav()},oPrettySelect:function(){$(".selectpicker").select2({minimumResultsForSearch:-1});alert("test")},oResponsiveNav:function(){$(".navbar-toggle").click(function(){$(this).toggleClass("navbar-toggle--trigger");$(".t-sidebar").toggleClass("t-sidebar--pushed");$("#ascrail2001").toggleClass("nicescroll-rails--pushed");$("#ascrail2002").toggleClass("nicescroll-rails--pushed");$("#ascrail2003").toggleClass("nicescroll-rails--pushed");return!1})}},Front:{init:function(){var e=this;this.oNiceScrollbar();this.oEditor();this.oMessageBtn();this.oInputNumber();this.jsAttachItems()},oNiceScrollbar:function(){$("#post-scroller").niceScroll({styler:"fb",cursorcolor:"rgba(0,0,0,0.2)",cursorwidth:"4",cursorborderradius:"10px",cursorborder:"",zindex:"1000",autohidemode:!1});$(".modal").niceScroll({autohidemode:!1});$("html, .modal").niceScroll({styler:"fb",cursorcolor:"#638694 ",cursorwidth:"6",cursorborderradius:"10px",background:"#d4d4d4",cursorborder:"",zindex:"1000"});$(".timeline-messages-listing, .list-group--scroll").niceScroll({styler:"fb",cursorcolor:"#95bce4 ",cursorwidth:"7",cursorborderradius:"10px",cursorborder:"",zindex:"1000"});$(".t-sidebar").niceScroll({styler:"fb",cursorcolor:"rgba(56,83,94,0.3)",cursorwidth:"4",cursorborderradius:"6px",cursorborder:"",zindex:"1015",autohidemode:!1});$(".media-attachments").niceScroll({styler:"fb",cursorcolor:"#d4d4d4",cursorwidth:"6",cursorborderradius:"6px",cursorborder:"",zindex:"2000",autohidemode:!1})},jsAttachItems:function(){$(".js-attached-btn").click(function(){$(".js-attached-items").slideDown("fast")})},bootWysiOverrides:{initInsertMedia:function(e){var t=this,n=$("#defaultModal");n.on("hide",function(){t.editor.currentView.element.focus()});$("body").on("click","#attach-to-post",function(){for(i=0;i<selectedAttachment.length;i++){var e='<img src="'+baseURL+selectedAttachment[i].meta_data.file+'" />';t.editor.currentView.element.focus();if(caretBookmark){t.editor.composer.selection.setBookmark(caretBookmark);caretBookmark=null}t.editor.composer.commands.exec("insertHTML",e)}$(".media__attachment").removeClass("is-active");selectedAttachment=[]});e.find("a[data-wysihtml5-command=insertMedia]").click(function(){var e=$(this).hasClass("wysihtml5-command-active");if(!e){t.editor.currentView.element.focus(!1);caretBookmark=t.editor.composer.selection.getBookmark();if($(".media-uploader").length==0){modalAction="send-to-editor";n.addClass("modal--full");$.get(baseURL+"media/modal").done(function(e){n.html(e);n.modal();$(".media-library").trigger("click")})}else{n.modal();$(".media-library").trigger("click")}return!1}return!0})}},oEditor:function(){var e=this,t=window.location.protocol+"//"+window.location.host,n=typeof n=="undefined"?t+"/csk/":n,r={media:function(e,t){var n=t&&t.size?" btn-"+t.size:"";return"<li><div class='btn-group'><a class='btn btn-"+n+" btn-default' data-wysihtml5-command='insertMedia' title='"+e.media.insert+"' tabindex='-1'><i class='glyphicon glyphicon-folder-open'></i></a>"+"</div>"+"</li>"}};$.extend($.fn.wysihtml5.locale.en,{media:{insert:"Insert Media"}});$.extend($.fn.wysihtml5.defaultOptions,{media:!0});$.extend($.fn.wysihtml5.Constructor.prototype,this.bootWysiOverrides);$(".wysiwyg-textarea").wysihtml5({"font-styles":!0,emphasis:!0,lists:!0,html:!0,link:!0,image:!0,color:!0,customTemplates:r,stylesheets:n+"assets/global/js/libs/bootstrap-wysihtml5/lib/css/bootstrap3-wysiwyg5-color.css"})},oMessageBtn:function(){$(".btn-message-submit").click(function(){$(this).addClass("disabled");$(".message-submit").show()})},oInputNumber:function(){$(".numbers-row .numbers-sorting-listing").append('<div class="inc number-sorting"><span class="hide">+</span><i class="fa fa-sort-up"></i></div><div class="dec number-sorting"><span class="hide">-</span><i class="fa fa-sort-down"></i></div>');$(".number-sorting").on("click",function(){var e=$(this),t=e.parent().parent().find("input").val();if(e.text()=="+")var n=parseFloat(t)+1;else if(t>0)var n=parseFloat(t)-1;else n=0;e.parent().parent().find("input").val(n)})}},customDropdownCheckbox:{init:function(){var e=this;this.oCheckboxDropdown()},oCheckboxDropdown:function(){$(".dropdown-menu").on("click",function(e){$(this).hasClass("dropdown-menu--extended")&&e.stopPropagation()})}},jsMenuItem:{init:function(){var e=this;this.oMenuDraggable()},oMenuDraggable:function(){$(".js-menu-remove").click(function(){$(this).parent.parent(".js-menu-item").hide()});$(".js-menu-item").hover(function(){$(this).find(".js-menu-remove").toggleClass("js-menu-remove--ease")})}},sideBarDrop:{init:function(){var e=this;this.oSidebarDropdown()},oSidebarDropdown:function(){jQuery(".t-sidebar .sub-menu > a").click(function(){var e=jQuery(".sub-menu.open",$(".t-sidebar"));e.removeClass("open");jQuery(".arrow",e).removeClass("open");jQuery(".sub",e).slideUp(200);var t=jQuery(this).next();if(t.is(":visible")){jQuery(".arrow",jQuery(this)).removeClass("open");jQuery(this).parent().removeClass("open");t.slideUp(200)}else{jQuery(".arrow",jQuery(this)).addClass("open");jQuery(this).parent().addClass("open");t.slideDown(200)}var n=$(this).offset();diff=200-n.top;diff>0?$(".t-sidebar").scrollTo("-="+Math.abs(diff),500):$(".t-sidebar").scrollTo("+="+Math.abs(diff),500)})}},Admin:{init:function(){},confirmDelete:function(){$("body").on("click","#delete-single-entry",function(e){e.preventDefault();var t="",n="",r="";t='<button type="button" data-value="0" class="confirmBtn btn btn-default" data-dismiss="modal">Cancel</button>';t+='<button type="button" data-value="1" class="btn btn-primary confirmBtn" data-dismiss="modal">Continue</button>';n="Delete";r="Are you sure you want to delete?";gy.Admin.alertBox(n,r,t);var i=!1;$("body").on("click",".confirmBtn",function(e){e.preventDefault();var t=$(this);t.data("value")==1&&(i=!0);return!1});return i})},alertBox:function(e,t,n){$("#defaultModal .modal-footer").html(n);$("#defaultModal .modal-body").html(t);$("#defaultModal .modal-title").html(e);$("#defaultModal").modal()},xActivate:function(e,t,n){var r="",i="",s="",o=$(e).val();if(o==-1)return;var u=$('input[name^="cid[]"]:checked');if(u.length==0){r='<button type="button" class="confirmBtn btn btn-primary" data-dismiss="modal">Close</button>';i="Message";s="No "+n+" selected";gy.Admin.alertBox(i,s,r);return}var a=[];u.each(function(){a.push($(this).val())});$.ajax({type:"post",url:baseURL+t,dataType:"json",data:{cid:a,status:o},success:function(e){tableHelper.ajaxTableHelper()}})},xdelete:function(e,t){var n="",r="",i="",s=$('input[name^="cid[]"]:checked');if(s.length==0){n='<button type="button" class="confirmBtn btn btn-primary" data-dismiss="modal">Close</button>';r="Message";i="No "+t+" selected";gy.Admin.alertBox(r,i,n);return}n='<button type="button" data-value="0" class="confirmBtn btn btn-default" data-dismiss="modal">Cancel</button>';n+='<button type="button" data-value="1" class="btn btn-primary confirmBtn" data-dismiss="modal">Continue</button>';r="Delete "+t;i="Are you sure you want to delete?";gy.Admin.alertBox(r,i,n);$("body").on("click",".confirmBtn",function(){if($(this).data("value")){var t=[];s.each(function(){t.push($(this).val())});$.ajax({type:"post",url:baseURL+e,dataType:"json",data:{cid:t},success:function(e){tableHelper.ajaxTableHelper()}})}});return!1}},Media:{init:function(){this.setPostThumbnail();this.attachmentDetails();this.attach();this.saveAttachment();this.library();this.loadMore();this.search();this.fileUpload()},fileUpload:function(){var e=this;$("body").on("click",".upload-files",function(){$(".table tbody.files").html("")});$("body").on("click",".fileupload-buttonbar .start",function(){$("#load-more-media").removeAttr("disabled")})},saveAttachment:function(){$("body").on("change","#attachment-form :input",function(){var e=$(this).closest("form"),t=e.attr("action"),n=e.serialize();$(".settings-save-status .spinner").show();$.post(t,n).done(function(e){$(".settings-save-status .spinner").hide();$(".settings-save-status .saved").show().delay(3e3).fadeOut()})})},setPostThumbnail:function(){var e=this;$("body").on("click",".set-post-thumbnail",function(){globalJs.Overlay.layOpen(".t-content");modalAction="send-post-thumbnail";if($(this).hasClass("panel__image-remove")){var t=$(this),n=$("#post_id").val();$.post(baseURL+"admin/delete-attachment",{post_id:n},function(t){e.getPostAttachment()});globalJs.Overlay.layClose()}else{var r=$("#defaultModal");r.addClass("modal--full");if($(".media-uploader").length==0)$.get(baseURL+"media/modal").done(function(e){r.html(e);r.modal();$(".media-library").trigger("click")});else{r.modal();$(".media-library").trigger("click")}globalJs.Overlay.layClose();$(".media-library").trigger("click")}})},library:function(){var e=this;$("body").on("click",".media-library",function(){var t=$(".media__attachment").length;t==0&&e.getMediaLibrary()})},search:function(){var e=this;$("body").on("keyup","#search-media",function(){if($(this).val().length<3&&$(this).val()!="")return!1;e.getMediaLibrary()})},loadMore:function(){var e=this;$("body").on("click","#load-more-media",function(){e.getMediaLibrary()})},getMediaLibrary:function(){var e=$("#search-media").val(),t=$(".media__attachment").length;t=typeof t==undefined||e!=""?0:t;$.post(baseURL+"media/library",{s:e,totalAttachments:t},function(n){e!=""&&(attachments=[]);for(var r=0;r<n.row.length;r++)attachments.push(n.row[r]);var i="";if(attachments.length!=0){var s=t;for(var o=s;o<attachments.length;o++){i+='<li class="media__attachment">';i+='<div class="media__preview">';i+='<div class="media__thumbnail">';i+='<img src="'+baseURL+attachments[o].meta_data.sizes["post-thumbnail"]+'" alt="" class="media__thumbnail">';i+="</div>";i+="</div>";i+="</li>"}}e.length!=0?$(".media-listings__inner > .media-attachments").html(i):$(".media-listings__inner > .media-attachments").append(i);n.totalRows<=$(".media__attachment").length&&$("#load-more-media").attr("disabled","disabled")},"json")},attachmentDetails:function(){$("body").on("click",".modal-body > .media__attachment",function(){var e=$(this),t=e.index(),n=attachments[t];if(e.hasClass("is-active"))for(var r=selectedAttachment.length-1;r>=0;r--)selectedAttachment[r].id===n.id&&selectedAttachment.splice(r,1);else{if(modalAction!="send-to-editor"){selectedAttachment=attachments[t];$(".media__attachment").removeClass("is-active")}else{var i=$.grep(selectedAttachment,function(e,t){return e.id==n.id});i.length==0&&selectedAttachment.push(n)}$.post(baseURL+"media/attachment",n,function(e){$(".media-attachment-details").html(e)})}e.toggleClass("is-active")})},attach:function(){var e=this;if(modalAction=="send-to-editor")return;$("body").on("click","#attach-to-post",function(){$("#attachment_title").remove();$("#attachment").remove();var t=$("#post_id").val();$.post(baseURL+"media/attach",{post_id:t,attachment:selectedAttachment.id,type:"post",title:""},function(){e.getPostAttachment()})});$("body").on("click","#url-attach-to-post",function(){$("#attachment").remove();var t=$("#attachment_title"),n=$("#attachment_url"),r=n.val().match(/^(http:|)\/\/(?:.*?)\.?(youtube|player\.vimeo)\.com\/(watch\?[^#]*v=(\w+)|video\/(\d+)).+$/);$(".invalid-url").remove();if(!r){$('<span class="alert-danger fade in invalid-url">Error: invalid url</span>').insertAfter(n);return!1}var i=$("#post_id").val();$.post(baseURL+"media/attach",{post_id:i,attachment:n.val(),type:"url",title:t.val()},function(){e.getPostAttachment()});$("#defaultModal").modal("hide")})},getPostAttachment:function(){if(modalAction=="send-to-editor")return;var e=$("#post_id").val();$.get(baseURL+"admin/post-attachment",{post_id:e,size:"post-thumbnail"},function(e){$(".panel__image").html(e)})}},Menu:{init:function(){this.addToMenu();this.menuType();this.modalItem()},addToMenu:function(){$("body").on("click",".add-to-menu",function(){var e=$('input[name^="_menu_item_object_id"]:checked'),t=$('select[name^="term_taxonomy_id"] :selected').val(),n=[];e.each(function(){n.push($(this).val())});$.post(baseURL+"admin/menu-item/create",{term_taxonomy_id:t,post_id:t,post_title:item_title,_menu_item_type:item_type,_menu_item_url:item_type}).done(function(e){console.log(e)})})},modalItem:function(){var e=this,t=$("#defaultModal");t.addClass("modal--full");$("body").on("click","#select-menu-item",function(){var e=$("#_menu_item_type :selected").val();$.get(baseURL+"admin/menu-item/modal",{post_type:e}).done(function(e){t.html(e);t.modal()})});t.on("click",".item_type",function(){var e=$(this),t=e.text(),n=e.data("id");$("#_menu_item_object_title").val(t);$("#_menu_item_object_id").val(n)})},menuType:function(){$("body").on("change","#_menu_item_type",function(){var e=$(this);$.post(baseURL+"admin/menu-item/tmpl-item",{item_type:e.val()}).done(function(e){$("#tmpl-item").html(e)})});$("#_menu_item_type").trigger("change")}}};