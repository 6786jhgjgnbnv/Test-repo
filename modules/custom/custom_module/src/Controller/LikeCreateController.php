<?php

namespace Drupal\custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\Client;
use Drupal\Core\Render\Markup;


/**
 * Class ApiAcessController.
 *
 * @package Drupal\custom_common\Controller
 */
class LikeCreateController extends ControllerBase {

	function likecreate($id){
		  $current_path = \Drupal::service('path.current')->getPath();
	    $path_args = explode('/', $current_path);

	    $database = \Drupal::database();
	    $query = $database->select('simple_like', 'sl');
	  	$query->fields('sl');
	  	$query->condition('sl.bundle','article');
	  	$query->condition('sl.entity_id',$path_args[2]);
	  	$result = $query->execute()->fetchAll();
	    $count= count($result);
	    $header = [];
	    foreach ($result as $key => $value) {
	    $header = t('Like Count --').$count;
	    }
	    return [
	      '#type' => '#markup',
	      '#markup' => render($header)
	    ];

	}
//question 2 answer
	function swapexample(){
		
		$a=234; 

    $b=345;  

		$a=$a+$b;  
		$b=$a-$b;  
		$a=$a-$b;

echo "A";print_r($a);
echo "B";print_r($b);

		
    exit;
	}
}