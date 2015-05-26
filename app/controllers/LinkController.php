<?php

class LinkController extends BaseController{

    public function make(){

        //makes sure URL exist, makes sure its an URL, makes sure its not longer than 255 char
        $validator = Validator::make(Input::all(), array(
            'url' => 'required|url|max:255'

        ));

        //if validation fails redirect to index with error message
        if($validator->fails()){

            $error = 'Not valid URL';

            return json_encode($error);
        } else {
            //gets URL, sets code to null
            $url = Input::get('url');
            $code = null;

            //checks if URL exists with eloquent method (where), then echos the first code if exists otherwise we generate a new code
            $exists = Link::where('url', '=', $url);
            if($exists->count() === 1){
                $code = $exists->first()->code;
            } else{
                //create is another eloquent method
                $created = Link::create(array(
                    'url' => $url
                ));
                //if it created then make a new code by changing the base, then update the
                if($created) {
                    $code = base_convert($created->id, 10, 36);

                    Link::where('id', '=', $created->id)->update(array(
                        'code' => $code
                    ));
                }
            }

            if($code){
                //redirect to home with shortened URL
                //return Redirect::action('home')->with('global', 'Here is your shortened URL: <a href="' . URL::action('get', $code) . '">' . URL::action('get', $code) . '</a>');
                //die(var_dump($code));

                $result = (json_encode($code));

                return $result;
            }
        }

        return Redirect::action('home')->with('global', 'Something Went wrong, try again');
    }

    public function get(){
        $code = $_GET["code"];
        $link = Link::where('code', '=',  $code);

        //redirect to the actual site of the URL
        if($link->count() === 1){
            return $link->first()->url;
        }

        return "Something went wrong";
    }
}