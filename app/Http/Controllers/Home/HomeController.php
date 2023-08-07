<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $contact = [
            'city' => 'Dhaka',
            'street'=>'main gate, opposite Jamuna Future Park',
            'area'=>'Bashundhara R/A',
            'house'=>'Adept K.R Complex',
            'email'=>'sales@bengalsoftware.com',
            'phone'=>' +8801636408000',
            'website'=>'https://bengalsoftware.com/',
        ];

        $image=[
            'homeimg1'=>'/assets/img/HR.jpeg',
            'homeimg2'=>'/assets/img/emphr.png',
        ];

        $team = [
            [
                'image' => 'assets/img/team/imon.jpeg',
                'member' => 'Imon Faysal',
                'role' => 'Software Engineer',
                'facebook'=>'https://www.facebook.com/faysalahmed.khan.1',
                'linkedin'=>'https://www.linkedin.com/in/imon-faysal-143b82234/',
                'email'=>'emonf666@gmail.com'
            ],
            [
                'image' => 'assets/img/team/sheikhraihan.jpeg',
                'member' => 'Sheikh Raihan Al Saleh',
                'role' => 'Software Engineer',
                'facebook'=>'https://www.facebook.com/sheakhraihan.nabil/',
                'linkedin'=>'https://www.linkedin.com/in/sheikh-raihan-al-saleh-b24330188/',
                'email'=>'sheikhraihanalsaleh22@gmail.com'
            ],
            [
                'image' => 'assets/img/team/hasan.png',
                'member' => 'Kazi Mahamud Hasan',
                'role' => 'Software Engineer',
                'facebook'=>'https://www.facebook.com/raihan.mahmud.16121',
                'linkedin'=>'https://www.linkedin.com/in/kazi-mahamud-9609a8257/',
                'email'=>'raihanmahmud10112@gmail.com'
            ],
            [
                'image' => 'assets/img/team/faijul.jpg',
                'member' => 'Faijul Abedin',
                'role' => 'Software Engineer',
                'facebook'=>'https://www.facebook.com/faijul.abedin.9',
                'linkedin'=>'https://www.linkedin.com/in/faijul-abedin/',
                'email'=>'faijulabedin7@gmail.com'
            ],
        ];

        $slider=[

            [
                'id'=>'1',
                'image'=>'assets/img/screen/1.png',
            ],
            [
                'id'=>'2',
                'image'=>'assets/img/screen/2.png',
            ],
            [
                'id'=>'3',
                'image'=>'assets/img/screen/3.png',
            ],
            [
                'id'=>'4',
                'image'=>'assets/img/screen/4.png',
            ],
            
                
        ];

        $features=[

            [
                'id'=>'1',
                'image'=>'assets/img/svg/paint-palette.svg',
                'name'=>'creative design',
                'feature'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ],
            [
                'id'=>'2',
                'image'=>'assets/img/svg/vector.svg',
                'name'=>'Retina Ready',
                'feature'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ],
            [
                'id'=>'3',
                'image'=>'assets/img/svg/design-tool.svg',
                'name'=>'easy to use',
                'feature'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ],
            [
                'id'=>'4',
                'image'=>'assets/img/svg/asteroid.svg ',
                'name'=>'Free Updates',
                'feature'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ],
            [
                'id'=>'5',
                'image'=>'assets/img/svg/code.svg',
                'name'=>'clean codes',
                'feature'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ],
            
                
        ];
        
        
        return view('home.homepage',compact('contact','image','team','slider','features'));
    }
    
}
