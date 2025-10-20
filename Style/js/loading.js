//Never forgotten youth
//github  https://github.com/IFmiss/loading
//Show Loading
(function($){
    $.fn.loading = function(options){
        var $this = $(this);
        var _this = this;
        return this.each(function(){
            var loadingPosition ='';
            var defaultProp = {
                direction:                 'column',                                                // direction: column (vertical) or row (horizontal)
                animateIn:                  'fadeInNoTransform',                                    // enter animation type
                title:                  'Please wait...',                                              // display title/content
                name:                     'loadingName',                                             // data-name attribute used to identify and remove the loading mask
                type:                     'origin',                                                   // pic or origin  
                discription:             'This is a description',                                         // loading description
                titleColor:             'rgba(255,255,255,0.7)',                                // title text color
                discColor:                 'rgba(255,255,255,0.7)',                                // description text color
                loadingWidth:           260,                                                    // container background width
                loadingBg:                'rgba(0, 0, 0, 0.6)',                                      // container background color
                borderRadius:             12,                                                     // container border radius
                loadingMaskBg:            'transparent',                                          // overlay mask color
                zIndex:                   1000001,                                                  // z-index

                // Circular rotating loading style
                originDivWidth:            60,                                                       // loading div width
                originDivHeight:           60,                                                       // loading div height

                originWidth:              8,                                                      // dot width
                originHeight:             8,                                                      // dot height
                originBg:                 '#fefefe',                                              // dot background color
                smallLoading:             false,                                                  // show small loading

                // Image mode (pic)
                imgSrc:                 'http://www.daiwei.org/index/images/logo/dw.png',        // default image URL
                imgDivWidth:             80,                                                       // image div width
                imgDivHeight:             80,                                                       // image div height

                flexCenter:              false,                                                     // whether to use flex to center the loading div
                flexDirection:             'row',                                                    // flex direction: row or column                
                mustRelative:             false,                                                     // whether to set position: relative on $this
            };


            var opt = $.extend(defaultProp,options || {});

            // Set positioning mode based on whether targeting body or a specific element
            if($this.selector == 'body'){
                $('body,html').css({
                    overflow:'hidden',
                });
                loadingPosition = 'fixed';
            }else if(opt.mustRelative){
                $this.css({
                    position:'relative',
                });
                loadingPosition = 'absolute';
            }else{
                loadingPosition = 'absolute';
            }

            defaultProp._showOriginLoading = function(){
                var smallLoadingMargin = opt.smallLoading ? 0 : '-10px';
                if(opt.direction == 'row'){smallLoadingMargin='-6px'}

                // overlay mask layer
                  _this.cpt_loading_mask = $('<div class="cpt-loading-mask animated '+opt.animateIn+' '+opt.direction+'" data-name="'+opt.name+'"></div>').css({
                    'background':opt.loadingMaskBg,
                    'z-index':opt.zIndex,
                    'position':loadingPosition,
                }).appendTo($this);

                  // center content layer
                _this.div_loading = $('<div class="div-loading"></div>').css({
                    'background':opt.loadingBg,
                    'width':opt.loadingWidth,
                    'height':opt.loadingHeight,
                    '-webkit-border-radius':opt.borderRadius,
                    '-moz-border-radius':opt.borderRadius,
                    'border-radius':opt.borderRadius,
                  }).appendTo(_this.cpt_loading_mask);

                if(opt.flexCenter){
                    _this.div_loading.css({
                        "display": "-webkit-flex",
                        "display": "flex",
                        "-webkit-flex-direction":opt.flexDirection,
                        "flex-direction":opt.flexDirection,
                        "-webkit-align-items": "center",
                        "align-items": "center",
                        "-webkit-justify-content": "center",
                        "justify-content":"center",
                    });
                }

                // loading title
                _this.loading_title = $('<p class="loading-title txt-textOneRow"></p>').css({
                    color:opt.titleColor,
                }).html(opt.title).appendTo(_this.div_loading);

                // loading content (image or rotating dots)
                 _this.loading = $('<div class="loading '+opt.type+'"></div>').css({
                    'width':opt.originDivWidth,
                    'height':opt.originDivHeight,
                  }).appendTo(_this.div_loading);

                 // description
                _this.loading_discription = $('<p class="loading-discription txt-textOneRow"></p>').css({
                    color:opt.discColor,
                }).html(opt.discription).appendTo(_this.div_loading);

                if(opt.type == 'origin'){
                    _this.loadingOrigin = $('<div class="div-loadingOrigin"><span></span></div><div class="div-loadingOrigin"><span></span></div><div class="div_loadingOrigin"><span></span></div><div class="div_loadingOrigin"><span></span></div><div class="div_loadingOrigin"><span></span></div>').appendTo(_this.loading);
                      _this.loadingOrigin.children().css({
                        "margin-top":smallLoadingMargin,
                        "margin-left":smallLoadingMargin,
                        "width":opt.originWidth,
                        "height":opt.originHeight,
                        "background":opt.originBg,
                      });
                }    

                if(opt.type == 'pic'){
                    _this.loadingPic = $('<img src="'+opt.imgSrc+'" alt="loading" />').appendTo(_this.loading);
                }          


                  // prevent event propagation and default actions
                _this.cpt_loading_mask.on('touchstart touchend touchmove click',function(e){
                    e.stopPropagation();
                    e.preventDefault();
                });
            };
            defaultProp._createLoading = function(){
                // avoid creating two loading masks with the same data-name
                if($(".cpt-loading-mask[data-name="+opt.name+"]").length > 0){
                    // console.error('loading mask cant has same date-name('+opt.name+'), you cant set "date-name" prop when you create it');
                    return
                }
                
                defaultProp._showOriginLoading();
            };
            defaultProp._createLoading();
        });
    }

})(jQuery)

// Close Loading
function removeLoading(loadingName){
    var loadingName = loadingName || '';
    $('body,html').css({
        overflow:'auto',
    });

    if(loadingName == ''){
        $(".cpt-loading-mask").remove();
    }else{
        var name = loadingName || 'loadingName';
        $(".cpt-loading-mask[data-name="+name+"]").remove();        
    }
}