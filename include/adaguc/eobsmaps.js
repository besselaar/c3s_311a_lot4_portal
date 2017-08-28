var mainWebmapJS ;
setBaseURL("../adagucwebmapjs/");
var defaultProjection = {srs:'EPSG:32661',bbox:'809272.180452, -5510472.180452, 7029272.180452, 1309527.819548 '};

var scaleBarURL       = "http://www.ecad.eu/utils/adagucviewer/webmapjs/php/makeScaleBar.php?";

var c3surfWMS = {
    service:"http://www.ecad.eu/download/ensembles/cgi-bin/ecad-ensembles-grid.cgi?",
    name:"tg",
};



var baseLayer = new WMJSLayer({
    service:"http://www.ecad.eu/download/ensembles/cgi-bin/basemaps.cgi?",
    name:"world_eca,country",
    title:"ECA World base layer",
    enabled:true,
    transparent:false
});

var overlayGeoservices =  new WMJSLayer({
    service:"http://geoservices.knmi.nl/cgi-bin/worldmaps.cgi?",
    name:"ne_10m_admin_0_countries_simplified",
    format:"image/png",
    title:"World country borders",
    enabled: true,
    keepOnTop:true
});

var overlay =  new WMJSLayer({
    service:"http://www.ecad.eu/download/ensembles/cgi-bin/basemaps.cgi?",
    name:"country_lines",
    format:"image/png",
    title:"World country borders",
    opacity:0.5,
    enabled: true,
    keepOnTop:true
});

var logo =  new WMJSLayer({
    service:c3surfWMS.service,
    name:"logo",
    format:"image/png",
    title:"LOGO",
    enabled: true,
    keepOnTop:true
});

var defaultMaps = [{
    service:"http://geoservices.knmi.nl/cgi-bin/worldmaps.cgi?",
    name:'mwsmap',
    title:"Iceland",
    bbox:'626366.6715829876,-918837.845914676,1584008.5500026532,-391109.81383142306',
    srs:'EPSG:32661'
},{
    service:"http://geoservices.knmi.nl/cgi-bin/worldmaps.cgi?",
    name:'mwsmap',
    title:"The Netherlands",
    bbox:'1914147.048807118,-2595311.1847286504,2942006.782609896,-2028888.1754587404',
    srs:'EPSG:32661'
},{
    service:"http://geoservices.knmi.nl/cgi-bin/worldmaps.cgi?",
    name:'mwsmap',
    title:"Europe",
    bbox:'809272.180452, -5510472.180452, 7029272.180452, 1309527.819548',
    srs:'EPSG:32661'
},{
    service:"http://geoservices.knmi.nl/cgi-bin/worldmaps.cgi?",
    name:'mwsmap',
    title:"Sicily and Etna",
    bbox:'3121514.963750262,-4260628.146455694,3903970.904991124,-3829439.8877046136',
    srs:'EPSG:32661'
},{
    service:"http://geoservices.knmi.nl/cgi-bin/worldmaps.cgi?",
    name:'mwsmap',
    title:"World",
    bbox:'-99.19266055045871,-180,99.19266055045871,180',
    srs:'EPSG:4326'
},{
    service:"http://geoservices.knmi.nl/cgi-bin/worldmaps.cgi?",
    name:'mwsmap',
    title:"World Globe",
    bbox:'-23590455.04994451,-13000000,23590455.04994451,13000000',
    srs:'EPSG:3575'
}]

var adagucviewerlocation = "http://eobsdata.knmi.nl/~besselaa/adagucviewer";

var coordinateRounder = function(original){
    return Math.round(original*1000)/1000;
};

var failure = function(msg){
    alert(msg);
}


var previousSelectedDateIndex = 0;

