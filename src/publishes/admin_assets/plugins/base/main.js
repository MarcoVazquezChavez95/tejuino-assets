$(document).ready(function () {
    App.init();

    $('[click]').on({
        click: function(e){
            e.preventDefault();
            $($(this).attr('click')).trigger('click');
        }
    });

    $('[submit]').on({
        click: function(e){
            e.preventDefault();
            $($(this).attr('submit')).trigger('submit');
        }
    });

    $('[confirm]').on({
        click: function(e){
            e.preventDefault();
            var btn = $(this);
            swal({
    			title: 'Atención',
    			text: btn.attr('confirm'),
    			icon: 'warning',
    			buttons: {
    				cancel: {
    					text: 'Cancelar',
    					value: null,
    					visible: true,
    					className: 'btn btn-default',
    					closeModal: true,
    				},
    				confirm: {
    					text: 'Confirmar',
    					value: true,
    					visible: true,
    					className: 'btn btn-danger',
    					closeModal: true
    				}
    			}
    		}).then(function(accept){
                if(accept){
                    window.location = btn.attr('href');
                }
            });
        }
    });

    $('[data-toggle]').on({
        click: function(e){
            var target = $($(this).attr('href'));
            setTimeout(function(){
                target.find('input').eq(0).focus();
            }, 200);
        }
    });

    $('input[type=checkbox].switch').each(function(){
        var check = $(this);
        new Switchery(this, {
            onchange: function(checked){
                if(check.attr('toggle-status')){
                    ajax.post('update-status/' + check.attr('toggle-status'), {
                        status: checked
                    }, function(){ });
                }
            }
        })
    });

    $(document).ajaxStart(function() { Pace.restart(); });
});

window.controls = {
    colorpicker: function(textfield, customParms){
        var parms = {
            format: 'hex'
        };
        $.extend(parms, customParms);

        return textfield.colorpicker(parms);
    },
    datatable: function(table, customParms){
        var parms = {
            responsive: true,
            colreorder: true,
            order: [[0, 'desc']]
        };
        $.extend(parms, customParms);

        return table.DataTable(parms);
    },
    datetimepicker: function(textfield, customParms){
        var parms = {
            format: 'YYYY-MM-DD HH:mm A'
        };
        $.extend(parms, customParms);

        return textfield.datetimepicker(parms);
    },
    selectpicker: function(textfield, customParms){
        var parms = {

        };
        $.extend(parms, customParms);

        return textfield.selectpicker(parms);
    },
    tags: function(textfield, customParms){
        var parms = {
            availableTags: [], allowSpaces: true
        };
        $.extend(parms, customParms);

        return textfield.tagit(parms);
    },
    uploader: function(zone, parms, callback){
        uploader.add(zone, parms, callback);
    }
}

var Datepicker = function(el, parms){
    var parms = $.extend({
        format: 'YYYY-MM-DD HH:mm A'
    }, parms);

    return this.datetimepicker(parms);
};

window.dz_zones = [];

$.fn.uploader = function(options, callback){
    var dragId = this.attr('id');
    var dragIcon = "upload";
    var dragText = "Upload your files";
    var dragInfoText = '<i class="fa fa-' + dragIcon + '"></i>' + dragText;
    var dragInfo = '<div class="dragInfo"><div class="dragInfoBg"></div></div>';
    var dragZone = this.append(dragInfo);
    var config = $.extend({
        type: 'image',
        url: 'upload',
        maxFilesize: 20,
        data: {}
    }, options);

    new Dropzone("#" + dragId, {
        paramName: 'file',
        url: config.url,
        maxFilesize: config.maxFilesize,
        sending: function (file, xhr, formData) {
            $.each(config.data, function(key, value){
                formData.append(key, value);
            });
        },
        success: function (file, response) {
            callback(response);
        }
    });

    return this;
}

window.ajax = {
    post: function(url, formData, callback, callbackError){
        ajax.send('POST', url, formData, callback, callbackError);
    },
    get: function(url, formData, callback, callbackError){
        ajax.send('GET', url, formData, callback, callbackError);
    },
    send: function(type, url, formData, callback, callbackError){
        $.ajax({
            url: url,
            data: formData,
            type: type,
            success: function (response) {
                if(typeof callback == 'function'){
                    callback(response);
                }
            },
            error: function(responseJson){
                response = responseJson.responseJSON;

                if(typeof(response.error) != 'undefined'){
                    $.gritter.add({
            			title: 'Error',
            			text: response.error.user,
            			sticky: false,
            			time: '3000'
            		});
                }
                else{
                    $.gritter.add({
            			title: 'Error',
            			text: 'Ha ocurrido un error. Intente de nuevo por favor',
            			sticky: false,
            			time: '3000'
            		});
                }

                if(typeof callbackError == 'function'){
                    callbackError(response);
                }
            }
        });
    }
};
