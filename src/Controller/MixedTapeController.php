<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
use Twig\Environment;

class MixedTapeController extends AbstractController{

    #[Route('/', name: 'app_homepage')]

 public function homepage(Environment $twig) :Response {
    
    $tracks=[
        ['song'=>'Gangsta Paradise', 'artist'=>'Coolio'],
        ['song'=>'Waterfalls', 'artist'=> 'TLC'],
        ['song'=>'Creep ', 'artist'=> 'Radiohead'],
        ['song'=>'Kiss from a Rose', 'artist'=> 'Seal'],
        ['song'=>'On Bended Knee', 'artist'=>' Boyz II Men'],
        ['song'=>'Fantasy', 'artist'=> 'Mariah Carey'],
    ];
    
   
    // dd($tracks);

    // dump($tracks);

    //  die("mixed-tapes: surely not fancy looking page");
    //  return new Response("Pink Floyd --- Another Brick In the wall");
//   $html=$twig->render('mixed/homepage.html.twig',[
//         'title'=>'Mixed 90s music',
//         'tracks'=> $tracks,
//     ]);

  return $this->render('mixed/homepage.html.twig',[
        'title'=>'Mixed 90s music',
        'tracks'=> $tracks,
    ]);
    // dd($html);
 }


 #[Route('/browse/{slug}',name:'app_browse')] //route address


 public function browser(string $slug=null):Response
 { 
    //   if($slug){
    //  $title =u(str_replace('_', '', $slug))->title(true);
    // }else {
    //     $title =" All Genres";

    // }
    // return new Response ('Gerne: ' .$title);
    //  return new Response('hello browse');

$genre=$slug ? u(str_replace('_', '', $slug))->title(true):null;

return $this->render('mixed/browse.html.twig',['genre'=> $genre]);

}

};
