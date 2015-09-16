<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class SpaceTree
{

    public $chain = [];
    public $tree_string = "";

    public function sTree($father_id)
    {

        $nodes = DB::table('node_links')->where('father_id', $father_id)->where('node_id', '>', 0)->lists('node_id');

        $this->chain[$father_id] = $nodes;

        //[1]=>[2 ,3]
        $this->recursiveTree($nodes, $this->chain[$father_id]);

        return ['tree_array' => $this->chain, 'tree_string' => $this->tree_string];
    }

    public function recursiveTree($father_ids, &$arr)
    {
        $this->tree_string .= "{";

        // [1]=>[2,3] $arr is at [1]
        for ($i = 0; $i < sizeof($father_ids); $i++) {

            //index 2
            $fathers = DB::table('node_links')->where('father_id', $father_ids[$i])->where('node_id', '>', 0)->lists('node_id');

            //index 2 users 4,5
            //by reference on 2 nd array
            $find_node = DB::table('users')->where('id', $arr[$i])->first();
            //$this->tree_string .= "<li title='This is tooltip for user $find_node->name'><label>$find_node->name</label>";
            $this->tree_string .= "id : '{{$find_node->id}}', name : '{{$find_node->name}}', data : { 'descript': {{$find_node->descripcion}} },";

            unset($arr[$i]);

            $arr[$father_ids[$i]] = $fathers;

            if (sizeof($fathers) > 0) {
                //[2]=>[4,5] reference [2]=>
                $this->tree_string .= "children : [";
                $this->recursiveTree($fathers, $arr[$father_ids[$i]]);
                $this->tree_string .= "]";
            }

            //$this->tree_string .= "</li>";

        }

        $this->tree_string .= "};";
    }
}
