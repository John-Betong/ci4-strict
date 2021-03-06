<?php DECLARE(STRICT_TYPES=1);  

namespace App\Controllers;

# echo __file__;die;

//=========================================  
class C_page extends BaseController
{

//=========================================  
public function index(string $page='myths') // 'welcome_message')
{
  $analytics = <<< ____EOT
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149630114-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-149630114-1');
    </script>
____EOT;

  $data['pages']      = $this->pages; //
  $data['analytics']  = $analytics; 
  $data['title']      = 'Ci4-Strict.tk'; //
  $data['footer']     = view('incs/footer.php', $data, [TRUE] ) .$analytics; 
 #$data['style_tla']  = $this->style_tla;

  if( array_key_exists($page, $this->pages) ) :  
    $data['title'] = $data['pages'][$page];
    $page = 'pages/v-' .$page;
  else :  
    $data['title'] = 'welcome_message';
    $whoops = '../app-strict/Views/errors/html/production.php';  
    echo file_get_contents($whoops);
    die;
  endif;
  $data['vPage']  =  $page; 
  # f red($data); die;
  # echo $page ; die;
  
	return view($data['vPage'], $data);
}//


}///
