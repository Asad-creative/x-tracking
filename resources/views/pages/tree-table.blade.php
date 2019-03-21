@extends('welcome')

@section('content')
<div id ="tree-table"></div>
            <script type="text/javascript" charset="utf-8">
            treedata = [
    { id: "1", value: "Book 1", css:"table-1",  data: [
        { id: "1.1", value: "Part 1" },
        { id: "1.2", value: "Part 2" }
    ]},

    { id: "2", value: "Book 2", data: [
        { id: "2.1", value: "Part 1" }
    ]}, 7

    { id: "3", value: "Book 3", data: [
        { id: "3.1", value: "Part 1" }
    ]},


    { id: "4", value: "Book 4", data: [
        { id: "4.1", value: "Part 1" }
    ]},

    
    { id: "5", value: "Book 5", data: [
        { id: "5.1", value: "Part 1" , data: [
        { id: "5.2", value: "Part 2" },
        { id: "5.3", value: "Part 3" }
    ]},
    ]}
];
tree = webix.ui({
    container:"tree-table",
    view: "tree",
    
    data: treedata
});


                 </script>

@endsection
