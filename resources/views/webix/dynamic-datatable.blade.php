@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ asset('css/webix.css') }}" type="text/css">
    <script src="{{ asset('js/webix.js') }}" type="text/javascript"></script>

    	<div style="margin-left: 11%;">
    		<a class="btn btn-danger" href="{{ url('webix/datatable') }}">Client Side Data</a>
    		<a class="btn btn-danger" href="{{ url('webix/dynamic/datatable') }}">Dynamic Data</a>
    	</div>
    	<br>
		<div id="box" style="width:1200px;height:470px;margin: 0 auto;"></div>
		<div id="my_form" style="width:1200px;margin: 0 auto;"></div>
		<div id="paging_here" style="margin-left: 10%;"></div>

		
		
	
    <script type="text/javascript" charset="utf-8">
    	
    	/*webix.locale.pager = {
		    first: "First", // the first button
		    last:  "Last", // the last button
		    next:  "Next", // the next button
		    prev:  "Prev"  // the previous button
		};*/

    	webix.ui({
		    container:"box",
		    view:"datatable",
		    id:"datatable_1",
		    url:"{{ url('webix/get/datatable') }}",
		    datafetch:10,
		    select:"row",
		    editable:true,
		    editaction:"dblclick",
		    pager:{
		        template:"{common.first()} {common.prev()} {common.pages()} {common.next()} {common.last()}",
		        container:"paging_here",
		        size:10,
		        group:5
		    },
		    columns:[
		        { 
		        	id:"ref",   		
		        	header:[ "Ref",{content:"serverFilter"}], 		   
		        	width:70, 
		        	sort:"server" 						    
		        },
		        { 
		        	id:"title",		
		        	header:[ "Title",{content:"serverFilter"}], 	   
		        	width:250, 
		        	sort:"server",	
		        	editor:"text" 		
		        },
		        { 
		        	id:"team",   		
		        	header:[ "Team",{content:"serverFilter"}],         
		        	width:200, 
		        	sort:"server",	
		        	editor:"text"		
		        },
		        { 
		        	id:"client",  	
		        	header:[ "Client",{content:"serverFilter"}],       
		        	width:120, 
		        	sort:"server",	
		        	editor:"text"		
		        },
		        { 
		        	id:"pm",    		
		        	header:[ "PM",{content:"serverFilter"}],           
		        	width:120, 
		        	sort:"server",	
		        	editor:"combo", 
		        	collection: [{ id:'saif', value:'Saif' },{ id:'asad', value:'Asadullah' },'Zeeshan','Shahid'],	
		        },
		        { 
		        	id:"status",    	
		        	header:[ "Status",{content:"serverFilter"}],       
		        	width:120, 
		        	sort:"server",	
		        	editor:"select", 
		        	options:['Pending','Approved','Send']		
		        },
		        { 
		        	id:"deadline",    
		        	header:[ "Deadline",{content:"serverFilter"}],     
		        	width:150, 
		        	sort:"server",	
		        	editor:"text"		
		        },
		        { 
		        	id:"created_at",  
		        	header:[ "Date Sent",{content:"serverFilter"}],    
		        	width:150, 
		        	sort:"server",	
		        	editor:"text"		
		        }
		    ],
		    on:{
			    onBeforeLoad:function(){
			        this.showOverlay("Loading...");
			    },
			    onAfterLoad:function(){
			        this.hideOverlay();
			    },
			    onAfterEditStop:function(){  
			    	console.log(arguments); 
			    	update_item();
			    }
			},
			save:{
			    "insert":"{{ url('webix/datatable/action') }}",
			    "update":"{{ url('webix/datatable/action') }}",
			    "delete":"{{ url('webix/datatable/action') }}"
			},
		});
		
		webix.ui({ 
		  	view:"form",
		    width:1200,
		    container:"my_form",
		    id:"formAddRow",
		    elements:[    
		      	{
		      		cols:[
			      		
				      	{	
				      		view:"text", name:"title", placeholder:"Title", inputWidth:250
				      	},
				      	{	
				      		view:"text", name:"team", placeholder:"Team", inputWidth:200
				      	},
				      	{	
				      		view:"text", name:"client", placeholder:"Client", inputWidth:120
				      	},
				      	{	
				      		view:"text", name:"pm", placeholder:"PM", inputWidth:120
				      	},
				      	{	
				      		view:"text", name:"status", placeholder:"Status", inputWidth:120
				      	},
				      	{	
				      		view:"text", name:"deadline", placeholder:"Deadline", inputWidth:150
				      	},
				      	{	
				      		view:"text", name:"created_at", placeholder:"Date Sent", inputWidth:150
				      	}
				    ]
				},
				{
		      		cols:[
		      			{ 
		      				view:"button", value:"Add",click:"window.add_item()"
		      			}, 
		      			{ 
		      				view:"button", value:"Remove selected",click:"window.remove_item()"
		      			}
		      		]
		      	}
		    ]
		});

		add_item = function(){
		  var data = {
		    title:		$$('formAddRow').getValues().title,
		    team: 		$$('formAddRow').getValues().team,
		    client: 	$$('formAddRow').getValues().client,
		    pm: 		$$('formAddRow').getValues().pm,
		    status: 	$$('formAddRow').getValues().status,
		    deadline: 	$$('formAddRow').getValues().deadline,
		    created_at: $$('formAddRow').getValues().created_at
		  };

		  var id = $$('datatable_1').add(data);
          $$('datatable_1').editRow(id);
		};

		remove_item = function(){
		  var sel = $$("datatable_1").getSelectedId(true);
		  if (!sel) return;
		  for (var i = 0; i < sel.length; i++)
		    $$("datatable_1").remove(sel[i].row);
		};

		update_item = function() {
		  var sel = $$("datatable_1").getSelectedId();
		  if (!sel) return;
		  
		  var row = $$("datatable_1").getItem(sel.row);
		  $$("datatable_1").updateItem(sel.row);
		};
    </script>
@endsection