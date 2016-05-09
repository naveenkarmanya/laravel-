<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Redirect;

use File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class counterController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function home() {
        $filename = 'counter.txt';

        $current_value = (File::exists($filename)) ? File::get($filename) : 0;

        File::put('counter.txt', ++$current_value);

        return View('Counter', ['current_value1' => $current_value]);
    }

    public function spellcheck() {
        return View('users/spellchecker');
    }

    public function checkspelling() {

        $word = Input::get('word');
        $result = null;
        $result2 = null;
        $success = 0;
        $letter = substr($word, 0, 1);
        $spelling = DB::table('english')->where("word", "like", $letter . "%")->get();

        foreach ($spelling as $users1) {
            foreach ($users1 as $x => $users2) {

                similar_text($word, $users2, $percent);
                //echo $percent; exit;
                if ($percent > 65) {
                    $result.="<li>" . $users2 . "</li>";
                    echo $result;

                    if ($percent > 90) {
                        $success = 1;
                        $result2 = "<li>" . $users2 . "</li>";
                    }
                }
            }
            if ($success == 1) {
                echo $result;
            } else {
                echo $result2;
            }
        }
    }

    public function guest() {
        return View('users/guestbook');
    }

    public function guestbook() {
        $FirstName = Input::get('name');
        $EmailAddress = Input::get('email');
        $message = Input::get('message');
        $validateError = null;
        $validate = null;
        $Insert = DB::table('GuestBook')->insert(
                ['name' => $FirstName,
                    'email' => $EmailAddress,
                    'message' => $message
        ]);
//        if ($Insert == 1) {
//            $validate = "succesfully submited ";
//        } else {
//            $validateError = "Something went wrong";
//        }
        $User = DB::table('GuestBook')->SELECT('name', 'email', 'message')->where([
                    'name' => $FirstName, 'email' => $EmailAddress, 'message' => $message])->get();
        foreach ($User as $values) {
            foreach ($values as $value => $key) {
                echo '<br>' . $key;
            }
        }

        return view('users/guestbook', array(
            'message' => $validate,
            'error' => $validateError
        ));
    }

    public function chat($name) {

        return view('users/chat', ['name' => $name]);
    }

    public function chatsubmit() {

        $message = Input::get('message');
        $name = Input::get('name');
        DB::table('chat')->insert(['name' => $name, 'message' => $message]);
        return Redirect::route('chatbox', ['name' => $name]);
    }

    public function getchat() {
        $returnvalue = null;
        $result = DB::table('chat')->get();
        foreach ($result as $values) {
            foreach ($values as $value => $key) {
                if ($value == 'name') {
                    $returnvalue.="<p>" . $key . " -";
                } else {
                    $returnvalue.= $key . "</p>";
                }
            }
        }
        echo $returnvalue;
    }

    public function websiteupordown() {

        return View('users/upordown');
    }

    public function upordown() {


        $cs = curl_init($url = null);
        curl_setopt($cs, CURLOPT_NOBODY, TRUE);
        curl_setopt($cs, CURLOPT_FOLLOWLOCATION, TRUE);
        $status_code = curl_getinfo($cs, CURLINFO_HTTP_CODE);
        return($status_code = 200) ? true : FALSE;


        if (isset($_POST['url']) == TRUE && empty($_POST['url']) == FALSE) {
            $url = trim($_POST['url']);
            if (filter_var($url, FILTER_VALIDATE_URL) == true) {
                if (upordown($url) == TRUE) {
                    echo 'Wensite url is up';
                } else {
                    echo 'sorry, Website url id down';
                }
            } else {
                echo 'Invalid Url';
            }
        }
    }

    public function album() {

        $page = $_SERVER['PHP_SELF'];
        $column = 2;
        $base = "data";
        $thumbs = "thumbs";
        @$get_album = $_GET['album'];
        if (!$get_album) {
            $choice = "Select an Album";
            $handle = File::directories($base);
            // print_r($handle);
            foreach ($handle as $file) {
                if ($file != 'data/thumbs') {
                    $file = substr($file, "5");

                    // echo $file;
                    $folder[] = $file;
                }
            }
        }

        return View('users/photoalbum', ['Photoalbum_folder' => $folder, "choice" => $choice]);
    }

    public function folder($folder) {

        $path = 'data/' . $folder;
        $file = File::Files($path);
        //print_r($file);
        return View('users/photoalbum', ['Photoalbum_image' => $folder, "image" => $file]);
    }
    
    
        public function translate($language) {
        
        return view('users/translate', ['language' => $language]);
    }

    public function main() {

        return view('users/translate', ['language' => "english"]);
    }

    public function menu($language) {

        $object = new counterController();
        $menu = $object->$language();
        return view('users/menu',['menu'=>$menu,'language'=>$language]);
    }

    public function english() {

        $lang = array(
            "hello" => "Hello",
            "coffee" => "Coffee",
            "welcome" => "Welcome",
            "pizza" => "Pizza",
            "burger" => "Burger",
            "rice" => "Rice",
            "icecream" => "Ice Cream"
        );

        return $lang;
    }

    public function spanish() {

        $lang = array(
            "hello" => "Hola",
            "coffee" => "Café",
            "welcome" => "Bienvenido",
            "pizza" => "la pizza",
            "burger" => "hamburguesa",
            "rice" => "arroz",
            "icecream" => "helado"
        );


        return $lang;
    }

    public function telugu() {

        $lang = array(
            "hello" => "హలో",
            "coffee" => "కాఫీ",
            "welcome" => "స్వాగత",
            "pizza" => "పిజ్జా",
            "burger" => "బర్గర్",
            "rice" => "వరి",
            "icecream" => "ఐస్ క్రీం"
        );


        return $lang;
    }
 

  public function index() {
         session()->regenerate();
           session(['token' => base64_encode(openssl_random_pseudo_bytes(32))]);      
$session= session('token');

        return view('users/crosssite',['value'=>$session]);
    }
    public function indexsecond($message) {
         session()->regenerate();
           session(['token' => base64_encode(openssl_random_pseudo_bytes(32))]);      
$session= session('token');

        return view('users/crosssite',['value'=>$session,'message'=>$message]);
    }
    public function csrf() {
        $result="";
        $object=new counterController();
        session()->regenerate();
      $quantity=Input::get('quantity');
      $product=Input::get('product');
      $token=Input::get('token');
      if(!empty($quantity) && !empty($product))
      {
          if($object->check($token)){
        $result="ordered processed";
     
          
          }
          
      }
      else
          {
              $result="Somthing went Wrong!Please check it.";
              
          }
          
      
   return Redirect::route('csrfprocess',['message'=>$result]);
        
    }