var dimensionsUpdate = function(layer){
    $("#timeheader").show();
    var dim = layer.getDimension("time");
    $("#timeinfo").html(dim.size() + " dates available from "+dim.getValueForIndex(0)+" till "+dim.getValueForIndex(dim.size()-1));
    function update(index){
        previousSelectedDateIndex = index;
        //var checkIndex = dim.getIndexForValue(previousSelectedDate);
        
        //console.log(checkIndex);
        
        var value = "";
        var date;
        try{
            value = dim.getValueForIndex(index);
            date = parseISO8601DateToDate(value);
        }catch(e){
            value = dim.getValueForIndex(0);
            date = parseISO8601DateToDate(value);
        }
        
        //console.log(value);
        
        $("#currenttime").html(date.toISO8601());
	
        layer.parentMaps[0].setDimension("time",value);
        layer.draw();
    }
    
    $("#timeslider").slider({
        min:0,
        max:dim.size()-1,
        value: previousSelectedDateIndex,                                  
        slide: function( event, ui ) {
            update(ui.value);
        }
    });
    
    $("#timesliderprev").unbind('click').click(function( event ){
	var timeSlider = $("#timeslider");
	timeSlider.slider("value",timeSlider.slider("value")-1);
	update(timeSlider.slider("value"));
    });
    
    $("#timeslidernext").unbind('click').click(function( event ){
	var timeSlider = $("#timeslider").slider();
	timeSlider.slider("value",timeSlider.slider("value")+1);
	update(timeSlider.slider("value"));
    });
    
    update(previousSelectedDateIndex);
    
}
var DatetoISO8601=function (date){
    function prf(input,width){
        //print decimal with fixed length (preceding zero's)
        var string=input+'';
        var len = width-string.length;
        var j,zeros='';
        for(j=0;j<len;j++)zeros+="0"+zeros;
        string=zeros+string;
        return string;
    }
    var iso=prf(date.getUTCFullYear(),4)+
        "-"+prf(date.getUTCMonth()+1,2)+
        "-"+prf(date.getUTCDate(),2)+
        "T"+prf(date.getUTCHours(),2)+
        ":"+prf(date.getUTCMinutes(),2)+
        ":"+prf(date.getUTCSeconds(),2)+'Z';
    return iso;
};

var getActiveLayer = function(){
    if(!mainWebmapJS)return;
    var layers = mainWebmapJS.getLayers();
    var layer = layers[0];
    return layer;
}


/* Callback function called when user clicks on the map*/
var pointOnMapClicked = function(options){
    
    var m = options.map;
    var x = options.x;
    var y = options.y;
    
    
    var lalo=m.getLatLongFromPixelCoord({x: x, y: y});
    var geo=m.getGeoCoordFromPixelCoord({x: x, y: y});
    
    $("#calcinx").val(coordinateRounder(lalo.x));
    $("#calciny").val(coordinateRounder(lalo.y));
    //$("#mapclickinfo").html('You clicked at ('+coordinateRounder(lalo.x)+", "+coordinateRounder(lalo.y)+')');
    //$("#graphmaker").html('x='+x+'y='+y+"bbox="+m.getProjection().bbox.toString()+"<br/>"+m.getProjection().srs);
    
    var activeLayer = getActiveLayer();;
    
    
    //var request = activeLayer.service+"service=WMS&request=GetFeatureInfo&version=1.3.0&layers="+activeLayer.name+"&query_layers="+activeLayer.name+"&crs=EPSG:4326&bbox=90,-180,-90,180&width=3600&height=1800&i="+(lalo.x+180)*10+"&j="+(lalo.y+90)*10+"&format=image%2Fgif&info_format=application%2Fjson&time=1914-01-26T00:00:00Z/3114-08-30T00:00:00Z";
      
    var layerName = activeLayer.name;
    //These layers are hidden, but are querable
    var subSELayer = layerName+"_subSE";
    var addSELayer = layerName+"_addSE";
    
    var queryLayers = subSELayer+","+layerName+","+addSELayer;
    
    queryLayers = layerName;
    
    var request = activeLayer.service+"service=WMS&request=GetFeatureInfo&version=1.3.0&layers="+activeLayer.name+"&query_layers="+queryLayers+"&crs="+m.getProjection().srs+"&bbox="+m.getProjection().bbox.toString()+"&width="+m.getSize().width+"&height="+m.getSize().height+"&i="+x+"&j="+y+"&format=image%2Fgif&info_format=application%2Fjson&time=1914-01-26T00:00:00Z/3114-08-30T00:00:00Z";
    
    
    
    //       var successCallback = function(data){
    //           $("#graphmaker").html("OK");
    //       }
    //       
    //         
    //       $("#graphmaker").html("<img src=\"./webmapjs/img/ajax-loader.gif\"/>");
    //     
    
    $("#graphmaker").css({height:"200px"});
    loadDataForURL(request,"graphmaker");
};
    
var layerCheckboxClicked = function(j){
    var layer = mainWebmapJS.getLayers()[j];
    
    if(layer.enabled)layer.enabled = false;else layer.enabled = true;
    mainWebmapJS.draw();
    updateLayerList();
};

var updateAndDraw = function(){
    
    mainWebmapJS.draw();
    updateLayerList();
}
var layerDelete = function(j){
    var layer = mainWebmapJS.getLayers()[j];
    layer.remove();
    updateAndDraw();
};

var nextLayer = function(j){
    var layer = mainWebmapJS.getLayers()[j];
    layer.getNextLayer(function(layerdata){layer.setName(layerdata.name);updateAndDraw();},failure);
    
};

