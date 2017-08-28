var plotData = function(datatoplot,elementid,units){
     
    var chart = c3.generate({
      bindto: '#'+elementid,
      data: {
        x:'x',
        x_format:'%Y%m%d',
        columns: datatoplot ,
        types: {x:'area'}
      },
      axis : {
        x : {
          type : 'timeseries',
          tick : {
            //format : "%e %b %Y @ %H:%M:%S" // https://github.com/mbostock/d3/wiki/Time-Formatting#wiki-format
              format : "%Y" 
          }
        },
         
        y:{
          label:units
        }

      },
      zoom: { enabled: true },
      subchart: { show: false }
    });
  };

  var date_sort_asc = function (date1, date2) {
    if (date1 > date2) return 1;
    if (date1 < date2) return -1;
    return 0;
  };


  var containsSameDate = function(k,myarray) {
    var i=0;
      for(i=0; i < myarray.length; i++){
        try{
          if(myarray[i].getTime() === k.getTime()){
            return i;
          }
        }catch(e){
        }
      }
    return -1;
  };


  var parseADAGUCGFIToPlotData = function(gfidata,elementid){
    var ndims = 1;
    if(typeof(gfidata[0].dims)!='string'){
      ndims = gfidata[0].dims.length;
    }

    var newFormat = [];

    var assembleData = function(keynames,obj,data){
    var name =   obj.name;
    //console.log(name);

    var newFormatDate = ['x'];
      var newFormatValue = [name+" "+keynames];
      for (var key in data) {
        var date = d3.time.format("%Y-%m-%dT%H:%M:%SZ").parse(key);
        var value = parseFloat(data[key]);
        newFormatDate.push(date);
        newFormatValue.push(value);
      }
    newFormat.push({date:newFormatDate,value:newFormatValue,units:obj.units});
    }
    
    var iterateDataObject = function(depth,gfidata,dataObject,keynames){
      //console.log(depth+" and " + ndims);
      if(ndims == 1){
        assembleData("",gfidata,dataObject);
        }else{
        if(depth+2<ndims){
          for(d in dataObject){
            //console.log("d["+d+"]");
            
            iterateDataObject(depth+1,gfidata,dataObject[d],keynames+"["+d+"]");
          }
        }else for(d in dataObject){
          //console.log("Plot "+d);
          assembleData("["+d+"]",gfidata,dataObject[d]);
        }
      }
    }
    for(var j=0;j<gfidata.length;j++){ 
      iterateDataObject(0,gfidata[j],gfidata[j].data,"");
      iterateDataObject(0,gfidata[j],gfidata[j].data,"");
    }
    
    
    
    var sortDataObject = function(datevalobj){
      var newComposedDates = [];
      //console.log("datevalobj.length="+datevalobj.length);
      var numberOfObjects = datevalobj.length;
      //console.log("Start");
      for(var j=0;j<numberOfObjects;j++){
        var dateObj = datevalobj[j].date;
        //console.log("dateObj.length="+dateObj.length);
        for(var i=1;i<dateObj.length;i++){
          var value = dateObj[i];
          var index= containsSameDate(value, newComposedDates);
          if(index == -1){
            newComposedDates.push(value);
          }
        }
      }
      
      newComposedDates.sort(date_sort_asc);
      newComposedDates.unshift("x");
      ////console.log("Nu dit: "+newComposedDates.length);
      
      var dataObjects = [];
      for(var i = 0; i < numberOfObjects; i++) {
        dataObjects.push([]);
      }
      
      
      for(var j=0;j<numberOfObjects;j++){
        dataObjects[j].push(datevalobj[j].value[0]);
        for(var i=1;i<newComposedDates.length;i++){
          var index = containsSameDate( newComposedDates[i],datevalobj[j].date);
          // //console.log(i+" and "+index);
          if(index == i){
            ////console.log("FITS"+datevalobj[j].date[i]);
            var value = datevalobj[j].value[index];
            if(value>10000)value= NaN;
            dataObjects[j].push(value);
          }else{
            //console.log("FITSN"+datevalobj[j].date[i]+"index="+index);
            dataObjects[j].push(0);
          }
        }
        ////console.log("dataObjects pushed:"+dataObjects[j].length);
      }
      
      ////console.log("There are dates: "+newComposedDates.length);
      var a =[];
      
      a.push(newComposedDates);
      for(var j=0;j<numberOfObjects;j++){
        a.push(dataObjects[j]);
      }
      return a;
    };
    plotData(sortDataObject(newFormat),elementid,newFormat[0].units);
  };

      
  var loadDataForURL = function(mURL,elementid){
    //console.log(mURL);
    mURL+="&JSONP=?";
    $.ajax({
      type: 'GET',
      url:mURL,
      dataType: 'jsonp',
      cache:false,
      success: function(dataWeGotViaJsonp){
        try{
          parseADAGUCGFIToPlotData(dataWeGotViaJsonp,elementid);
        }catch(e){
          $('#'+elementid).html("Sorry! An error occurred while parsing JSON data: ["+e+"]");
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        $('#'+elementid).html("Sorry! An error occurred while receiving JSON data from the server: ["+errorThrown+"]");
        console.log("Error "+errorThrown);
      }
    });
  };