public function check($token){
      session()->regenerate();
      $get=session()->get('token');
     
    if( $token===$get)
    {
       
        Session::pull('token', 'default');
        return TRUE;
    }
    return false;
  
}
public function  shoppingcart()
{
     return view('users/minishoppingcart');
}

 public function cart() {
        $Name = Input::get('name');
        $Price = Input::get('price');
        $Shipping = Input::get('shipping');
        $Quantity = Input::get('Quantity');
        $Description= Input::get('description');
        $total= Input::get('total');
        $validateError = null;
        $validate = null;
        $Insert = DB::table('products')->insert(
                ['name' => $Name,
                    'price' => $Price,
                    'description' => $Description,
                 'shipping' => $Shipping,
                 'quantity' => $Quantity,
                'total' => $total
                 
        ]);
        if ($Insert == 1) {
            $validate = "succesfully submited ";
        } else {
            $validateError = "Something went wrong";
        }
        $User = DB::table('products')->get();
//        if($value=='quantity')
//        {
//            
//        }
       
               return view('users/shoppingcart',['User'=>$User]);

 }
 public function cartupdate() {
        
        $Price = Input::get('price');
        
        $Quantity = Input::get('Quantity');
       
        $total= Input::get('total');
        $validateError = null;
        $validate = null;
       
        $User = DB::table('products')->where('products_id',1)->update(['quantity' => $Quantity,'price'=>$Price,'total'=>$total]);
//        if($value=='quantity')
//        {
//            
//        }
       $User1 = DB::table('products')->get();
               return view('users/shoppingcart',['User'=>$User1]);

 }
 
 public function deletesubmit() {
        
        $Price = Input::get('price');
        
        $Quantity = Input::get('Quantity');
      
        $total= Input::get('total');
        $validateError = null;
        $validate = null;
       
        $User = DB::table('products')->where('products_id',1)->truncate();
//        if($value=='quantity')
//        {
//            
//        }
       $User2 = DB::table('products')->get();
               return view('users/shoppingcart',['User'=>$User2]);

 }


 public function  editsubmit()
{
     return view('users/editsubmit');
}
 
//Dynamic Rss----------------------------------------------------------------------------

  public function  dynamicrss()
{
     return view('users/dynamicrss');
}

}
?>