var previousLayer = function(j){
    var layer = mainWebmapJS.getLayers()[j];
    layer.getPreviousLayer(function(layerdata){layer.setName(layerdata.name);updateAndDraw();},failure);
    
};
var updateLayerListBusy = false;

var updateLayerList = function(){
    
    if(updateLayerListBusy)return;
    updateLayerListBusy = true;
    
    var html="";
    var layers = mainWebmapJS.getLayers();
    for(var j=0;j<layers.length;j++){
        var layer = layers[j];
	html+="<div class=\"layerlistitem\">";
        html+="<select style=\"font-size:11px\" class=\"layerselector\" id=\"combobox"+j+"\">";
        html+="</select>";
        html+="<button style=\"font-size:11px\" class=\"deletenextandpreviousbutton\" onclick=\"previousLayer('"+j+"');\">&lt;</button>";
        html+="<button style=\"font-size:11px\" class=\"deletenextandpreviousbutton\" onclick=\"nextLayer('"+j+"');\">&gt;</button>";
        html+="</div>";
      }
      
    $("#layerlist").html(html);
    
    var pushSet = function(list,variable){
        for(var a in list){
            if(list[a] === variable)return;
        }
        list.push(variable);
    };
    
    for(var layernr=0;layernr<layers.length;layernr++){
        var layer = layers[layernr];
        var getLayerObjectsFinished = function(data,nr){
            //layer is currently selected in the GUI, in the map
            //data are all indices available from the server.
            
            var layers = mainWebmapJS.getLayers();
            var layer = layers[nr];
            var layerId = layer.name; 
            var id = "#combobox"+nr;
            
            var previousSelectedIndex = layer.name;
            var layerWasFoundInList = false;
	    
            var newSelectedLayer = "";
            
	    data.sort(function(a, b){return a-b});
	    
            $(id).empty();
            for(var j=0;j<data.length;j++){
		var layerIdFromIndicesList = data[j].name;
		
		if(data[j].leaf === true){
		    var option = $('<option></option>').attr("value", data[j].name).text(data[j].text);
		    if(newSelectedLayer == ""){
			newSelectedLayer = data[j].name;
                    }
                    
                    if(layerIdFromIndicesList == layerId){
			layerWasFoundInList = true;
			newSelectedLayer = data[j].name;
			option.attr("selected",true);
                    }
		    $(id).append(option);
		}
            }
	    
	    if(!layerWasFoundInList){
		alert(+newSelectedLayer+'" does not exist for index '+previousSelectedIndex+'. Newly selected period and index are "'+newSelectedLayer+'.');
	    }
            layer.setName(newSelectedLayer);
            
            updateAndDraw();
            $(id).on('change', function (e) {
		layer.setName(this.value);
		updateAndDraw();
            });
            
         
            //Colorscalerange handler:
            //console.log("Making handler");
            
            var downloadmap = function(){
		//console.log(layer);
		var request=layer.getmapURL;
		request+="&SERVICE=WMS&";
		request+="VERSION="+layer.version+"&";
		request+="REQUEST=GetMap&";
		request+="LAYERS=baselayer,"+URLEncode(layer.name)+",overlay,logo&";
		request+="WIDTH="+ mainWebmapJS.getSize().width +"&";
		request+="HEIGHT="+ mainWebmapJS.getSize().height +"&";
		
		
		request+=mainWebmapJS.getBBOXandProjString(layer);
		request+="STYLES="+URLEncode(layer.currentStyle)+"&";
		request+="FORMAT="+layer.format+"&";
		if(layer.transparent === true){
		    request+="TRANSPARENT=TRUE&";
		}else{
		    request+="TRANSPARENT=FALSE&";
		}
		//Handle dimensions
		var getCorrectWMSDimName = function(origDimName){
		    //Adds DIM_ for dimensions other than height or time
		    //origDimName=origDimName.toUpperCase();
		    if(origDimName.toUpperCase()=='TIME')return origDimName;
		    if(origDimName.toUpperCase()=='ELEVATION')return origDimName;
		    return 'DIM_'+origDimName;
		}
		var getMapDimURL = function(layer){
		    var layerDimensions = layer.dimensions;//getLayerDimensions(layer);
		    var request='';
		    for(var j=0;j<layerDimensions.length;j++){
			request+='&'+getCorrectWMSDimName(layerDimensions[j].name);
			request+='='+URLEncode(layerDimensions[j].currentValue);
			
			if(layerDimensions[j].currentValue == WMJSDateOutSideRange ||
			   layerDimensions[j].currentValue == WMJSDateTooEarlyString ||
                           layerDimensions[j].currentValue == WMJSDateTooLateString){
			    throw(WMJSDateOutSideRange);
                        }
		    }
		    return request;
		}
		
		request+= getMapDimURL(layer);
		
		request+=layer.wmsextensions.url;
		request+="&showlegend=true&showscalebar=true&title="+layer.title+" ("+layer.name.split('/')[0]+")";
		            
		window.open(request, 'window name', 'window settings');
                
            };
            
            var submit = function(){
		function isNumber(n) {
		    return !isNaN(parseFloat(n)) && isFinite(n);
		}
		var minValue = $("#colorrangechooser").find("input[name=min]").val();
		var maxValue = $("#colorrangechooser").find("input[name=max]").val();
		if(!isNumber(minValue)||!isNumber(maxValue)){
		    alert("Please enter numbers for min/max fields");
		    return;
		}
		
		layer.wmsextensions({colorscalerange:minValue+','+maxValue});
		mainWebmapJS.draw();
		
            };
            
            
            $("#colorrangechooser").find("input").keypress(function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '13'){
		    submit();
		}
            });
            
            $("#colorrangechooser").find("button[name=submit]").unbind('click').click(submit);
            
	    $("#colorrangechooser").find("button[name=downloadmap]").unbind('click').click(downloadmap);
            
            $("#colorrangechooser").find("button[name=reset]").unbind('click').click(function(){
		$("#colorrangechooser").find("input[name=min]").val("");
		$("#colorrangechooser").find("input[name=max]").val("");
		layer.wmsextensions({colorscalerange:""});
		mainWebmapJS.draw();
            });
            
        };
        var nr = layernr;
        //console.log(">"+nr);
        layer.WMJSService.getLayerObjectsFlat(function(data){getLayerObjectsFinished(data,nr);} ,failure);
    }
    
    updateLayerListBusy = false;
};
  
