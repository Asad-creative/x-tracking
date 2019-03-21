@extends('layouts.app')

@section('content')


	<div id="box" style="width:1200px;height:600px;margin: 0 auto;"></div>
    <script type="text/javascript" charset="utf-8">
    webix.ready(function(){

			var paginate = {
  view:"datatable",
  columns:[
		        { id:"ref",   		header:["Ref", {content:"numberFilter"}],    	 sort:"int",  fillspace:.5},
		        { id:"title",    	header:["Title" , {content:"textFilter", placeholder:" Sort by Title" }],	 sort:"string",  fillspace:3},
		        { id:"team",   		header:["Team", {content:"selectFilter", select:" Select Team",}],       	 sort:"string",  fillspace:2},
		        { id:"client",  	header:"Client",      sort:"string",  fillspace:1},
		        { id:"pm",    		header:"PM",           sort:"string",  fillspace:1},
		        { id:"status",    	header:"Status",        sort:"string",  fillspace:1},
		        { id:"deadline",    header:"Deadline",      sort:"string",  fillspace:1},
		        { id:"date-sent",   header:"Date Sent",     sort:"string",  fillspace:1}
		    ],

				select:"row",
  yCount:10,
  scroll:false,
  pager:"pager",
	data:[
		        {
				    "id": 1,
				    "ref": 1,
				    "title": "et, lacinia vitae,",
				    "team": "Mercedes O. Vaughan",
				    "client": "Vera",
				    "pm": "Armand",
				    "status": "Send",
				    "deadline": "Nov 6, 2019",
				    "date-sent": "Sep 1, 2018"
				  },
				  {
				    "id": 2,
				    "ref": 2,
				    "title": "eu nibh vulputate mauris sagittis",
				    "team": "Xena J. Jarvis",
				    "client": "Kennedy",
				    "pm": "Arthur",
				    "status": "Pending",
				    "deadline": "Oct 10, 2018",
				    "date-sent": "Sep 25, 2018"
				  },
				  {
				    "id": 3,
				    "ref": 3,
				    "title": "consectetuer, cursus",
				    "team": "Miranda V. Carver",
				    "client": "Zelda",
				    "pm": "Hamilton",
				    "status": "Send",
				    "deadline": "Sep 4, 2018",
				    "date-sent": "May 10, 2018"
				  },
				  {
				    "id": 4,
				    "ref": 4,
				    "title": "laoreet lectus quis",
				    "team": "Aline U. Whitney",
				    "client": "Cole",
				    "pm": "Dale",
				    "status": "Send",
				    "deadline": "May 14, 2019",
				    "date-sent": "Apr 29, 2018"
				  },
				  {
				    "id": 5,
				    "ref": 5,
				    "title": "Curabitur dictum. Phasellus in felis. Nulla tempor augue ac",
				    "team": "Jillian F. Short",
				    "client": "Jayme",
				    "pm": "Ronan",
				    "status": "Send",
				    "deadline": "Jun 9, 2019",
				    "date-sent": "Mar 26, 2018"
				  },
				  {
				    "id": 6,
				    "ref": 6,
				    "title": "ac nulla.",
				    "team": "Xenos D. Dunlap",
				    "client": "Giacomo",
				    "pm": "Rogan",
				    "status": "Send",
				    "deadline": "Sep 24, 2018",
				    "date-sent": "Aug 14, 2019"
				  },
				  {
				    "id": 7,
				    "ref": 7,
				    "title": "ultrices. Vivamus rhoncus. Donec est. Nunc",
				    "team": "Alisa V. Mejia",
				    "client": "Reed",
				    "pm": "Troy",
				    "status": "Send",
				    "deadline": "Apr 8, 2018",
				    "date-sent": "Dec 2, 2018"
				  },
				  {
				    "id": 8,
				    "ref": 8,
				    "title": "nulla ante, iaculis nec, eleifend non, dapibus rutrum,",
				    "team": "Amery V. Finley",
				    "client": "Keegan",
				    "pm": "Roth",
				    "status": "Pending",
				    "deadline": "May 14, 2019",
				    "date-sent": "Jun 7, 2019"
				  },
				  {
				    "id": 9,
				    "ref": 9,
				    "title": "euismod in, dolor. Fusce feugiat.",
				    "team": "Ethan W. Patrick",
				    "client": "Emi",
				    "pm": "Theodore",
				    "status": "Send",
				    "deadline": "Aug 23, 2019",
				    "date-sent": "Sep 19, 2019"
				  },
				  {
				    "id": 10,
				    "ref": 10,
				    "title": "Integer mollis. Integer tincidunt",
				    "team": "Marny H. Gill",
				    "client": "Teegan",
				    "pm": "Allen",
				    "status": "Send",
				    "deadline": "Aug 22, 2019",
				    "date-sent": "Jun 30, 2018"
				  },
				  {
				    "id": 11,
				    "ref": 11,
				    "title": "Proin vel arcu",
				    "team": "Blaine H. Sawyer",
				    "client": "Hiram",
				    "pm": "Justin",
				    "status": "Send",
				    "deadline": "Aug 13, 2019",
				    "date-sent": "Nov 22, 2018"
				  },
				  {
				    "id": 12,
				    "ref": 12,
				    "title": "arcu. Sed et libero. Proin mi. Aliquam gravida",
				    "team": "Allen A. Steele",
				    "client": "Charity",
				    "pm": "Xavier",
				    "status": "Pending",
				    "deadline": "Jul 27, 2018",
				    "date-sent": "Jun 20, 2019"
				  },
				  {
				    "id": 13,
				    "ref": 13,
				    "title": "mauris, rhoncus id, mollis",
				    "team": "Denton T. Meyer",
				    "client": "Hiroko",
				    "pm": "Colorado",
				    "status": "Pending",
				    "deadline": "Oct 25, 2019",
				    "date-sent": "Aug 24, 2018"
				  },
				  {
				    "id": 14,
				    "ref": 14,
				    "title": "tincidunt dui augue eu tellus.",
				    "team": "Linus N. Baker",
				    "client": "Reuben",
				    "pm": "Harper",
				    "status": "Send",
				    "deadline": "Nov 8, 2019",
				    "date-sent": "Dec 11, 2019"
				  },
				  {
				    "id": 15,
				    "ref": 15,
				    "title": "Curae; Phasellus ornare.",
				    "team": "Vielka X. Melton",
				    "client": "Imani",
				    "pm": "Slade",
				    "status": "Pending",
				    "deadline": "Apr 24, 2019",
				    "date-sent": "Feb 16, 2020"
				  },
				  {
				    "id": 16,
				    "ref": 16,
				    "title": "pede blandit congue. In scelerisque",
				    "team": "Dillon I. Shepard",
				    "client": "David",
				    "pm": "Barrett",
				    "status": "Send",
				    "deadline": "Apr 24, 2018",
				    "date-sent": "May 16, 2019"
				  },
				  {
				    "id": 17,
				    "ref": 17,
				    "title": "gravida molestie arcu. Sed eu nibh vulputate mauris",
				    "team": "Jamal Q. Shaw",
				    "client": "Madeline",
				    "pm": "Dorian",
				    "status": "Send",
				    "deadline": "Feb 26, 2019",
				    "date-sent": "Oct 2, 2019"
				  },
				  {
				    "id": 18,
				    "ref": 18,
				    "title": "tempor arcu. Vestibulum ut eros",
				    "team": "Flynn T. Stewart",
				    "client": "Raja",
				    "pm": "Henry",
				    "status": "Pending",
				    "deadline": "Nov 22, 2019",
				    "date-sent": "May 25, 2018"
				  },
				  {
				    "id": 19,
				    "ref": 19,
				    "title": "mauris blandit mattis. Cras eget nisi",
				    "team": "Jayme E. Nunez",
				    "client": "Calvin",
				    "pm": "Arden",
				    "status": "Send",
				    "deadline": "Nov 16, 2019",
				    "date-sent": "Jan 6, 2020"
				  },
				  {
				    "id": 20,
				    "ref": 20,
				    "title": "turpis. Nulla aliquet. Proin velit. Sed malesuada augue",
				    "team": "Rhonda B. Rhodes",
				    "client": "Raven",
				    "pm": "Michael",
				    "status": "Send",
				    "deadline": "Nov 26, 2018",
				    "date-sent": "Nov 22, 2018"
				  },
				  {
				    "id": 21,
				    "ref": 21,
				    "title": "Pellentesque ut",
				    "team": "Francis A. Ruiz",
				    "client": "Molly",
				    "pm": "Fritz",
				    "status": "Send",
				    "deadline": "May 20, 2018",
				    "date-sent": "Apr 28, 2019"
				  },
				  {
				    "id": 22,
				    "ref": 22,
				    "title": "vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu.",
				    "team": "Shea U. Spears",
				    "client": "Vielka",
				    "pm": "Garrison",
				    "status": "Send",
				    "deadline": "Jun 8, 2019",
				    "date-sent": "Jan 10, 2019"
				  },
				  {
				    "id": 23,
				    "ref": 23,
				    "title": "Integer sem elit, pharetra ut, pharetra sed, hendrerit",
				    "team": "Derek M. Nelson",
				    "client": "Maryam",
				    "pm": "Colin",
				    "status": "Send",
				    "deadline": "Sep 8, 2018",
				    "date-sent": "Jun 3, 2019"
				  },
				  {
				    "id": 24,
				    "ref": 24,
				    "title": "lectus pede",
				    "team": "Bert E. Donaldson",
				    "client": "Kennedy",
				    "pm": "Cain",
				    "status": "Pending",
				    "deadline": "Nov 17, 2019",
				    "date-sent": "Sep 26, 2018"
				  },
				  {
				    "id": 25,
				    "ref": 25,
				    "title": "ligula elit, pretium et,",
				    "team": "Upton U. Riley",
				    "client": "Jermaine",
				    "pm": "Amos",
				    "status": "Send",
				    "deadline": "May 22, 2019",
				    "date-sent": "Apr 5, 2019"
				  },
				  {
				    "id": 26,
				    "ref": 26,
				    "title": "nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat",
				    "team": "Eugenia Z. Farley",
				    "client": "Adria",
				    "pm": "Marvin",
				    "status": "Send",
				    "deadline": "May 21, 2018",
				    "date-sent": "Dec 19, 2018"
				  },
				  {
				    "id": 27,
				    "ref": 27,
				    "title": "augue ut lacus. Nulla",
				    "team": "Hamilton A. Stephens",
				    "client": "Addison",
				    "pm": "Declan",
				    "status": "Send",
				    "deadline": "Jun 22, 2018",
				    "date-sent": "May 15, 2019"
				  },
				  {
				    "id": 28,
				    "ref": 28,
				    "title": "Morbi",
				    "team": "Preston E. Tate",
				    "client": "Branden",
				    "pm": "Brenden",
				    "status": "Pending",
				    "deadline": "Nov 8, 2019",
				    "date-sent": "Jun 29, 2018"
				  },
				  {
				    "id": 29,
				    "ref": 29,
				    "title": "id, blandit at, nisi. Cum sociis natoque penatibus et",
				    "team": "Shafira F. Harrison",
				    "client": "Porter",
				    "pm": "Acton",
				    "status": "Send",
				    "deadline": "Jan 3, 2019",
				    "date-sent": "Oct 16, 2018"
				  },
				  {
				    "id": 30,
				    "ref": 30,
				    "title": "non arcu.",
				    "team": "Karen G. Good",
				    "client": "Karleigh",
				    "pm": "Vance",
				    "status": "Send",
				    "deadline": "Oct 9, 2019",
				    "date-sent": "Dec 22, 2018"
				  },
				  {
				    "id": 31,
				    "ref": 31,
				    "title": "mauris. Morbi non",
				    "team": "Alexander R. Mccormick",
				    "client": "Serena",
				    "pm": "Alexander",
				    "status": "Send",
				    "deadline": "Apr 6, 2018",
				    "date-sent": "May 29, 2019"
				  },
				  {
				    "id": 32,
				    "ref": 32,
				    "title": "lacus vestibulum lorem, sit amet",
				    "team": "Nichole F. Emerson",
				    "client": "Rhona",
				    "pm": "Paul",
				    "status": "Send",
				    "deadline": "Sep 21, 2018",
				    "date-sent": "Apr 15, 2019"
				  },
				  {
				    "id": 33,
				    "ref": 33,
				    "title": "amet diam",
				    "team": "Carissa L. Goodman",
				    "client": "Yoshio",
				    "pm": "Sawyer",
				    "status": "Send",
				    "deadline": "Feb 27, 2020",
				    "date-sent": "Mar 16, 2019"
				  },
				  {
				    "id": 34,
				    "ref": 34,
				    "title": "euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut,",
				    "team": "Ariana S. Savage",
				    "client": "Grady",
				    "pm": "Blake",
				    "status": "Send",
				    "deadline": "Dec 29, 2019",
				    "date-sent": "May 30, 2019"
				  },
				  {
				    "id": 35,
				    "ref": 35,
				    "title": "dui,",
				    "team": "Sonya D. Hull",
				    "client": "Hu",
				    "pm": "Yardley",
				    "status": "Send",
				    "deadline": "Jan 6, 2019",
				    "date-sent": "Aug 28, 2019"
				  },
				  {
				    "id": 36,
				    "ref": 36,
				    "title": "dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum",
				    "team": "Calista X. Tate",
				    "client": "Devin",
				    "pm": "Elton",
				    "status": "Send",
				    "deadline": "Sep 28, 2018",
				    "date-sent": "Nov 14, 2018"
				  },
				  {
				    "id": 37,
				    "ref": 37,
				    "title": "magna.",
				    "team": "Audrey U. Mcdaniel",
				    "client": "Shaine",
				    "pm": "Noble",
				    "status": "Send",
				    "deadline": "Sep 8, 2019",
				    "date-sent": "Jun 19, 2018"
				  },
				  {
				    "id": 38,
				    "ref": 38,
				    "title": "aliquet diam. Sed diam lorem, auctor quis, tristique ac,",
				    "team": "Lisandra U. Knox",
				    "client": "Beverly",
				    "pm": "Deacon",
				    "status": "Send",
				    "deadline": "Jan 7, 2020",
				    "date-sent": "Mar 26, 2019"
				  },
				  {
				    "id": 39,
				    "ref": 39,
				    "title": "ridiculus",
				    "team": "Leigh U. Skinner",
				    "client": "Aaron",
				    "pm": "Solomon",
				    "status": "Pending",
				    "deadline": "Feb 26, 2019",
				    "date-sent": "Sep 25, 2019"
				  },
				  {
				    "id": 40,
				    "ref": 40,
				    "title": "laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi",
				    "team": "Linus M. Cash",
				    "client": "Charity",
				    "pm": "Eagan",
				    "status": "Pending",
				    "deadline": "Mar 11, 2019",
				    "date-sent": "Aug 28, 2019"
				  },
				  {
				    "id": 41,
				    "ref": 41,
				    "title": "Nunc ut erat. Sed nunc est, mollis non, cursus non,",
				    "team": "Skyler T. Christian",
				    "client": "Thane",
				    "pm": "Acton",
				    "status": "Send",
				    "deadline": "Jul 9, 2019",
				    "date-sent": "Oct 5, 2019"
				  },
				  {
				    "id": 42,
				    "ref": 42,
				    "title": "viverra. Maecenas iaculis aliquet diam.",
				    "team": "Teagan T. Short",
				    "client": "Graiden",
				    "pm": "Jonah",
				    "status": "Pending",
				    "deadline": "Jul 29, 2018",
				    "date-sent": "Nov 19, 2018"
				  },
				  {
				    "id": 43,
				    "ref": 43,
				    "title": "sem ut cursus luctus, ipsum leo",
				    "team": "Graham G. Moran",
				    "client": "Elmo",
				    "pm": "Kenneth",
				    "status": "Pending",
				    "deadline": "Sep 10, 2019",
				    "date-sent": "Mar 23, 2018"
				  },
				  {
				    "id": 44,
				    "ref": 44,
				    "title": "amet risus. Donec",
				    "team": "Troy C. Williamson",
				    "client": "Geoffrey",
				    "pm": "Charles",
				    "status": "Send",
				    "deadline": "Mar 2, 2019",
				    "date-sent": "Mar 4, 2018"
				  },
				  {
				    "id": 45,
				    "ref": 45,
				    "title": "in,",
				    "team": "Todd Q. Nolan",
				    "client": "Henry",
				    "pm": "Dexter",
				    "status": "Pending",
				    "deadline": "Jul 27, 2018",
				    "date-sent": "Feb 18, 2019"
				  },
				  {
				    "id": 46,
				    "ref": 46,
				    "title": "tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus",
				    "team": "Jesse C. Patel",
				    "client": "Karyn",
				    "pm": "Ali",
				    "status": "Send",
				    "deadline": "Sep 18, 2019",
				    "date-sent": "Mar 29, 2019"
				  },
				  {
				    "id": 47,
				    "ref": 47,
				    "title": "lacinia at, iaculis quis, pede.",
				    "team": "Alisa S. Berger",
				    "client": "Reece",
				    "pm": "Zeus",
				    "status": "Send",
				    "deadline": "Apr 12, 2019",
				    "date-sent": "Jul 12, 2019"
				  },
				  {
				    "id": 48,
				    "ref": 48,
				    "title": "velit egestas lacinia. Sed",
				    "team": "Emma J. Santana",
				    "client": "Farrah",
				    "pm": "Derek",
				    "status": "Pending",
				    "deadline": "Aug 1, 2019",
				    "date-sent": "Sep 9, 2019"
				  },
				  {
				    "id": 49,
				    "ref": 49,
				    "title": "et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim",
				    "team": "Tamekah K. Perry",
				    "client": "Ori",
				    "pm": "Joshua",
				    "status": "Send",
				    "deadline": "Aug 4, 2019",
				    "date-sent": "Jul 7, 2019"
				  },
				  {
				    "id": 50,
				    "ref": 50,
				    "title": "lacus. Nulla tincidunt, neque vitae semper egestas,",
				    "team": "Paki N. Herrera",
				    "client": "Allegra",
				    "pm": "Thaddeus",
				    "status": "Pending",
				    "deadline": "Sep 27, 2019",
				    "date-sent": "Jun 19, 2018"
				  },
				  {
				    "id": 51,
				    "ref": 51,
				    "title": "Aliquam auctor, velit",
				    "team": "Dominique Q. Fields",
				    "client": "Declan",
				    "pm": "Rajah",
				    "status": "Send",
				    "deadline": "Sep 1, 2018",
				    "date-sent": "Dec 6, 2018"
				  },
				  {
				    "id": 52,
				    "ref": 52,
				    "title": "enim, sit amet ornare",
				    "team": "Ivy F. Becker",
				    "client": "Chaney",
				    "pm": "Demetrius",
				    "status": "Pending",
				    "deadline": "Mar 6, 2019",
				    "date-sent": "Apr 18, 2018"
				  },
				  {
				    "id": 53,
				    "ref": 53,
				    "title": "orci, in consequat enim diam vel",
				    "team": "Ivana E. Gay",
				    "client": "Colton",
				    "pm": "August",
				    "status": "Send",
				    "deadline": "Oct 25, 2018",
				    "date-sent": "Nov 15, 2018"
				  },
				  {
				    "id": 54,
				    "ref": 54,
				    "title": "Suspendisse aliquet",
				    "team": "Abdul I. Mccormick",
				    "client": "Beverly",
				    "pm": "Preston",
				    "status": "Send",
				    "deadline": "Feb 28, 2019",
				    "date-sent": "Jul 21, 2019"
				  },
				  {
				    "id": 55,
				    "ref": 55,
				    "title": "fermentum risus, at fringilla",
				    "team": "Macey J. Kent",
				    "client": "Ferdinand",
				    "pm": "Lucian",
				    "status": "Send",
				    "deadline": "Apr 14, 2018",
				    "date-sent": "Aug 17, 2018"
				  },
				  {
				    "id": 56,
				    "ref": 56,
				    "title": "sapien, cursus in,",
				    "team": "Francis K. Hendricks",
				    "client": "Carla",
				    "pm": "Gabriel",
				    "status": "Send",
				    "deadline": "May 19, 2018",
				    "date-sent": "Nov 24, 2018"
				  },
				  {
				    "id": 57,
				    "ref": 57,
				    "title": "Phasellus dolor elit,",
				    "team": "Deborah J. Baldwin",
				    "client": "Omar",
				    "pm": "Quentin",
				    "status": "Send",
				    "deadline": "Jun 18, 2018",
				    "date-sent": "Jul 8, 2018"
				  },
				  {
				    "id": 58,
				    "ref": 58,
				    "title": "lacus, varius",
				    "team": "Winifred B. Anthony",
				    "client": "Maia",
				    "pm": "Price",
				    "status": "Send",
				    "deadline": "Feb 19, 2020",
				    "date-sent": "Mar 14, 2018"
				  },
				  {
				    "id": 59,
				    "ref": 59,
				    "title": "Nunc mauris. Morbi",
				    "team": "Pearl H. Hardy",
				    "client": "Jolene",
				    "pm": "Nasim",
				    "status": "Send",
				    "deadline": "Dec 14, 2018",
				    "date-sent": "Nov 24, 2019"
				  },
				  {
				    "id": 60,
				    "ref": 60,
				    "title": "commodo at, libero. Morbi accumsan",
				    "team": "Chava K. Garrett",
				    "client": "Leonard",
				    "pm": "Chase",
				    "status": "Send",
				    "deadline": "Jun 12, 2019",
				    "date-sent": "Dec 22, 2019"
				  },
				  {
				    "id": 61,
				    "ref": 61,
				    "title": "Curabitur egestas nunc",
				    "team": "Illiana R. Guthrie",
				    "client": "Devin",
				    "pm": "Gareth",
				    "status": "Send",
				    "deadline": "Dec 27, 2018",
				    "date-sent": "Jun 11, 2018"
				  },
				  {
				    "id": 62,
				    "ref": 62,
				    "title": "dolor. Nulla semper tellus id",
				    "team": "Iola C. Frye",
				    "client": "Fay",
				    "pm": "Justin",
				    "status": "Send",
				    "deadline": "Feb 14, 2019",
				    "date-sent": "Feb 7, 2019"
				  },
				  {
				    "id": 63,
				    "ref": 63,
				    "title": "Mauris blandit",
				    "team": "Gary W. Sargent",
				    "client": "Ann",
				    "pm": "Isaiah",
				    "status": "Send",
				    "deadline": "Feb 24, 2020",
				    "date-sent": "Jul 19, 2018"
				  },
				  {
				    "id": 64,
				    "ref": 64,
				    "title": "elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet",
				    "team": "Dominique G. Moran",
				    "client": "Shafira",
				    "pm": "Phillip",
				    "status": "Send",
				    "deadline": "Mar 18, 2019",
				    "date-sent": "Mar 5, 2018"
				  },
				  {
				    "id": 65,
				    "ref": 65,
				    "title": "amet, consectetuer",
				    "team": "Silas S. Barnett",
				    "client": "Giacomo",
				    "pm": "Basil",
				    "status": "Pending",
				    "deadline": "Jun 19, 2019",
				    "date-sent": "Dec 10, 2018"
				  },
				  {
				    "id": 66,
				    "ref": 66,
				    "title": "Sed nulla ante, iaculis nec, eleifend",
				    "team": "Nathaniel Q. Kent",
				    "client": "Jocelyn",
				    "pm": "Dane",
				    "status": "Pending",
				    "deadline": "May 3, 2019",
				    "date-sent": "Jul 31, 2019"
				  },
				  {
				    "id": 67,
				    "ref": 67,
				    "title": "vel est tempor bibendum. Donec felis orci,",
				    "team": "Hakeem L. Williams",
				    "client": "Cyrus",
				    "pm": "Ronan",
				    "status": "Pending",
				    "deadline": "Jul 12, 2019",
				    "date-sent": "Aug 6, 2019"
				  },
				  {
				    "id": 68,
				    "ref": 68,
				    "title": "convallis",
				    "team": "Guinevere G. Wood",
				    "client": "Camden",
				    "pm": "Xanthus",
				    "status": "Pending",
				    "deadline": "Nov 1, 2018",
				    "date-sent": "Jun 21, 2018"
				  },
				  {
				    "id": 69,
				    "ref": 69,
				    "title": "iaculis enim, sit amet ornare lectus justo",
				    "team": "Nichole A. Sampson",
				    "client": "Alexis",
				    "pm": "Kelly",
				    "status": "Send",
				    "deadline": "Oct 21, 2018",
				    "date-sent": "Dec 4, 2019"
				  },
				  {
				    "id": 70,
				    "ref": 70,
				    "title": "ullamcorper magna. Sed eu eros.",
				    "team": "Urielle L. Griffith",
				    "client": "Conan",
				    "pm": "Yoshio",
				    "status": "Pending",
				    "deadline": "Nov 12, 2019",
				    "date-sent": "Jun 26, 2018"
				  },
				  {
				    "id": 71,
				    "ref": 71,
				    "title": "amet, dapibus id, blandit at, nisi. Cum sociis",
				    "team": "Selma R. Donovan",
				    "client": "Blake",
				    "pm": "Reuben",
				    "status": "Send",
				    "deadline": "Jun 27, 2018",
				    "date-sent": "Oct 5, 2019"
				  },
				  {
				    "id": 72,
				    "ref": 72,
				    "title": "magna. Sed eu eros. Nam consequat",
				    "team": "Yardley Y. Lewis",
				    "client": "Louis",
				    "pm": "Grant",
				    "status": "Send",
				    "deadline": "Feb 6, 2020",
				    "date-sent": "May 23, 2018"
				  },
				  {
				    "id": 73,
				    "ref": 73,
				    "title": "Cras convallis convallis dolor.",
				    "team": "Yuri R. Walls",
				    "client": "Cadman",
				    "pm": "Drew",
				    "status": "Send",
				    "deadline": "May 10, 2019",
				    "date-sent": "Aug 14, 2019"
				  },
				  {
				    "id": 74,
				    "ref": 74,
				    "title": "eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula.",
				    "team": "Marshall F. Melendez",
				    "client": "Jenna",
				    "pm": "Elton",
				    "status": "Send",
				    "deadline": "Mar 6, 2018",
				    "date-sent": "Sep 27, 2019"
				  },
				  {
				    "id": 75,
				    "ref": 75,
				    "title": "velit.",
				    "team": "Jana V. Wallace",
				    "client": "Ruby",
				    "pm": "Seth",
				    "status": "Send",
				    "deadline": "Mar 29, 2018",
				    "date-sent": "Oct 16, 2018"
				  },
				  {
				    "id": 76,
				    "ref": 76,
				    "title": "quis, pede. Suspendisse",
				    "team": "Lydia P. Noel",
				    "client": "TaShya",
				    "pm": "Stephen",
				    "status": "Send",
				    "deadline": "Jan 10, 2020",
				    "date-sent": "Jul 20, 2018"
				  },
				  {
				    "id": 77,
				    "ref": 77,
				    "title": "id enim.",
				    "team": "Brittany S. Hardin",
				    "client": "Ina",
				    "pm": "Hop",
				    "status": "Send",
				    "deadline": "Feb 18, 2020",
				    "date-sent": "Mar 12, 2018"
				  },
				  {
				    "id": 78,
				    "ref": 78,
				    "title": "in",
				    "team": "Tatiana L. Smith",
				    "client": "Marah",
				    "pm": "Cole",
				    "status": "Send",
				    "deadline": "Oct 27, 2019",
				    "date-sent": "Nov 14, 2019"
				  },
				  {
				    "id": 79,
				    "ref": 79,
				    "title": "velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas",
				    "team": "Branden H. Jenkins",
				    "client": "Harding",
				    "pm": "William",
				    "status": "Send",
				    "deadline": "Mar 7, 2019",
				    "date-sent": "Jul 22, 2019"
				  },
				  {
				    "id": 80,
				    "ref": 80,
				    "title": "nisi sem semper erat,",
				    "team": "Merritt S. Oconnor",
				    "client": "Lamar",
				    "pm": "Kato",
				    "status": "Send",
				    "deadline": "Jan 22, 2019",
				    "date-sent": "Apr 30, 2018"
				  },
				  {
				    "id": 81,
				    "ref": 81,
				    "title": "ipsum",
				    "team": "Quyn T. Blanchard",
				    "client": "Jacob",
				    "pm": "Declan",
				    "status": "Send",
				    "deadline": "May 4, 2019",
				    "date-sent": "Oct 5, 2018"
				  },
				  {
				    "id": 82,
				    "ref": 82,
				    "title": "tincidunt",
				    "team": "Elizabeth E. Macias",
				    "client": "Brendan",
				    "pm": "Hayden",
				    "status": "Pending",
				    "deadline": "Jun 20, 2019",
				    "date-sent": "Sep 6, 2019"
				  },
				  {
				    "id": 83,
				    "ref": 83,
				    "title": "at, nisi. Cum sociis natoque",
				    "team": "Shaine K. Wade",
				    "client": "Candace",
				    "pm": "Quamar",
				    "status": "Pending",
				    "deadline": "Jan 26, 2019",
				    "date-sent": "Dec 30, 2019"
				  },
				  {
				    "id": 84,
				    "ref": 84,
				    "title": "ipsum porta",
				    "team": "Ora K. Davenport",
				    "client": "Wylie",
				    "pm": "Brady",
				    "status": "Send",
				    "deadline": "Apr 24, 2018",
				    "date-sent": "Nov 11, 2018"
				  },
				  {
				    "id": 85,
				    "ref": 85,
				    "title": "mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis",
				    "team": "Phyllis O. Bright",
				    "client": "Pearl",
				    "pm": "Chester",
				    "status": "Send",
				    "deadline": "Nov 27, 2019",
				    "date-sent": "Jul 24, 2019"
				  },
				  {
				    "id": 86,
				    "ref": 86,
				    "title": "a purus. Duis elementum, dui quis accumsan convallis, ante lectus",
				    "team": "Cain A. Montgomery",
				    "client": "Shad",
				    "pm": "Acton",
				    "status": "Pending",
				    "deadline": "Mar 7, 2019",
				    "date-sent": "Nov 26, 2019"
				  },
				  {
				    "id": 87,
				    "ref": 87,
				    "title": "nisl arcu iaculis enim, sit amet ornare lectus justo eu",
				    "team": "Shaine X. York",
				    "client": "Diana",
				    "pm": "Donovan",
				    "status": "Send",
				    "deadline": "Dec 19, 2019",
				    "date-sent": "Jan 23, 2020"
				  },
				  {
				    "id": 88,
				    "ref": 88,
				    "title": "sit",
				    "team": "Rinah Y. Vaughan",
				    "client": "Brielle",
				    "pm": "Tarik",
				    "status": "Pending",
				    "deadline": "Aug 17, 2018",
				    "date-sent": "Sep 22, 2018"
				  },
				  {
				    "id": 89,
				    "ref": 89,
				    "title": "fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed,",
				    "team": "Hedda T. Gillespie",
				    "client": "Xyla",
				    "pm": "Herman",
				    "status": "Send",
				    "deadline": "Dec 15, 2018",
				    "date-sent": "Apr 10, 2019"
				  },
				  {
				    "id": 90,
				    "ref": 90,
				    "title": "Nullam",
				    "team": "Jenna Y. Duke",
				    "client": "Megan",
				    "pm": "Declan",
				    "status": "Pending",
				    "deadline": "Dec 28, 2018",
				    "date-sent": "Mar 22, 2018"
				  },
				  {
				    "id": 91,
				    "ref": 91,
				    "title": "nunc risus varius orci, in consequat enim diam vel arcu.",
				    "team": "Davis R. Little",
				    "client": "Halla",
				    "pm": "Tanek",
				    "status": "Pending",
				    "deadline": "Dec 14, 2018",
				    "date-sent": "Jul 2, 2018"
				  },
				  {
				    "id": 92,
				    "ref": 92,
				    "title": "ut lacus. Nulla tincidunt, neque vitae",
				    "team": "Laurel G. Fuentes",
				    "client": "Kylie",
				    "pm": "Hayden",
				    "status": "Send",
				    "deadline": "Sep 5, 2018",
				    "date-sent": "Apr 5, 2018"
				  },
				  {
				    "id": 93,
				    "ref": 93,
				    "title": "sit",
				    "team": "Deborah S. Eaton",
				    "client": "Zenia",
				    "pm": "Benjamin",
				    "status": "Pending",
				    "deadline": "Oct 12, 2019",
				    "date-sent": "Nov 3, 2019"
				  },
				  {
				    "id": 94,
				    "ref": 94,
				    "title": "est tempor bibendum.",
				    "team": "Lionel Y. Doyle",
				    "client": "Sloane",
				    "pm": "Howard",
				    "status": "Send",
				    "deadline": "Mar 9, 2019",
				    "date-sent": "Nov 18, 2018"
				  },
				  {
				    "id": 95,
				    "ref": 95,
				    "title": "sapien. Cras",
				    "team": "Regina S. Griffith",
				    "client": "Aline",
				    "pm": "Peter",
				    "status": "Send",
				    "deadline": "Dec 21, 2019",
				    "date-sent": "Mar 27, 2019"
				  },
				  {
				    "id": 96,
				    "ref": 96,
				    "title": "tellus. Suspendisse sed dolor. Fusce mi lorem,",
				    "team": "Leroy F. Benjamin",
				    "client": "Burton",
				    "pm": "Wing",
				    "status": "Send",
				    "deadline": "Oct 8, 2018",
				    "date-sent": "Aug 15, 2019"
				  },
				  {
				    "id": 97,
				    "ref": 97,
				    "title": "in molestie tortor nibh sit amet orci. Ut sagittis",
				    "team": "Macon M. Bradford",
				    "client": "Damian",
				    "pm": "Arsenio",
				    "status": "Pending",
				    "deadline": "Sep 11, 2018",
				    "date-sent": "Dec 26, 2019"
				  },
				  {
				    "id": 98,
				    "ref": 98,
				    "title": "consequat, lectus sit",
				    "team": "Desiree V. Ruiz",
				    "client": "Marsden",
				    "pm": "Bruce",
				    "status": "Send",
				    "deadline": "Jul 14, 2019",
				    "date-sent": "Apr 21, 2019"
				  },
				  {
				    "id": 99,
				    "ref": 99,
				    "title": "dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc",
				    "team": "Lisandra L. Daugherty",
				    "client": "Neville",
				    "pm": "Xanthus",
				    "status": "Pending",
				    "deadline": "Jun 1, 2019",
				    "date-sent": "Mar 5, 2018"
				  },
				  {
				    "id": 100,
				    "ref": 100,
				    "title": "scelerisque neque",
				    "team": "Jarrod A. Hood",
				    "client": "Benjamin",
				    "pm": "Garrison",
				    "status": "Pending",
				    "deadline": "Jan 7, 2020",
				    "date-sent": "Mar 15, 2018"
					}
		    ]};
				var pager = {
  view:"pager",
  id:"pager",
	css:"paginate-box",
	template:"{common.prev()} {common.pages()} {common.next()}",
  size:10,
  group:5
};

    webix.ui({
			container:"box",
			rows:[
			paginate,
      pager]
			
		   
		 
		});
		
			});

		</script>
		 
@endsection