<?php DECLARE(STRICT_TYPES=1);

# cc34771

$clr  = CI_DEBUG ? 'fgr'    : 'fgg';

$ver  = CI_DEBUG ? 'Debug'  : 'Ver';
$ver  = $ver . ': ' 
      .  CodeIgniter\CodeIgniter::CI_VERSION 
      ;                

/*
$sup  = '<sup class="fss">' 
      .   $sup . ': ' 
      .   CodeIgniter\CodeIgniter::CI_VERSION 
      . '</sup>'
      ;                
*/

# title="version <?= CodeIgniter\CodeIgniter::CI_VERSION "      
?>

  <div class="flr fsl ooo"> 
    <a 
      class="tdn" 
      href="https://github.com/John-Betong/ci4-strict">
        GitHub 
    </a>
  </div>
    
  <div class="fll logo"> 
    <a 
      href="<?= BASEURL ?>" 
      title="Home"
    >
      <?= file_get_contents('assets/svg/logo.svg'); ?>
    </a>  
  </div>  
   
  <div class="p42 fgg dib tac">
    <h1 class="ooo <?= $clr ?>"> 
      <a class="tdn" href="<?= BASEURL ?>"> CI4-Strict.tk </a>
    </h1>

    <div class="ooo dib fss"> 
      <?= $ver ?>
      -
      <i> <b>Build:</b> 7007f51 (previous: a976069) </i>
    </div>
  </div>  