var updateADAGUCViewerLink = function(){
    if(!mainWebmapJS)return;
    //Update adagucviewer link
    var activeLayer = getActiveLayer();
    var url = adagucviewerlocation+"?srs="+(mainWebmapJS.getProjection().srs)+"&bbox="+(mainWebmapJS.getProjection().bbox.toString())+"&service="+URLEncode(activeLayer.service)+"&layer="+activeLayer.name+"%24image%2Fpng%24true%24auto%2Frgba%241%240&selected=0&dims=time$"+URLEncode(activeLayer.getDimension("time").currentValue)
    
    $("#adagucviewerlink").attr("href", url)
};
   
    

/* Returns a new webmapjs mapping component based on a div element id*/
var newMap = function(element){
    var webMapJS  = new WMJSMap(document.getElementById(element));
    webMapJS.setProjection(defaultProjection);
    webMapJS.displayLegendInMap(true);
    
    webMapJS.addListener("beforedraw",updateADAGUCViewerLink,true);
    
    webMapJS.setBaseLayers([baseLayer,overlay,logo]);
    webMapJS.draw();
    return webMapJS;
};

/* Document ready function */
$(function() {
    //$("#mapclickinfo").html("Choose a location and click start to run processing");
    //$("#timeheader").hide();
    
    /*Create new mapping component*/
    mainWebmapJS = new newMap('webmap1');
    mainWebmapJS.addListener('mouseclicked',pointOnMapClicked,true);
    mainWebmapJS.closeAllGFIDialogs();
    mainWebmapJS.enableInlineGetFeatureInfo(false);
    
    
    
    var layerFailed= function(layer,message){
        $("#mapclickinfo").html("Operation completed, but WMS failed: "+message);
    };
    
    var layer =  new WMJSLayer({
 	service:c3surfWMS.service,
        name:c3surfWMS.name,
        failure:layerFailed
    });
    layer.onReady = function(){
        dimensionsUpdate(layer);
        updateLayerList();
        mainWebmapJS.draw();
    };
    mainWebmapJS.addLayer(layer);
    
    //Set defaultMaps
    var html = "<table><tr>";
    for(var j=0;j<defaultMaps.length;j++){
        var d = defaultMaps[j];
        var request = d.service+"request=getmap&version=1.3.0&styles=&format=image/png&transparent=false&width=160&height=90&layers="+d.name+"&bbox="+d.bbox+"&crs="+d.srs;
        html+="<td><img value=\""+j+"\" id=\"defaultmapchooser"+j+"\" src=\""+request+"\"/><br/>"+d.title+"</td>"
    }
    html+="</tr></table>";
    $("#defaultMaps").html(html);
    for(var j=0;j<defaultMaps.length;j++){
        $("#defaultmapchooser"+j).click(function(event) {
            var d = defaultMaps[$("#"+this.id).attr('value')];
            mainWebmapJS.setProjection({srs:d.srs,bbox:d.bbox});
            mainWebmapJS.draw();
        });
    }
});
    
